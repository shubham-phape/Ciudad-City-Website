<!--Shubham Phape || UTA ID- 1001773736-->
<!--Ajinkya Salvi || UTA ID- 1001773996 -->
<?php include 'session.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {

    //Event PART STARTS HERE_____________________________
         //ifrgister for event
         if (isset($_POST['register_event'])) {
              $event_choice_id= $_POST['event_choice'];
                    if (mysqli_query($mysqli,"INSERT INTO users_participated ( UP_userid, UP_EId) VALUES (  '$current_id', '$event_choice_id')")) {
                            $_SESSION['register_flag'] = 1;

                    }
                    else{
                        //  echo"  <br><text style='color:red;'>Already registered for the Event.</text>";
                        $_SESSION['register_flag']=2;
                    }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHBOARD</title>
     <?php include 'footer_contactus.php';?>
    <link rel="stylesheet" href="./ciudad.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/footer_contactus.js"></script>
</head>

<body>
    <div id="wrapper">
        <!--Navigation bar   header-->
        <header>
            <div class="bg_logo_div">
                <img id="logo_image" src="Images/i.jpg" ALT="Ciudad" ALIGN=CENTER>
                <nav class="nav_header">
                    <ul>
                        <li><a class="nav_items" href="Home.php">Inicio </a> </li>
                        <li>/</li>
                        <li><a class="nav_items" href="AboutUs.php"> Nosotros </a></li>
                        <li>/</li>
                        <li><a class="nav_items" href="Team.php" >Equipos </a></li>
                        <li>/</li>
                        <li><a class="nav_items" href="https://sxp3737.uta.cloud/Blog/">Blog</a></li>
                        <li>/</li>
                        <li><a class="nav_items" href="ContactUs.php">Contacto</a> </li>
                        <li>/</li>
                        <li><a class="nav_items" href="logout.php" id="active">Log Out</a></li>
                    </ul>
                </nav>
            </div>
            <!--Banner code here-->
            <div class="banner_div" >
                <img  class="banner_div_img" src="./Images/Banner.png">
                <div class="banner_outter_text">
                    <h1 class="banner_text">Dashboard</h1>
                    <h5 class="banner_text">Welcome, <?php echo $current_name;?></h5>

                </div>
            </div>
            <!--Banner Ends here-->
            <!--HEADER ends here-->
        </header>
        <!--div for wrapping the whole content-->

        <div class="content_wrap">
            <div class="userd_grid">
             <div class="profile_board">
                <h1 class="profile_board_name">Personal Information</h1>
                <h2> <?php echo $current_name;?></h2>
                <p class="profile_board_name"> <?php echo $current_email;?></p>
                <p class="profile_board_name"> <?php echo $current_phoneno;?></p>
                <p class="profile_board_name"> <?php echo $current_city;?></p>
    
            </div><br><br><br><br>

            <div class="userd_events_grid">
                    <h2 class="orange_italic"> Upcoming Events</h2><br><br>
                    <table>
                       <?php if ($_SESSION['register_flag']==1) {
                                // code...<label for='post_namee' class='grey_color'>Blog Name:</label>
                              echo"  <br><text style='color:green;'>Registered for the Event, Successfully!!</text>";
                              $_SESSION['blogoperation_flag']=0;
                              }
                              elseif($_SESSION['register_flag']==2){
                                   echo"  <br><text style='color:red;'>Already registered for that Event.</text>";
                              $_SESSION['blogoperation_flag']=0; 
                              }
                              elseif($_SESSION['register_flag']==0){
                                    echo"  ";
                              }

                               ?>
                        <form method="post" action="">
                        <?php 
                        if($event_result=mysqli_query($mysqli,"Select * from wevents")or die("Error: ".mysqli_error($mysqli))){
                              while($event_post=mysqli_fetch_array( $event_result)){
                                echo "<tr>
                                          <td> <br> </td>
                                        </tr>

                                        <!--Row starts here -->
                                        <tr class='user_events_info_td'>
                                        <td class='userd_events_info_td'><input type='radio' name='event_choice' required value=\"". $event_post['EventId']. "\"> <font id='gray'></font></td>
                                        <td class='user_events_info_td'>{$event_post['EName']}</td>
                                        <td class='user_events_info_td' id='padding3'>
                                            <font id='gray'>Event on :</font> {$event_post['EDate']}
                                        </td>
                                         <td class='user_events_info_td'><font id='gray'>Registration Status:</font>";
                                          if ($event_post['EClosedFlag']==0) {
                                        # code...
                                             $event_stat= 'OPEN';
                                             echo"</text style='color:green;'> {$event_stat}</text></td> </tr>";
                                            }
                                        else{
                                             $event_stat= 'CLOSED';
                                             echo"</font color='red'> {$event_stat}</font></td> </tr><tr>
                                          <td> <br> </td>
                                        </tr>";
                                             }
                                          
                              }
                            }
                          ?>     </tr>
                                        <tr>
                                          <td> <br> </td>
                                        </tr>   <tr>
                                       <td></td>
                                       <td></td>
                                       <td> </td>
                                        <td class="user_events_info_td" id="padding3">

                                            <input type="submit" name="register_event" value="Register Event" title="Edit this Blog" class="contact_us_form_btn">

                                        </td>
                                        </tr>
                                        <tr>
                                          <td> <br> </td>
                                        </tr>

                      </form>
                    </table>
            </div>

        </div>
        </div>
        <!--Main wrapper class ends here-->
        <!--footer starts here-->
        <footer>
            <!--FIRST BLOCK OF FOOTER-->
            <!--CONTACT US EMAIL US PART OF FOOTER-->

            <div class="trial_footer_grid">
        <div class="trial_upper_footer">
            <br><br>
            <div class="trial_inner_grid1">
                <div>
                    <h1 class="footer_text">Contactate con </h1>
                 <h1 class="orange_italic"> Nosotros</h1>
                </div>
                <div>
                    
                    <form name="form_footer_contact_us" id="form_footer_contact_us" method="post"  action="" onsubmit="return validate_footer_email()" >
                                <input type="email" name="form_footer_contact_email"  id="form_footer_contact_email" placeholder="Email" class="Email_textbox" required>
                                <input type="submit" name="contact_us_email_btn" value="ENVAIR"   id="contact_us_email_btn">
                     </form>
                    <br><br>
                </div>
            </div>
        </div>

        <div class="trial_lower_footer">
            <br>
            <div class="trial_inner_grid2">
                <img src="./Images/icons/email.png" class="social_item">
                <img src="./Images/icons/twitter.png" class="social_item">
                <img src="./Images/icons/instagram.png" class="social_item">
            </div>
            <br>
            <div class="trial_lower_footer">
               <div class="copyright_div">
                    <div class="footer_item1">
                        <font class="copyright_orange">DiazApps </font><font class="copyright_text">&#169; 2020 All Rights Resesrved.
                     </font>
                    </div>
                    <div class="footer_item2">
                        <a href="#wrapper">
                            <img class="top_btn" src="Images/icons/big_up_box.png">
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
            <!---->
            <!---->
            <!---->
        </footer>
        <!--footer has ended ABOVE here-->
    </div>
    <!--body Ends here-->
</body>

</html>
