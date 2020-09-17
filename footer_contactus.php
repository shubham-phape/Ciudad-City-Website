<?php include 'db_connect.php'; 

 

 	if (isset($_POST['contact_us_email_btn'])) {

 		$entered_email= $_POST['form_footer_contact_email'];
 		$result=mysqli_query($mysqli,"INSERT INTO contact_us ( c_email ) VALUES (  '$entered_email'  )")or die("Error: ".mysqli_error($mysqli));	
 		$msg = "Hello,\n\t We are Contacting from CIUDAD. You entered your email for contatacting you for inquiry.\n ";

// use wordwrap() if lines are longer than 70 characters
		$msg = wordwrap($msg,);

// send email
		mail($entered_email,"CIUDAD : Contact Us",$msg);


		}
	

?>