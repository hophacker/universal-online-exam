function OnBeforeExpand_handle(sender,arg)
{
	if ( arg.ItemId == 'step2' ){
		if( step1ok.indexOf( "0" ) > -1 ){
			alert( "You must finish step 1 before continuousing with step 2" );
			return false;				
		}else{
			document.getElementById( "wstep2" ).className = "showw" ;
			return true;			
		}		
	}else if ( arg.ItemId == 'step3' ){
		if( !step2ok ){
			alert( "You must finish step 2 before continuousing with step 3" );
			return false;				
		}else{
			document.getElementById( "wstep3" ).className = "showw" ;
			return true;			
		}					
	}else if ( arg.ItemId == 'step1' ){		
		return true;
	}	
}
function checkAccName()
{
	txtname = document.getElementById( "txtName" ).value ;
	checkArr = step1ok.split( "" );	
	if ( txtname.length > 4 ){
		document.getElementById( "accNoteWord" ).innerHTML = "" ;
		checkArr[0] = "1" ;
	}else{ 		
		document.getElementById( "accNoteWord" ).innerHTML = "Account Name must more than 4 characters." ;
		checkArr[0] = "0" ;		
	}
	step1ok =  checkArr[0] +  checkArr[1] +  checkArr[2] + checkArr[3] ;
}

function checkAccPass()
{
	txtpass = document.getElementById( "txtPass" ).value ;
	checkArr = step1ok.split( "" );	
	if ( txtpass.length > 4 ){
		document.getElementById( "passNoteWord" ).innerHTML = "" ;
		checkArr[1] = "1" ;
	}else{ 		
		document.getElementById( "passNoteWord" ).innerHTML = "Password must more than 4 characters." ;
		checkArr[1] = "0" ;
	}
	step1ok =  checkArr[0] +  checkArr[1] +  checkArr[2] + checkArr[3] ;
}
function checkAccCfmPass()
{
	txtcfmpass = document.getElementById( "txtRepass" ).value ;
	txtpass = document.getElementById( "txtPass" ).value ;
	checkArr = step1ok.split( "" );	
	if ( txtcfmpass ==  txtpass ){
		document.getElementById( "repassNoteWord" ).innerHTML = "" ;	
		checkArr[2] = "1" ;
	}else{ 
		document.getElementById( "repassNoteWord" ).innerHTML = "Password and confirm pass does not match." ;
		checkArr[2] = "0" ;
	}
	step1ok =  checkArr[0] +  checkArr[1] +  checkArr[2] + checkArr[3] ;
}
function checkEmail()
{
	txtmail = document.getElementById( "txtMail" ).value ;
	checkArr = step1ok.split( "" );	
	checkMail = false ;
	var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
	if (  txtmail.search(emailRegEx) == -1 ){		
	}else{
		checkMail = true ;
	}
	document.getElementById( "mailNoteWord" ).innerHTML = ( checkMail )  ? "" : "Email is not valid." ;
	checkArr[3] = ( checkMail ) ? "1" : "0" ;
	step1ok =  checkArr[0] +  checkArr[1] +  checkArr[2] + checkArr[3] ;	
}

