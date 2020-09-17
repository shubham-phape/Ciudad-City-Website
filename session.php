<?php include 'db_connect.php';
    session_start();
    $id = $_SESSION['id'];
    $name = $_SESSION['currentuser'];

    $result=mysqli_query($mysqli,"Select * from user where user_id ='$id' and u_name = '$name'")or die("Error: ".mysqli_error($mysqli));
    $row1 =  mysqli_fetch_assoc($result);
    $current_id= $row1['user_id'];
    $current_email = $row1['u_email'];
    $current_name = $row1['u_name'];
    $current_city = $row1['u_city'];
    $current_phoneno= $row1['u_phoneno'];

    if (!isset($_SESSION['id'])) {
      // code...
      header("Location:Home.php#login2");

    }

?>
