<?php
//***************************************************************************************
//  Example:
//  ...
//  $ds = new PDODataSource(new PDO ("mssql:host=localhost;dbname=mydatabase","username","password"));
//  $ds->SelectCommand = "SELECT * FROM customers";
//  ...
//  $grid->MasterTable->DataSource = $ds;
//  ...
//***************************************************************************************

class PDODataSource extends DataSource {

    var $SelectCommand;
    var $UpdateCommand;
    var $InsertCommand;
    var $DeleteCommand;
    public $seperator;
    public $donotUpdateFields;
    public $donotInsertFields;
    var $_PDO;

    function __construct($_pdo) {
        $this->_PDO = $_pdo;
        $this->seperator = "+"; // alt+ 457                
    }

    function GetError() {
        return $this->_PDO->errorInfo();
    }

    function SetCharSet($_charset) {
        //Set in the pdo connection.
    }

    function Count() {
        $_count_command = "SELECT COUNT(*) FROM (" . $this->SelectCommand . ") AS _TMP {where}";
        $_where = "";
        $_filters = $this->Filters;
        for ($i = 0; $i < sizeof($_filters); $i++) {
            $_where.=" and " . $this->GetFilterExpression($_filters[$i]);
        }
        if ($_where != "") {
            $_where = "WHERE " . substr($_where, 5);
        }
        $_count_command = str_replace("{where}", $_where, $_count_command);

        $_statement = $this->_PDO->prepare($_count_command);

        $_statement->execute();

        $_result = $_statement->fetch(PDO::FETCH_NUM);

        return $_result[0];
    }

    function GetFields() {
        $_fields = array();
        $_statement = $this->_PDO->prepare($this->SelectCommand);
        $_statement->execute();


        foreach (range(0, $_statement->columnCount() - 1) as $column_index) {
            try {
                $meta = $_statement->getColumnMeta($column_index);
            } catch (Exception $e) {
                $meta = array("Name" => $column_index, "Type" => "string", "Not_Null" => false);
            }
            $_field = array("Name" => $meta["name"], "Type" => $meta["native_type"], "Not_Null" => false);
            array_push($_fields, $_field);
        }
        return $_fields;
    }

    function GetData($_start = 0, $_count = 9999999) {//Return associate array of data
        $_tpl_select_command = "";
        switch ($this->_PDO->getAttribute(PDO::ATTR_DRIVER_NAME)) {
            case "odbc":
            case "mssql":
            case "sqlsrv":
                $_tpl_select_command = "SELECT {limit} * FROM ({SelectCommand}) AS _TMP {where} {orderby} {groupby}";
                break;
            case "oci":
                $_tpl_select_command = "SELECT * FROM (SELECT * FROM (SELECT * FROM ({SelectCommand}) {where} {orderby} {groupby}) WHERE ROWNUM<={start+count}) WHERE ROWNUM>={start}";
                break;
            case "mysql":
            case "sqlite2":
            default:
                $_tpl_select_command = "SELECT * FROM ({SelectCommand}) AS _TMP {where} {orderby} {groupby} {limit}";
        }//Filters
        
        $_where = "";
        $_filters = $this->Filters;
        for ($i = 0; $i < sizeof($_filters); $i++) {
            $_where.=" and " . $this->GetFilterExpression($_filters[$i]);
        }
        if ($_where != "") {
            $_where = "WHERE " . substr($_where, 5);
        }//Order
        
        $_orderby = "";
        $_orders = $this->Sorts;
        for ($i = 0; $i < sizeof($_orders); $i++) {
            $_orderby.=", " . $_orders[$i]->Field . " " . $_orders[$i]->Order;
        }
        if ($_orderby != "") {
            $_orderby = "ORDER BY " . substr($_orderby, 2);
        }//Group
        
        $_groupby = "";
        $_groups = $this->Groups;
        for ($i = 0; $i < sizeof($_groups); $i++) {
            $_groupby.=", " . $_groups[$i]->Field;
        }
        if ($_groupby != "") {
            $_groupby = "GROUP BY " . substr($_groupby, 2);
        }


        $_select_command = str_replace("{SelectCommand}", $this->SelectCommand, $_tpl_select_command);
        $_select_command = str_replace("{where}", $_where, $_select_command);
        $_select_command = str_replace("{orderby}", $_orderby, $_select_command);
        $_select_command = str_replace("{groupby}", $_groupby, $_select_command);

        //Limit
        $_limit = "";
        switch ($this->_PDO->getAttribute(PDO::ATTR_DRIVER_NAME)) {
            case "sqlsrv":
            case "mssql":
                $_limit = "TOP " . ($_start + $_count);
                $_select_command = str_replace("{limit}", $_limit, $_select_command);
                break;
            case "oci":
                $_select_command = str_replace("{start}", $_start, $_select_command);
                $_select_command = str_replace("{start+count}", ($_start + $_count), $_select_command);
                break;
            case "mysql":
            case "sqlite2":
            default:
                $_limit = "LIMIT " . $_start . " , " . $_count;
                $_select_command = str_replace("{limit}", $_limit, $_select_command);
        }

        //echo $_select_command;

        $_statement = $this->_PDO->prepare($_select_command);
        $_statement->execute();

        $_rows = array();
        switch ($this->_PDO->getAttribute(PDO::ATTR_DRIVER_NAME)) {
            case "odbc":
            case "sqlsrv":
            case "mssql":
                $_i = 0;
                while ($_row = $_statement->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) {
                    if ($_i >= $_start) {
                        array_push($_rows, $_row);
                    }
                    $_i++;
                }
                break;
            case "oci":
            case "mysql":
            case "sqlite2":
            default:
                while ($_row = $_statement->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) {
                    array_push($_rows, $_row);
                }
        }
        return $_rows;
    }

