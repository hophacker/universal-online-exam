<?php
	function capitalize(&$str){
		$str = strtolower($str);
		$str{0} = strtoupper($str{0});
		echo $str;
	}
	$str="fengjie";
	capitalize($str);
	echo $str;
?>
