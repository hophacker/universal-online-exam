<?php
switch (@$_GET['do'])
 {

 case "send":

      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $femail = $_POST['femail'];
      $f2email = $_POST['f2email'];
      $saddy = $_POST['saddy'];
      $scity = $_POST['scity'];
      $szip = $_POST['szip'];
      $fphone1 = $_POST['fphone1'];

      $mname = $_POST['mname'];
      $sapt = $_POST['sapt'];
      $sstate = $_POST['sstate'];
      $scountry = $_POST['scountry'];
      $fphone2 = $_POST['fphone2'];
      $fphone3 = $_POST['fphone3'];
      $fsendmail = $_POST['fsendmail'];
      $secretinfo = $_POST['info'];

    if (!preg_match("/\S+/",$fname))
    {
      unset($_GET['do']);
      $message = "First Name required. Please try again.";
      break;
    }
    if (!preg_match("/\S+/",$lname))
    {
      unset($_GET['do']);
      $message = "Last Name required. Please try again.";
      break;
    }
    if (!preg_match("/^\S+@[A-Za-z0-9_.-]+\.[A-Za-z]{2,6}$/",$femail))
    {
      unset($_GET['do']);
      $message = "Primary Email Address is incorrect. Please try again.";
      break;
    }
    if ($f2email){
      if (!preg_match("/^\S+@[A-Za-z0-9_.-]+\.[A-Za-z]{2,6}$/",$f2email))
      {
        unset($_GET['do']);
        $message = "Secondary Email Address is incorrect. Please try again.";
        break;
      }
    }
    if (!preg_match("/\S+/",$saddy))
    {
      unset($_GET['do']);
      $message = "Street Address required. Please try again.";
      break;
    }
    if (!preg_match("/\S+/",$scity))
    {
      unset($_GET['do']);
      $message = "City required. Please try again.";
      break;
    }
    if (!preg_match("/^[0-9A-Za-z -]+$/",$szip))
    {
      unset($_GET['do']);
      $message = "Zip/Post Code required. Please try again.";
      break;
    }
    if (!preg_match("/^[0-9 #\-\*\.\(\)]+$/",$fphone1))
    {
      unset($_GET['do']);
      $message = "Phone Number 1 required. No letters, please.";
      break;
    }
 
    if ($secretinfo == "")
    {
       $myemail = "postmaster@example.com";
       $emess = "First Name: ".$fname."\n";
       $emess.= "Middle Name: ".$mname."\n";
       $emess.= "Last Name: ".$lname."\n";
       $emess.= "Email 1: ".$femail."\n";
       $emess.= "Email 2: ".$f2email."\n";
       $emess.= "Street Address: ".$saddy."\nApt/Ste: ".$sapt."\n";
       $emess.= "City: ".$scity."\nState: ".$sstate."\nZip/Post Code:".$szip."\n";
       $emess.= "Country: ".$scountry."\n";
       $emess.= "Phone number 1: ".$fphone1."\n";
       $emess.= "Phone number 2: ".$fphone2."\n";
       $emess.= "Phone number 3: ".$fphone3."\n";
       $emess.= "Comments: ".$fsendmail;
       $ehead = "From: ".$femail."\r\n";
       $subj = "An Email from ".$fname." ".$mname." ".$lname."!";
       $mailsend=mail("$myemail","$subj","$emess","$ehead");
       $message = "Email was sent.";
    }
 
       unset($_GET['do']);
       header("Location: thank_you.html");
     break;
 
 default: break;
 }
?>


<html>
<body>
<form action="email_form.php?do=send" method="POST">
<p>* Required fields</p>
<?php
   if ($message) echo '<p style="color:red;">'.$message.'</p>';
?>
   <table border="0" width="500">
     <tr><td align="right">* First Name: </td>
         <td><input type="text" name="fname" size="30" value="<?php echo @$fname ?>"></td></tr>
     <tr><td align="right">Middle Name: </td>
         <td><input type="text" name="mname" size="30" value="<?php echo @$mname ?>"></td></tr>
     <tr><td align="right">* Last Name: </td>
         <td><input type="text" name="lname" size="30" value="<?php echo @$lname ?>"></td></tr>
   </table>
<p>
   <table border="0" width="500">
     <tr><td align="right">* Primary Email: </td>
         <td><input type="text" name="femail" size="30" value="<?php echo @$femail ?>"></td></tr>
     <tr><td align="right">Secondary Email: </td>
         <td><input type="text" name="f2email" size="30" value="<?php echo @$f2email ?>"></td></tr>
   </table>
<p>
   <table border="0" width="600">
     <tr><td align="right">* Street Address: </td>
         <td><input type="text" name="saddy" size="40" value="<?php echo @$saddy ?>"></td></tr>
     <tr><td align="right">Apartment/Suite Number: </td>
         <td><input type="text" name="sapt" size="10" value="<?php echo @$sapt ?>"></td></tr>
     <tr><td align="right">* City: </td>
         <td><input type="text" name="scity" size="30" value="<?php echo @$scity ?>"></td></tr>
         <td align="right">State: </td>
         <td><input type="text" name="sstate" size="10" value="<?php echo @$sstate ?>"></td></tr>
     <tr><td align="right">* Zip/Post Code: </td>
         <td><input type="text" name="szip" size="10" value="<?php echo @$szip ?>"></td></tr>
     <tr><td align="right">Country: </td>
         <td><input type="text" name="scountry" size="30" value="<?php echo @$scountry ?>"></td></tr>
   </table>
<p>
   <table border="0" width="500">
     <tr><td align="right">* Phone Number 1: </td>
         <td><input type="text" name="fphone1" size="20" value="<?php echo @$fphone1 ?>"></td></tr>
     <tr><td align="right">Phone Number 2: </td>
         <td><input type="text" name="fphone2" size="20" value="<?php echo @$fphone2 ?>"></td></tr>
     <tr><td align="right">Phone Number 3: </td>
         <td><input type="text" name="fphone3" size="20" value="<?php echo @$fphone3 ?>"> <input style="display:none;" name="info" type="text" value=""> </td></tr>
   </table>
<p>
   <table border="0" width="500"><tr><td>
     Comments:<br />
     <TEXTAREA name="fsendmail" ROWS="6" COLS="60"><?php if($fsendmail) echo $fsendmail; ?></TEXTAREA>
     </td></tr>
     <tr><td align="right"><input type="submit" value="Send Now">
     </td></tr>
   </table>
   </form>
</body>
</html>
