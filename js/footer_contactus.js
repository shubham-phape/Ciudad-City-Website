function validate_footer_email() {
	// validating the email
	 var fffttt_email=document.getElementById("form_footer_contact_email").value;
	 
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	
if (fffttt_email != "") {
	if(fffttt_email.match(mailformat))
		{
			alert("Our Team will get back to you on your email... ");
			return true;
		}
	else
		{
			alert("You have entered an invalid email address!");
			fffttt_email.focus();
			return false;
		}	
}
 else {
 		alert("Please enter the Email. Dont leave it blank.");
		fffttt_email.focus();
		return false;
}
	
}