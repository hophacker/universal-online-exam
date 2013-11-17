<?php
function _compare($a,$b)
{
	return $a["position"]>$b["position"];
}
class HugeMySQLDataSource extends DataSource
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
		return mysql_error($this->_Link);
	}
	function SetCharSet($_charset)
	{
		mysql_set_charset($_charset,$this->_Link);	
	}	
	function _select_sql_break($_statement)
	{
		$_statement_lowercase = strtolower($_statement);

		$_signs = array(array("key"=>"select","position"=>-1),
						array("key"=>"inner join","position"=>-1),
						array("key"=>"left join","position"=>-1),
						array("key"=>"right join","position"=>-1),
						array("key"=>"full join","position"=>-1),
						array("key"=>"from","position"=>-1),
						array("key"=>"where","position"=>-1),
						array("key"=>"order by","position"=>-1),
						array("key"=>"group by","position"=>-1),
						array("key"=>"limit","position"=>-1)						
		);
		
		for($i=0;$i<count($_signs);$i++)
		{
			$_pos = strpos($_statement_lowercase, $_signs[$i]["key"]);
			$_signs[$i]["position"] = ($_pos===false)?-1:$_pos;	
		}
		
		
		$_target = array("select"=>"","from"=>"","inner join"=>"","left join"=>"","right join"=>"","full join"=>"","where"=>"","order by"=>"","group by"=>"");


		usort($_signs, "_compare");	
		for($i=0;$i<count($_signs);$i++)
		{
			if($_signs[$i]["position"]>-1)
			{
				if($i<count($_signs)-1)
				{
					$_target[$_signs[$i]["key"]] = substr($_statement, $_signs[$i]["position"],$_signs[$i+1]["position"] - $_signs[$i]["position"]);						
				}
				else
				{
					$_target[$_signs[$i]["key"]] = substr($_statement, $_signs[$i]["position"],strlen($_statement) - $_signs[$i]["position"]);					
				}
			}
		}
		
		return $_target;
	}
	
	function Count()
	{
		
		$_command_parts = $this->_select_sql_break($this->SelectCommand);
		
		
		
		$_command_parts["select"] = "SELECT COUNT(*)";
		
		$_where = "";
		$_filters = $this->Filters;
		for($i=0;$i<sizeof($_filters);$i++)
		{
			$_where.=" and ".$this->GetFilterExpression($_filters[$i]);
		}
		if ($_where!="")
		{
			if($_command_parts["where"]=="")
			{
				$_command_parts["where"] = "WHERE ".substr($_where,5);				
			}
			else
			{
				$_command_parts["where"].=$_where;
			}
		}
		
		$_count_command = join(" ",$_command_parts);

		$_result = mysql_query($_count_command,$this->_Link);
		return mysql_result($_result,0,0);
	}	
	
	function GetFields()
	{
		$_fields = array();
		$_result = mysql_query($this->SelectCommand,$this->_Link);
		while($_prop = mysql_fetch_field($_result))
		{
			$_field = array("Name"=>$_prop->name,"Type"=>$_prop->type,"Not_Null"=>$_prop->not_null);
			array_push($_fields,$_field);
		}
		return $_fields;
	}
	
	function GetData($_start=0,$_count=9999999)
	{
		//Return associate array of data
		$_command_parts = $this->_select_sql_break($this->SelectCommand);
		
		//Filters
		$_where = "";
		$_filters = $this->Filters;
		for($i=0;$i<sizeof($_filters);$i++)
		{
			$_where.=" and ".$this->GetFilterExpression($_filters[$i]);
		}
		if ($_where!="")
		{
			if($_command_parts["where"]=="")
			{
				$_command_parts["where"] = "WHERE ".substr($_where,5);				
			}
			else
			{
				$_command_parts["where"].=$_where;
			}
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
			if($_command_parts["order by"]=="")
			{
				$_command_parts["order by"] = "ORDER BY ".substr($_orderby,2);			
			}
			else
			{
				$_command_parts["order by"].=$_orderby;
			}		
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
		if ($_groupby!="")
		{
			if($_command_parts["groupby"]=="")
			{
				$_command_parts["groupby"] = "GROUP BY ".substr($_groupby,2);			
			}
			else
			{
				$_command_parts["groupby"].=$_groupby;
			}		
		}			
		//Limit
		$_limit = "LIMIT ".$_start." , ".$_count; 		

		$_command_parts["limit"] = $_limit;

		
		$_select_command = join(" ",$_command_parts);
		
		//echo $_select_command;
		$_result = mysql_query($_select_command,$this->_Link);
		$_rows = array();
		
		while ($_row = mysql_fetch_assoc($_result)) 
		{
			array_push($_rows,$_row);
		}

		return $_rows;
	}
	function GetAggregates($_arr) //Only with MYSQLDataSource
	{
		//$_tpl_select_command =  "SELECT {text} FROM ({SelectCommand}) AS _TMP {where} {orderby} {groupby}";
		$_command_parts = $this->_select_sql_break($this->SelectCommand);


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
			
			$_command_parts["select"]="select ".$_text;
			
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
				if($_command_parts["where"]=="")
				{
					$_command_parts["where"] = "WHERE ".substr($_where,5);				
				}
				else
				{
					$_command_parts["where"].=$_where;
				}
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
				if($_command_parts["order by"]=="")
				{
					$_command_parts["order by"] = "ORDER BY ".substr($_orderby,2);			
				}
				else
				{
					$_command_parts["order by"].=$_orderby;
				}		
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
				if($_command_parts["groupby"]=="")
				{
					$_command_parts["groupby"] = "GROUP BY ".substr($_groupby,2);			
				}
				else
				{
					$_command_parts["groupby"].=$_groupby;
				}		
			}				
			
			
			$_select_command = join(" ",$_command_parts);
			
			//echo $_select_command;
			$_result = mysql_query($_select_command,$this->_Link);
			$_agg_result = mysql_fetch_assoc($_result);

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
			if (mysql_query($_insert_command,$this->_Link)==false)
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
			if (mysql_query($_update_command,$this->_Link)==false)
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
			if (mysql_query($_delete_command,$this->_Link)==false)
			{
				return false;
			}
		}
		return true;
	}
}
?>
