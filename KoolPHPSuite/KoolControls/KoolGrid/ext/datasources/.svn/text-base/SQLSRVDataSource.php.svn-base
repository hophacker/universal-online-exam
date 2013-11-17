<?php
//***************************************
// Written by Khanal, Aashis Binod from BBVANY, New York
// Email: Aashis.Khanal@bbvany.com
//***************************************


class SQLSRVDataSource extends DataSource
{
	var $SelectCommand;
	var $UpdateCommand;
	var $InsertCommand;
	var $DeleteCommand;
	
	var $_Link;
	
	function __construct($_link)
	{
		$this->_Link = $_link;
	}
	function GetError()
	{
		return sqlsrv_errors();
	}
	function SetCharSet($_charset)
	{
		//Set in the connection string
	}		
	function Count()
	{
            $_count_command = "SELECT COUNT(*) as count FROM (".$this->SelectCommand.") AS _TMP {where}";
            $_where = "";
            $_filters = $this->Filters;
            for($i=0;$i<sizeof($_filters);$i++)
            {
                $_where.=" and ".$this->GetFilterExpression($_filters[$i]);
            }
            if ($_where!="")
            {
                $_where = "WHERE ".substr($_where,5);
            }

            $_count_command = str_replace("{where}",$_where,$_count_command);
            $_result = sqlsrv_query($this->_Link,$_count_command);
            $data 	 = sqlsrv_fetch_array($_result,SQLSRV_FETCH_ASSOC);
            return $data[count];
		//return mssql_result($_result,0,0);
	}	
	
	function GetFields()
	{
		$_fields = array();
		$_result = sqlsrv_query($this->_Link,$this->SelectCommand);
		$data = sqlsrv_field_metadata($_result);
		//echo "<pre>";
		//print_r($data);
		foreach($data as $key=>$value) {
			$_field  = array("Name"=>$value['Name'],"Type"=>$value['Type'],"Not_Null"=>0);
			array_push($_fields,$_field);
		}
		return $_fields;
		/*while($_prop = sqlsrv_field_metadata($_result))
		{
			$_field = array("Name"=>$_prop['Name'],"Type"=>$_prop['Type'],"Not_Null"=>0);
			array_push($_fields,$_field);
		}
		return $_fields;*/
	}
	
