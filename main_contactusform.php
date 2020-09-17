<?php include 'db_connect.php';

 if($_SERVER["REQUEST_METHOD"] == "POST") {

 	if (isset($_POST['contact_us_fullsubmitbtn'])) {
 		$name = $_POST['contact_us_name'];
 		$email = $_POST['contact_us_email'];
 		$affair = $_POST['contact_us_asunto'];
 		$affair_desc = $_POST['contactus_textarea'];
 		if (isset($name) && isset($email) && isset($affair)) {
 			# code...
 			$msg = "Hello,\n\t We are Contacting from CIUDAD. You entered your email for contatacting you for inquiry.\n ";

			// use wordwrap() if lines are longer than 70 characters
			$msg = wordwrap($msg,);

			// send email
			mail($email,"CIUDAD : Contact Us",$msg);

 			$result=mysqli_query($mysqli,"INSERT INTO contact_us (c_name, c_email, c_affair, c_affair_desc, c_contact_status ) VALUES ( '$name', '$email' , '$affair' , '$affair_desc', '1' )")or die("Error: ".mysqli_error($mysqli));
 			if ($result) {



 				# code...
 			}

 		}
 		else{
 			echo "Dont leave anything blank";
 			header(" Location: ContactUs.php");

 		}



 	}

 	header("ContactUs.php");
 }
 ?>
