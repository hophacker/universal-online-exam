<?php
/*
 * Written by KoolPHP .Inc
 * To use the AdvancedArrayDataSource
 * $_myarray = array(
 * 						array("ID"=>1,"Name"=>"John"),
 * 						array("ID"=>2,"Name"=>"Marry")
 * );
 * $ds = new AdvancedDataSource($_myarray);
 * ...
 * $grid->MasterTable->DataSource = $ds;
 */

$_sort_keys = array();
function _array_isort($a,$b) {
    global $_sort_keys;
	for($i=0;$i<count($_sort_keys);$i++)
	{

		if($a[$_sort_keys[$i]->Field]>$b[$_sort_keys[$i]->Field])
		{
			
			return ($_sort_keys[$i]->Order=="ASC")?1:-1;
		}
		else
		{
			return ($_sort_keys[$i]->Order=="ASC")?-1:1;
		}
	}
}
function _check_filter($_value,$_filter)
{
			switch($_filter->Expression)
			{
				case "Equal":
					return ($_value == $_filter->Value);
					break;
				case "Not_Equal":
					return ($_value != $_filter->Value);
					break;
				case "Greater_Than":
					return ($_value > $_filter->Value);
					break;			
				case "Less_Than":
					return ($_value < $_filter->Value);
					break;										
				case "Greater_Than_Or_Equal":
					return ($_value >= $_filter->Value);
					break;			
				case "Less_Than_Or_Equal":
					return ($_value <= $_filter->Value);
					break;										
				case "Contain":
					$_expression = "LIKE";
					return (strpos($_value, $_filter->Value)!==false);
					break;
				case "Not_Contain":
					return (strpos($_value, $_filter->Value)===false);
					break;
				case "Start_With":
					return (strpos($_value, $_filter->Value)===0);
					break;
				case "End_With":
					return (strpos($_value, $_filter->Value)==strlen($_value)-strlen($_filter->Value));
					break;
			}
	return true;
}

class AdvancedArrayDataSource extends ArrayDataSource
{
	var $_Data;
	function __construct($_array_data)
	{
		$this->_Data = $_array_data;
	}	
	function Count()
	{
		$_filters = $this->Filters;
		if(count($_filters)>0)
		{
			$_count = 0;
			for($i=0;$i<count($this->_Data);$i++)
			{
				$_valid = true;
				for($j=0;$j<count($_filters);$j++)
				{
					if($_valid)
					{
						$_valid&=_check_filter($this->_Data[$i][$_filters[$j]->Field],$_filters[$j]);
					}
				}
				if($_valid)
				{
					$_count++;
				}
			}
			return $_count;
		}
		else
		{
			return count($this->_Data);
		}		
	}
	function GetFields()
	{
		$_fields = array();
		foreach($this->_Data[0] as $_key=>$_value)
		{
			$_field = array("Name"=>$_key,"Type"=>gettype($_value),"Not_Null"=>false);
			array_push($_fields,$_field);
		}
		return $_fields;
	}
	
	
	
