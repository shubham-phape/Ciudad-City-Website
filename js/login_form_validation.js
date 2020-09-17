function validate_login_form() {
	var login_email = document.getElementById('login_frm_email').value;
	var login_password= document.getElementById('login_frm_password').value;

	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	
	if (login_email != "") {
		if(login_email.match(mailformat))
			{
				
				return true;
			}
		else
			{
				alert("You have entered an invalid email address!");
				login_email.focus();
				return false;
			}	
	}
 	else {
 			alert("Please enter the Email. Dont leave it blank.");
			login_email.focus();
			return false;
	}

	if (login_password == "") {
		alert('Enetr the Password.');
		login_password.focus();
		return flase;
	} 
	else{
		return true;
	}

}