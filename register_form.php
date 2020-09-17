<?php include 'db_connect.php';
 if($_SERVER["REQUEST_METHOD"] == "POST") {
   if (isset($_POST['register_form_btn'])) {
        $register_name= $_POST['register_name'];
        $register_email= $_POST['register_email'];
        $register_phoneno= $_POST['register_tel'];
        $register_city = $_POST['register_city'];
        $register_password= $_POST['register_password'];

        if (isset($register_name) && isset($register_email) && isset($register_password)) {
          // if everything is Tok

          $result=mysqli_query($mysqli,"INSERT INTO user ( u_email, u_password, u_name, u_phoneno, u_city )
          VALUES ( '$register_email', '$register_password' , '$register_name' , '$register_phoneno', '$register_city' )")or die("Error: ".mysqli_error($mysqli));
          if ($result) {
      $msg = "Hello,\n\t".$register_name.", you have been registered with CIUDAD.\n Thank you for registering with us!\n Good Luck! ";
      // use wordwrap() if lines are longer than 70 characters
      $msg = wordwrap($msg,);
      // send email
      mail($email,"CIUDAD : Thank you for Registering.",$msg);
            // code..
            echo "Registered Succesfully";
          }
        }
   }
}
?>
