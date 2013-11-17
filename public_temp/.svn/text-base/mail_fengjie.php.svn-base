<?php
require_once ("Mail.php");

$from = "ifeng <fengjie1314126@126.com>";
$to = "jokerfeng <jokerfeng2010@gmail.com>";
$subject = "Hi!";
$body = "Hi,\n\nHow are you?";

$host = "smtp.126.com";
$username = "fengjie1314126@126.com";
$password = "fjcy@fengjiacun";

$headers = array ('From' => $from, 'To' => $to, 'Subject' => $subject);
$smtp = Mail::factory('smtp',
	array ('host' => $host, 'auth' => true, 'username' => $username, 'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
	echo("<p>" . $mail->getMessage() . "</p>");
} else {
	echo("<p>Message successfully sent!</p>");
}
echo "fengjie";
?>
