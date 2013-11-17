<?php
/*
 * PostgreSLDataSource class of KoolGrid
 */
class PostgreSLDataSource extends DataSource
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
		return pg_last_error($this->_Link);
	}
	function SetCharSet($_charset)
	{
		pg_set_client_encoding($this->_Link,$_charset);	
	}		
	function Count()
	{
		$_count_command = "SELECT COUNT(*) FROM (".$this->SelectCommand.") AS _TMP {where}";
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
		$_result = pg_query($this->_Link, $_count_command);
		return pg_result($_result,0,0);
	}	
	
	function GetFields()
	{
		$_fields = array();
		$_result = pg_query($this->_Link,$this->SelectCommand);
		$_num_fields = pg_num_fields($_result);
		for($i=0;$i<$_num_fields;$i++)
		{
			$_field = array("Name"=>pg_field_name($_result,$i),"Type"=>pg_field_type($_result,$i),"Not_Null"=>0);
			array_push($_fields,$_field);
		}
		return $_fields;
	}
	
	function GetData($_start=0,$_count=9999999)
	{
		//Return associate array of data
		$_tpl_select_command =  "SELECT * FROM ({SelectCommand}) AS _TMP {where} {orderby} {groupby} {limit}";
		
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
		$_limit = "LIMIT ".$_count." OFFSET ".$_start;		
		
		$_select_command = str_replace("{SelectCommand}",$this->SelectCommand,$_tpl_select_command);
		$_select_command = str_replace("{where}",$_where,$_select_command);
		$_select_command = str_replace("{orderby}",$_orderby,$_select_command);
		$_select_command = str_replace("{groupby}",$_groupby,$_select_command);
		$_select_command = str_replace("{limit}",$_limit,$_select_command);
		
		//echo $_select_command;
		$_result = pg_query($this->_Link,$_select_command);
		$_rows = array();
		
		while ($_row = pg_fetch_assoc($_result)) 
		{
			array_push($_rows,$_row);
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
			
			//echo $_select_command;
			$_result = pg_query($this->_Link,$_select_command);
			$_agg_result = pg_fetch_assoc($_result);

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
			if (pg_query($this->_Link,$_insert_command)==false)
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
			if (pg_query($this->_Link,$_update_command)==false)
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
			if (pg_query($this->_Link,$_delete_command)==false)
			{
				return false;
			}
		}
		return true;
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
					return "lower(".$_filter->Field.") ".$_expression." lower('".$_value."')";
					break;
				case "Not_Contain":
					$_expression = "NOT LIKE";
					$_value = "%".$_value."%";
					return "lower(".$_filter->Field.") ".$_expression." lower('".$_value."')";		
					break;
				case "Start_With":
					$_expression = "LIKE";
					$_value = $_value."%";
					return "lower(".$_filter->Field.") ".$_expression." lower('".$_value."')";		
					break;
				case "End_With":
					$_expression = "LIKE";
					$_value = "%".$_value;
					return "lower(".$_filter->Field.") ".$_expression." lower('".$_value."')";		
					break;
			}
			return $_filter->Field." ".$_expression." '".$_value."'";		
	}

}

?>