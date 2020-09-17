<?php include 'db_connect.php';
  session_start();
 if($_SERVER["REQUEST_METHOD"] == "POST") {
   if (isset($_POST['login_frm_btn']) && isset($_POST['login_frm_email']) && isset($_POST['login_frm_password'])) {
        $login_email= $_POST['login_frm_email'];
        $login_password= $_POST['login_frm_password'];

        if (isset($login_email) && isset($login_password) ) {
          // if everything is Tok
          if ($result=mysqli_query($mysqli,"Select * from user where u_email ='$login_email' and u_password = '$login_password'")or die("Error: ".mysqli_error($mysqli))) {
            //user exists
            if ($result->num_rows == 1) {
              // code...
              $row =  mysqli_fetch_assoc($result);
            //  echo $row["u_flag"];
            //  header("user_dashboard.php");
              $_SESSION['id'] = $row['user_id'];
              $_SESSION['currentuser'] = $row['u_name'];
              $_SESSION['flag'] = $row['u_flag'];
              //u_flag =1 means user and 0 means admin
              if ($row['u_flag'] == 1) {
                // cthis is USer
                header("Location: user_dashboard.php");
              }
              else{
                //this is Admin
                header("Location: AdminDashboard.php");
              }
            }
            else{
              echo "No such User or Invalid Username or Password";
              header("Location:Home.php#login2 ");
            }
            $result->close();
          }

        }
        else{
            echo"Enter the Valid Username or Password";
            header("Location:Home.php#login2 ");
        }
   }
}
?>
