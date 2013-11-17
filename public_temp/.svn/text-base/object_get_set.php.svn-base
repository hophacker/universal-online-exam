<?php

error_reporting(E_ALL ^ E_DEPRECATED);
ini_set('error_reporting', '1');
class staff {
	private $name, $salary;
	function __construct($__name, $__salary){
		$this->name = $__name;
		$this->salary = $__salary;
	}
	function __set($varName, $varValue){
		$this->$varName = $varValue;
	}
}

	function __get($varName){
		echo "I'm outputing VarName<br/>";
		return $this->$varName;
    return $this->$varName;
	}
}
class manager extends staff{
	private static $number = 0;
	function __construct($__name, $__salary){
		parent::__construct($__name, $__salary);
		self::$number++;
		//self::number++;
		echo "I'm No.".self::$number." manager, I'm really really cool'<br/>'";
	}
	function __destruct(){
		echo "My manager career is over!<br/>";
	}
}
$emp = new manager("fengjie", 12);
$emp->name = "fengjie";
echo $emp->name."<br/>";
echo $emp->salary."<br/>";
$emp = new manager("chenling", 12);
print_r(get_declared_classes());
a = new Hypnotic_Cat;



?>
