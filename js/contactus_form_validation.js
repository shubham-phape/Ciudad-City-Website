function contactus_fullform(){
	var name= document.getElementById("contact_us_name").value;
	var email= document.getElementById("contact_us_email").value;
	var affair= document.getElementById("contact_us_asunto").value;
	var affair_description= document.getElementById("contactus_textarea").value;		
	
	//validating name
	if (name != "") {
		var letters = /^[A-Za-z]+$/;
		if(name.match(letters))
			return true;
		else
		{
			alert("Tu Nombre must have alphabet characters only");
			name.focus();
			return false;
		}
	}
	else 
	{
		alert("Enter the name.");
		name.focus();
		return false;
	}

	//validating email
	if (email != "") {
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if(email.match(mailformat))
		{
			return true;
		}
		else
		{
			alert("You have entered an invalid email address!");
			email.focus();
			return false;
		}
	}
	else{
		alert("Enter the Email.");
		name.focus();
		return false;
	}
	//validating Affair/ asunto
	if (affair == "") {
		alert("Enter the Asunto.");
		name.focus();
		return false;
	} 

	
	

}