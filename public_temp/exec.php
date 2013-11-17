<?php
exec(escapeshellcmd("df"), $output, $return);
    echo ($return);
echo "<pre>";
foreach ($output as $line){
	echo "$line <br/>";
}
echo "</pre>";
?>