    function GetAggregates($_arr) {

        $_tpl_select_command = "SELECT {text} FROM ({SelectCommand}) AS _TMP {where} {orderby} {groupby}";

        $_text = "";
        $_agg_result = array();
        foreach ($_arr as $_aggregate) {
            if (strpos("||min|max|first|last|count|sum|avg|", "|" . strtolower($_aggregate["Aggregate"]) . "|") > 0) {
                $_text .= ", " . $_aggregate["Aggregate"] . "(" . $_aggregate["DataField"] . ") as " . $_aggregate["Key"];
            }
        }


        if ($_text != "") {

            $_text = substr($_text, 2);
            //Fill command and query
            //Filters
            $_where = "";
            $_filters = $this->Filters;
            for ($i = 0; $i < sizeof($_filters); $i++) {
                $_where.=" and " . $this->GetFilterExpression($_filters[$i]);
            }
            if ($_where != "") {
                $_where = "WHERE " . substr($_where, 5);
            }
            //Order
            $_orderby = "";
            $_orders = $this->Sorts;
            for ($i = 0; $i < sizeof($_orders); $i++) {
                $_orderby.=", " . $_orders[$i]->Field . " " . $_orders[$i]->Order;
            }
            if ($_orderby != "") {
                $_orderby = "ORDER BY " . substr($_orderby, 2);
            }
            //Group
            $_groupby = "";
            $_groups = $this->Groups;
            for ($i = 0; $i < sizeof($_groups); $i++) {
                $_groupby.=", " . $_groups[$i]->Field;
            }
            if ($_groupby != "") {
                $_groupby = "GROUP BY " . substr($_groupby, 2);
            }

            $_select_command = str_replace("{SelectCommand}", $this->SelectCommand, $_tpl_select_command);
            $_select_command = str_replace("{text}", $_text, $_select_command);
            $_select_command = str_replace("{where}", $_where, $_select_command);
            $_select_command = str_replace("{orderby}", $_orderby, $_select_command);
            $_select_command = str_replace("{groupby}", $_groupby, $_select_command);

            //echo $_select_command;

            $_statement = $this->_PDO->prepare($_select_command);
            $_statement->execute();

            $_agg_result = $_statement->fetch(PDO::FETCH_ASSOC);

            //-----
        }
        return $_agg_result;
    }


    /* =========================================================
     * $this->donotInsertFields is declared as public array
     * and instantiated at the calling page
      ========================================================== */
    function Insert($_associate_array) { //eCOS version
        $_insert_commands = explode(";", $this->InsertCommand);
        $paramArray = array();
        foreach ($_insert_commands as $_insert_command) {
            $_statement = $this->_PDO->prepare($this->InsertCommand);

            foreach ($_associate_array as $_key => $_value) {
                if (!in_array($_key, $this->donotInsertFields)) {
                    $paramArray[":" . $_key] = $_value;
                }
            }
            $_statement->execute($paramArray);
        }
        return true;
    } //eof insert

    /* =========================================================
     * $this->donotUpdateFields is declared as public array
     * and instantiated at the calling page
      ========================================================== */
    function Update($_associate_array) {
        $_update_commands = explode(";", $this->UpdateCommand);
        $paramArray = array();

        try {
            $_statement = $this->_PDO->prepare($this->UpdateCommand);

            foreach ($_associate_array as $_key => $_value) {
                if (!in_array($_key, $this->donotUpdateFields)) {
                    $paramArray[":" . $_key] = $_value;
                }
            }
            $_statement->execute($paramArray);
        } catch (PDOException $exc) {
            //echo $exc->getMessage();
            return false;
        }
        return true;
    }//

    function Delete($_associate_array) {
        $_delete_commands = explode(";", $this->DeleteCommand);

        foreach ($_associate_array as $_key => $_value) {
            for ($i = 0; $i < sizeof($_delete_commands); $i++) {
                $_delete_commands[$i] = str_replace("@" . $_key, addslashes($_value), $_delete_commands[$i]);
            }
        }
        foreach ($_delete_commands as $_delete_command) {
            $_statement = $this->_PDO->prepare($_delete_command);
            if ($_statement->execute() == false) {
                return false;
            }
        }
        return true;
    }

}
?>
