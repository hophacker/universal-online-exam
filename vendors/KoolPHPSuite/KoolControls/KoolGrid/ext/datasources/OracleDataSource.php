<?php
/*
 * OracleDataSource class of KoolGrid
 * Written by Jayme Jeffman Filho
 * Updated by KoolPHP.inc
 */
class OracleDataSource extends DataSource
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


	function Count()
	{
		$_count_command = "SELECT COUNT(*) FROM (".$this->SelectCommand.") {where}";
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

		$_st_id = oci_parse ( $this->_Link , $_count_command );
		oci_execute($_st_id);
		$row = oci_fetch_array( $_st_id, OCI_NUM+OCI_RETURN_NULLS );

		return $row[0];
		
	}	
	
	function GetFields()
	{
		$_fields = array();
		$_st_id = oci_parse ( $this->_Link , $this->SelectCommand );
    	if($_st_id)
		{
	  		oci_execute($_st_id);
	  		//$_result = pg_query($this->_Link,$this->SelectCommand);
	  		$_num_fields = oci_num_fields ($_st_id);
	  		for($i=1;$i<=$_num_fields;$i++)
	  		{
	  			$_field = array( "Name"=>oci_field_name($_st_id,$i), "Type"=>oci_field_type($_st_id,$i), "Not_Null"=>0 );
	  			array_push($_fields,$_field);
	  		}
    	}
		return $_fields;
	}
	
	function GetData($_start,$_count=999999)
	{
		$_tpl_select_command =  "SELECT {fields} FROM ( SELECT a.*, rownum rnum FROM ({SelectCommand}) a WHERE rownum <= ".($_start+$_count)." ) WHERE rnum >= ".$_start. " {where} {orderby} {groupby}";

		//Fields
		$_fields = "";
		$_fld_array = array();
		$_st_id = oci_parse ( $this->_Link , $this->SelectCommand );
    	if($_st_id)
		{
  			oci_execute($_st_id);
  			$_num_fields = oci_num_fields ($_st_id);
	  		for($i=1;$i<=$_num_fields;$i++)
	  		{
	  			array_push($_fld_array,'"'.oci_field_name($_st_id,$i).'"');
	  		}
		}
		for($i=0;$i<sizeof($_fld_array);$i++)
		{
			$_fields .= ", ".$_fld_array[$i] ;
		}
		if ($_fields!="")
		{
			$_fields = substr($_fields,2);
		}

		//Filters
		$_where = "";
		$_filters = $this->Filters;
		for($i=0;$i<sizeof($_filters);$i++)
		{
			$_where.=" and ".$this->GetFilterExpression($_filters[$i]);
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
		
		$_select_command = str_replace("{fields}",$_fields,$_tpl_select_command);
		$_select_command = str_replace("{SelectCommand}",$this->SelectCommand,$_select_command);
		$_select_command = str_replace("{where}",$_where,$_select_command);
		$_select_command = str_replace("{orderby}",$_orderby,$_select_command);
		$_select_command = str_replace("{groupby}",$_groupby,$_select_command);
		
    	$_rows = array();
		$_st_id = oci_parse($this->_Link, $_select_command );
    	if( $_st_id )
		{
      		oci_execute($_st_id);
  			while ( $_row = oci_fetch_array( $_st_id, OCI_ASSOC+OCI_RETURN_NULLS ) )
  			{
  				array_push($_rows,$_row);
  			}
    	}		
		return $_rows;
	}


	function GetAggregates($_arr)
	{
		$_tpl_select_command =  "SELECT {text} FROM ({SelectCommand}) {where} {orderby} {groupby}";

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
			
			//echo $_select_command; // This is a valid Oracle select command !
			$_agg_result = array();
			$_st_id = oci_parse($this->_Link, $_select_command );
			if( $_st_id )
			{
				oci_execute($_st_id);
				$_agg_result = oci_fetch_array( $_st_id, OCI_BOTH+OCI_RETURN_NULLS );
			}
		}
		return $_agg_result; // It might not be the appropriate return. It is not being shown on the grid
	}

	function GetFilterExpression($_filter)
	{
			$_expression = "";
			$_value = $_filter->Value;
			switch($_filter->Expression)
			{
				case "Equal":
					$_expression = "=";
					break;
				case "Not_Equal":
					$_expression = "<>";
					break;
				case "Greater_Than":
					$_expression = ">";
					break;			
				case "Less_Than":
					$_expression = "<";
					break;										
				case "Greater_Than_Or_Equal":
					$_expression = ">=";
					break;			
				case "Less_Than_Or_Equal":
					$_expression = "<=";
					break;										
				case "Contain":
					$_expression = "LIKE";
					$_value = "%".$_value."%";
					break;
				case "Not_Contain":
					$_expression = "NOT LIKE";
					$_value = "%".$_value."%";
					break;
				case "Start_With":
					$_expression = "LIKE";
					$_value = $_value."%";
					break;
				case "End_With":
					$_expression = "LIKE";
					$_value = "%".$_value;
					break;
			}
			return "\"".$_filter->Field."\" ".$_expression." '".$_value."'";		
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
			$_st_id = oci_parse($this->_Link, $_insert_command );
			if (oci_execute($_st_id)==false)
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
			$_st_id = oci_parse($this->_Link, $_update_command );
			if (oci_execute($_st_id)==false)
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
			 $_st_id = oci_parse($this->_Link, $_delete_command );
			if ( oci_execute($_st_id)==false)
			{
				return false;
			}
		}
		return true;
	}



}
?>