	function GetData($start=0,$count=9999999)
	{
		//Return associate array of data
		$arr = array();
		$_processed_array = array();
		//Filtering
		$_filters = $this->Filters;
		
		if(count($_filters)>0)
		{
			for($i=0;$i<count($this->_Data);$i++)
			{
				$_valid = true;
				for($j=0;$j<count($_filters);$j++)
				{
					if($_valid)
					{
						$_valid&=_check_filter($this->_Data[$i][$_filters[$j]->Field],$_filters[$j]);
					}
				}
				if($_valid)
				{
					array_push($_processed_array,$this->_Data[$i]);
				}
			}
		}
		else
		{
			$_processed_array = $this->_Data;
		}

		//Sorting the array of array
		global $_sort_keys;
		$_sort_keys = $this->Sorts;		
		if(count($_sort_keys)>0)
		{
			usort($_processed_array, "_array_isort");			
		}

		
		if ($start>count($_processed_array)) return $arr;
		
		if($start+$count>count($_processed_array))
		{
			$count = count($_processed_array) - $start;
		}
		
		for($i=0;$i<$count;$i++)
		{
			array_push($arr,$_processed_array[$start+$i]);
		}
		return $arr;
	}
	function GetAggregates($_arr) //Only with MYSQLDataSource
	{
		
		$_processed_array = array();
		//Filtering
		$_filters = $this->Filters;
		
		if(count($_filters)>0)
		{
			for($i=0;$i<count($this->_Data);$i++)
			{
				$_valid = true;
				for($j=0;$j<count($_filters);$j++)
				{
					if($_valid)
					{
						$_valid&=_check_filter($this->_Data[$i][$_filters[$j]->Field],$_filters[$j]);
					}
				}
				if($_valid)
				{
					array_push($_processed_array,$this->_Data[$i]);
				}
			}
		}
		else
		{
			$_processed_array = $this->_Data;
		}
		
		
		$_agg_result = array();
		
		$_array = array("min"=>array(),
						"max"=>array(),
						"first"=>array(),
						"last"=>array(),
						"count"=>array(),
						"sum"=>array(),
						"avg"=>array());


		foreach($_arr as $_aggregate)
		{
			for($i=0;$i<count($_processed_array);$i++)
			{
				switch(strtolower($_aggregate["Aggregate"]))					
				{
					case "min":
						if(!isset($_array["min"][$_aggregate["Key"]]))
						{
							$_array["min"][$_aggregate["Key"]]=0;
						}
						if($_array["min"][$_aggregate["Key"]]>$_processed_array[$i][$_aggregate["DataField"]])
						{
							$_array["min"][$_aggregate["Key"]] = $_processed_array[$i][$_aggregate["DataField"]];
						}						
						break;
					case "max":
						if(!isset($_array["max"][$_aggregate["Key"]]))
						{
							$_array["max"][$_aggregate["Key"]]=0;
						}
						if($_array["max"][$_aggregate["Key"]]<$_processed_array[$i][$_aggregate["DataField"]])
						{
							$_array["max"][$_aggregate["Key"]] = $_processed_array[$i][$_aggregate["DataField"]];
						}						
						break;
					case "first":
						if(!isset($_array["first"][$_aggregate["Key"]]))
						{
							$_array["first"][$_aggregate["Key"]]="";
						}
						$_array["first"][$_aggregate["Key"]] = $_processed_array[0][$_aggregate["DataField"]]; 
						
						break 2;
					case "last":
						if(!isset($_array["last"][$_aggregate["Key"]]))
						{
							$_array["last"][$_aggregate["Key"]]="";
						}
						$_array["last"][$_aggregate["Key"]] = $_processed_array[count($_processed_array)-1][$_aggregate["DataField"]]; 
						break 2;
					case "count":
						$_array["count"][$_aggregate["Key"]] = ($_array["count"][$_aggregate["Key"]]===null)?0:$_array["count"][$_aggregate["Key"]]+1;						
						break;
					case "sum":
						if(!isset($_array["sum"][$_aggregate["Key"]]))
						{
							$_array["sum"][$_aggregate["Key"]]=0;
						}
						$_array["sum"][$_aggregate["Key"]] = $_array["sum"][$_aggregate["Key"]]+$_processed_array[$i][$_aggregate["DataField"]];						
						break;
					case "avg":
						if(!isset($_array["avg"][$_aggregate["Key"]]))
						{
							$_array["avg"][$_aggregate["Key"]]=0;
						}

						$_array["avg"][$_aggregate["Key"]] = $_array["avg"][$_aggregate["Key"]]+$_processed_array[$i][$_aggregate["DataField"]];						
						break;						
				}
			}
			if(strtolower($_aggregate["Aggregate"])=="avg")
			{
				$_array["avg"][$_aggregate["Key"]] = $_array["avg"][$_aggregate["Key"]]/count($_processed_array);
			}

			$_agg_result[$_aggregate["Key"]]=$_array[strtolower($_aggregate["Aggregate"])][$_aggregate["Key"]];
		}
		return $_agg_result;
	}
}
?>
