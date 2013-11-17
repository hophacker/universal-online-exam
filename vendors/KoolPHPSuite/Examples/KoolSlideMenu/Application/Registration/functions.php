<?php
	
function echoStep1(){		
		 $return = '
<div class="my-bg padd-top frm-height"  >	
	<div>
	<ul class="formList" id="accountInfo">
		<li class="li1" >
			<label for="txtName" id="">Account Name:</label>
			<input name="txtName" type="text" id="txtName" class="textInput" style="width:100px;" onchange="checkAccName();" />
			<span id="accNoteWord" class="" style="color:brown;"></span>
		</li>
		<li class="li2">
			<label for="txtPass" id="">Password:</label>
			<input name="txtPass" type="password" id="txtPass"  class="textInput" style="width:110px;" onchange="checkAccPass();" />
			<span id="passNoteWord" style="color:brown;"></span>
		</li>
		<li class="li3">
			<label for="txtRepass" id="">Confirm Password:</label>
			<input name="txtRepass" type="password" id="txtRepass" class="textInput" style="width:110px;" onchange="checkAccCfmPass();"  />
			<span id="repassNoteWord" style="color:brown;"></span>

		</li>
		<li class="li4">
			<label for="txtMail" id="">Email:</label>
			<input name="txtMail" type="text" id="txtMail" class="textInput" style="width:115px;" onchange="checkEmail();" />
			<span id="mailNoteWord" style="color:brown;"></span>
		</li>

	</ul>
	</div>
	<br />	
	<input type="button" name="btnStep1" value="Next" onclick="dostep1();" id="" class="nextButton" />	
</div>		';			
		
	return $return ;
}
	
function echoStep2()	{
		
		 $return = '
<div class="my-bg">
	<ul class="formList" id="news">
		<li>Receive email notification for:</li>
		<li>
			<input id="" name="list" value="1" type="checkbox">&nbsp;<label for="" id="" class="checkboxLabel">Product Updates</label>
		</li>
		<li>
			<input id="" name="list" value="2" type="checkbox">&nbsp;<label for="" id="" class="checkboxLabel">Promotions</label>
		</li>
		<li class="">
			<input id="" name="list" value="3" type="checkbox">&nbsp;<label for="" id="" class="checkboxLabel">Corporate News</label>
		</li>
	</ul>
	<br>
	<input name="" value="Next" onclick="dostep2()" id="" class="nextButton" type="button"><br><br>
</div>	';						
		
	return $return ;
}
	
function echoStep3()	{
		
		 $return = '
<div class="my-bg" >
	<img src="terms.gif" alt="sample terms" width="480" height="200">
	<br><br>
	<input id="" name="agree" type="checkbox">&nbsp;<label for="" id="" class="checkboxLabel">I agree to the Terms &amp; Conditions</label>
	<span id="" style="color: Red; visibility: hidden;">*</span>
	<br>
	<input name="" value="Register" onclick="dostep3()" id="" class="nextButton" type="button">
	<br><br>
</div>' ;						
		
	return $return ;
}

function echoResult( $result ) {
		$str = split( ".::." ,$result);
		$return = '
<div  id="my-sucess">
	<div class="my-padd-suc my-dimension ">
		<b class="sucess">Registration sucessful !</b>
		<br />
		<br />
		<div style="float: left; width: 230px; padding-top: 20px;">
			<b>You account details : </b> <br/><br/>
			<ul style="list-style-type: none; list-style-image: none; list-style-position: outside;">
				<li style="text-align: left;">
					Account Name: <span id="previewControl_accountName">'.$str[0].'</span>
					<br>
					Email Address: <span id="previewControl_email">'.$str[1].'</span>
				</li>
			</ul>
		</div>
		<div style="float: left; width: 230px; padding-top: 20px;">
			<b>Your options details :</b><br/><br/>
			<ul style="list-style-type: none; list-style-image: none; list-style-position: outside;">
				<li>
					<input id="" name="FinalList" '.$str[2].' type="checkbox">&nbsp;Product Updates
					<br>
					<input id="" name="FinalList" '.$str[3].' type="checkbox">&nbsp;Promotions
					<br>
					<input id="" name="FinalList" '.$str[4].' type="checkbox">&nbsp;Corporate News
					<br>
				</li>
			</ul>
		</div><br style="clear:both;"/><br/><br/>
		<i>You will received mail to active account on your box, please check carefully in your bulk if you dont find the mail on inbox.</i>
		<input name="backButton" value="Done" onclick="Back();" id="backButton" class="nextButton" style="margin: 10px 0pt 30px 25px;" type="button">
	</div>	
</div>' ;						
		
	return $return ;
}


?>						