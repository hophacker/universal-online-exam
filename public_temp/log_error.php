<?php
echo "logging";
//0	message is sent to PHP's system logger, using the Operating System's system logging mechanism or a file, depending on what the error_log configuration directive is set to. This is the default option.
//1	message is sent by email to the address in the destination parameter. This is the only message type where the fourth parameter, extra_headers is used.
//2	 No longer an option.
//3	message is appended to the file destination. A newline is not automatically added to the end of the message string.
//4	message is sent directly to the SAPI logging handler.
//ini_set('error_log’, ‘script_errors.log’)
//ini_set('log_errors’, ‘On’)
//ini_set('display_errors’, �
error_log("Big trouble", 0);
error_log("Big trouble", 1, "yzudxks@126.com");
mail("fengjie1314126@126.com", "subject", "message");
mail("yzudxks@126.com", "subject", "message");
mail("jokerfeng2010@gmail.com", "subject", "message");
$ADMIN_MAIL = "yzudxks@126.com";
$MAIL_ERR_FROM =  "fengjie";
$ADMIN_MAIL = "fengjie1314126@126.com";

$email = " 
	<p>An error 1 occurred on line 
	<strong>haha</strong> and in the <strong>file: yes.</strong> 
	<p> yes </p>";  
$email .= "<pre>fengjie is here</pre>";  
$headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";  
// Email the error to someone...  
error_log($email, 1, 'jokerfeng2010@gmail.com', $headers);  
error_log("Big trouble", 1, $ADMIN_MAIL, 
	"Content-Type: text/html; charset=utf8\r\nFrom: ".$MAIL_ERR_FROM."\r\nTo: ".$ADMIN_MAIL);

#error_log("Big trouble", 3, "/var/tmp/PHPApache2-errors");
syslog(LOG_WARNING ,"jjkkkj");
?>