	function GetData($_start=0,$_count=9999999)
	{
            //Return associate array of data

            $_tpl_select_command =  "SELECT {limit} * FROM ({SelectCommand}) AS _TMP {where} {orderby} {groupby}";

            //Filters
            $_where = "";
            $_filters = $this->Filters;
            for($i=0;$i<sizeof($_filters);$i++)
            {
                $_where.=" and ".$this->GetFilterExpression($_filters[$i]);
            }
            if ($_where!="")
            {
                $_where = "WHERE ".substr($_where,5);
            }
            //Order
            $_orderby = "";
            $_orders = $this->Sorts;
            for($i=0;$i<sizeof($_orders);$i++)
            {
                $_orderby.=", ".$_orders[$i]->Field." ".$_orders[$i]->Order;
            }
            if ($_orderby!="")
            {
                $_orderby = "ORDER BY ".substr($_orderby,2);
            }
            //Group
            $_groupby = "";
            $_groups = $this->Groups;
            for($i=0;$i<sizeof($_groups);$i++)
            {
                $_groupby.=", ".$_groups[$i]->Field;
            }
            if ($_groupby!="")
            {
                $_groupby = "GROUP BY ".substr($_groupby,2);
            }
            //Limit
            $_limit = "TOP ".($_start+$_count); 		

            $_select_command = str_replace("{SelectCommand}",$this->SelectCommand,$_tpl_select_command);
            $_select_command = str_replace("{where}",$_where,$_select_command);
            $_select_command = str_replace("{orderby}",$_orderby,$_select_command);
            $_select_command = str_replace("{groupby}",$_groupby,$_select_command);
            $_select_command = str_replace("{limit}",$_limit,$_select_command);

            //echo $_select_command;
            $_result = sqlsrv_query($this->_Link,$_select_command);
            $_rows = array();
            $_i=0;

            while ($_row = sqlsrv_fetch_array($_result,SQLSRV_FETCH_ASSOC)) 
            {
                if($_i>=$_start) {
                    array_push($_rows,$_row);				
                }
                $_i++;
            }

            return $_rows;
	}
	function GetAggregates($_arr)
	{
		$_tpl_select_command =  "SELECT {text} FROM ({SelectCommand}) AS _TMP {where} {orderby} {groupby}";

		$_text = "";
		$_agg_result = array();
		foreach($_arr as $_aggregate)
		{
			if (strpos("||min|max|first|last|count|sum|avg|","|".strtolower($_aggregate["Aggregate"])."|")>0)
			{
				$_text .=  ", ".$_aggregate["Aggregate"]."(".$_aggregate["DataField"].") as ".$_aggregate["Key"];				
			}
		}
		if ($_text!="")
		{

			$_text = substr($_text,2);
			//Fill command and query
			//Filters
			$_where = "";
			$_filters = $this->Filters;
			for($i=0;$i<sizeof($_filters);$i++)
			{
				$_where.=" and ".$this->GetFilterExpression($_filters[$i]);
			}
			if ($_where!="")
			{
				$_where = "WHERE ".substr($_where,5);
			}
			//Order
			$_orderby = "";
			$_orders = $this->Sorts;
			for($i=0;$i<sizeof($_orders);$i++)
			{
				$_orderby.=", ".$_orders[$i]->Field." ".$_orders[$i]->Order;
			}
			if ($_orderby!="")
			{
				$_orderby = "ORDER BY ".substr($_orderby,2);
			}
			//Group
			$_groupby = "";
			$_groups = $this->Groups;
			for($i=0;$i<sizeof($_groups);$i++)
			{
				$_groupby.=", ".$_groups[$i]->Field;
			}
			if ($_groupby!="")
			{
				$_groupby = "GROUP BY ".substr($_groupby,2);
			}
			
			$_select_command = str_replace("{SelectCommand}",$this->SelectCommand,$_tpl_select_command);
			$_select_command = str_replace("{text}",$_text,$_select_command);
			$_select_command = str_replace("{where}",$_where,$_select_command);
			$_select_command = str_replace("{orderby}",$_orderby,$_select_command);
			$_select_command = str_replace("{groupby}",$_groupby,$_select_command);
			
			$_result = sqlsrv_query($this->_Link,$_select_command);
			$_agg_result = sqlsrv_fetch_array($_result,SQLSRV_FETCH_ASSOC);

		//-----
		}
		return $_agg_result;
	}
	function Insert($_associate_array)
	{
		$_insert_commands = explode(";",$this->InsertCommand);
		foreach($_associate_array as $_key=>$_value)
		{
			for($i=0;$i<sizeof($_insert_commands);$i++)
			{
				$_insert_commands[$i] = str_replace("@".$_key,addslashes($_value),$_insert_commands[$i]);
			}
			
		}
		foreach($_insert_commands as $_insert_command)
		{
			if (sqlsrv_query($this->_Link,$_insert_command)==false)
			{
				return false;
			}
		}
		return true;
	}
	function Update($_associate_array)
	{
		$_update_commands = explode(";",$this->UpdateCommand);		
		foreach($_associate_array as $_key=>$_value)
		{
			for($i=0;$i<sizeof($_update_commands);$i++)
			{
				$_update_commands[$i] = str_replace("@".$_key,addslashes($_value),$_update_commands[$i]);
			}
		}
		//echo sizeof($_update_commands);
		foreach($_update_commands as $_update_command)
		{
			if (sqlsrv_query($this->_Link,$_update_command)==false)
			{
				return false;
			}
		}
		return true;
	}
	function Delete($_associate_array)
	{
		$_delete_commands = explode(";",$this->DeleteCommand);
		
		foreach($_associate_array as $_key=>$_value)
		{
			for($i=0;$i<sizeof($_delete_commands);$i++)
			{
				$_delete_commands[$i] = str_replace("@".$_key,addslashes($_value),$_delete_commands[$i]);
			}
		}
		foreach($_delete_commands as $_delete_command)
		{
			if (sqlsrv_query($this->_Link,$_delete_command)==false)
			{
				return false;
			}
		}
		return true;
	}
}

?>