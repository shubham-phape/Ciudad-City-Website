<!--Shubham Phape || UTA ID- 1001773736-->
<!--Ajinkya Salvi || UTA ID- 1001773996 -->
<?php include 'session.php';
      include 'db_connect.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {

    //BLOG PART STARTS HERE_____________________________
         //if blog edit button is pressed
         if (isset($_POST['edit_blog'])) {

          $blog_choice_id= $_POST['blog_choice'];
           if($final_blog_result=mysqli_query($mysqli,"Select * from blogs where BId= '$blog_choice_id'")or die("Error: ".mysqli_error($mysqli))){
              $whose_turn=1;//turn is 1 here
              $blog_item= mysqli_fetch_array($final_blog_result);
              setcookie("Blog_id", $blog_item['BId'],time() + (86400 * 15), "/");
              setcookie("Blog_name", $blog_item['BName'],time() + (86400 * 15), "/");
              setcookie("Blog_desc", $blog_item['BContent'],time() + (86400 * 15), "/");
              setcookie("Blog_date", $blog_item['BDate'],time() + (86400 * 15), "/");
              header("Location: AdminDashboard.php#editblog");

               }
              }
            elseif (isset($_POST['delete_blog'])) {
                # blog should be deleted
                $blog_choice_id= $_POST['blog_choice'];
                if($final_blog_result=mysqli_query($mysqli,"DELETE FROM blogs where BId= '$blog_choice_id'")or die("Error: ".mysqli_error($mysqli))){
                    $_SESSION['blogoperation_flag']=2;

                }


            }
             elseif (isset($_POST['add_blog'])) {
                # add new blog
               header("Location: AdminDashboard.php#addblog");


            }
            elseif (isset($_POST['edit_events'])) {

          $event_choice_id= $_POST['event_choice'];
           if($final_event_result=mysqli_query($mysqli,"Select * from wevents where EventId= '$event_choice_id'")or die("Error: ".mysqli_error($mysqli))){
              $whose_turn=1;//turn is 1 here
              $event_item= mysqli_fetch_array($final_event_result);
              setcookie("event_id", $event_item['EventId'],time() + (86400 * 15), "/");
              setcookie("event_name", $event_item['EName'],time() + (86400 * 15), "/");
              setcookie("event_desc", $event_item['EDescription'],time() + (86400 * 15), "/");
              setcookie("event_date", $event_item['EDate'],time() + (86400 * 15), "/");
              header("Location: AdminDashboard.php#editEvent");

               }
              }
                elseif (isset($_POST['delete_event'])) {
                # blog should be deleted
                $event_choice_id= $_POST['event_choice'];
                if($final_blog_result=mysqli_query($mysqli,"DELETE FROM wevents where EventId= '$event_choice_id'")or die("Error: ".mysqli_error($mysqli))){
                    $_SESSION['blogoperation_flag']=5;

                }


            }
             elseif (isset($_POST['add_event'])) {
                # add new blog
               header("Location: AdminDashboard.php#addevent");


            }

    //BLOG PART ENDS HERE_____________________________


            }


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <?php include 'footer_contactus.php';?>
            <title>DASHBOARD</title>
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
                            <li><a class="nav_items" href="Team.php">Equipos </a></li>
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
                <div class="banner_div">
                    <img class="banner_div_img" src="./Images/Banner.png">
                    <div class="banner_outter_text">
                        <h1 class="banner_text">Dashboard</h1>
                        <h5 class="banner_text">Welcome, Admin</h5>
                    </div>
                </div>
                <!--Banner Ends here-->
                <!--HEADER ends here-->
            </header>

            <!--div for wrapping the whole content-->
            <div class="content_wrap">
                <div class="userd_events_grid">
                    <h2 class="orange_italic"> Upcoming Events</h2>
                    <br>
                    <br>
                 
                  
<!---TRIAL----------------------------------------------------------------------------------------------------------------------------------------TRIAL STARTS HERE-!>

<!-Event tyable starts herererere-->
                    <table>
                        </div>
                    
                        <!---Blogs section starts here-->
                      
                          
                            <?php
                              if ($_SESSION['blogoperation_flag']==4) {
                                // code...<label for='post_namee' class='grey_color'>Blog Name:</label>
                              echo"  <br><text style='color:green;'>Event details Updated Succesfully!!</text>";
                              $_SESSION['blogoperation_flag']=0;
                              }
                              elseif ($_SESSION['blogoperation_flag']==5) {
                                echo"  <br><text style='color:green;'>Event Deleted Succesfully!!</text>";
                              $_SESSION['blogoperation_flag']=0;
                              }
                              elseif ($_SESSION['blogoperation_flag']==6) {
                                echo"  <br><text style='color:green;'>New Event Added Succesfully!!</text>";
                              $_SESSION['blogoperation_flag']=0;
                              }
                              else {
                                // code...
                              }
                            ?>
                            <br>
                            <br>
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                <?php  if($event_result=mysqli_query($mysqli,"Select * from wevents")or die("Error: ".mysqli_error($mysqli))){
                                //if there are blogs?>

                                    <?php
                              while($event_post=mysqli_fetch_array( $event_result)){
                                   
                                  echo "<tr>
                                          <td> <br> </td>
                                        </tr>

                                        <!--Row starts here -->
                                        <tr class='user_events_info_td'>
                                        <td class='userd_events_info_td'><input type='radio' name='event_choice' required value=\"". $event_post['EventId']. "\"> <font id='gray'>Event </font></td>
                                        <td class='user_events_info_td'>{$event_post['EName']}</td>
                                        <td class='user_events_info_td' id='padding3'>
                                            <font id='gray'>Event on :</font> {$event_post['EDate']}
                                        </td>
                                         <td class='user_events_info_td'><font id='gray'> Status:</font>";
                                          if ($event_post['EClosedFlag']==1) {
                                        # code...
                                             $event_stat= 'OPEN';
                                             echo"</text style='color:green;'> {$event_stat}</text></td> </tr>";
                                            }
                                        else{
                                             $event_stat= 'CLOSED';
                                             echo"</font color='red'> {$event_stat}</font></td> </tr>";
                                             }
                                          
                              }
                            }
                          ?>
                                        <tr>
                                            <td>
                                                <br> </td>
                                        </tr>
                                        <!--Edit button starts-->
                                        <td class="user_events_info_td" id="padding3">

                                            <input type="submit" name="edit_events" value="Edit Event" title="Edit this Blog" class="contact_us_form_btn">

                                        </td>
                                        <!--Edit blog button ends-->
                                        <!--Delete button code starts here-->
                                        <td class="user_events_info_td" id="padding3">
                                            <!--Delete button starts-->
                                            <a href="#">
                                                <input type="submit" name="delete_event" value="Delete Event" title="Delete this Blog" class="contact_us_form_btn">
                                            </a>
                                        </td>
                                        <!--Delete button code Ends here-->

                            </form>
                            <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                 <!--Add new blog  button strat-->
                                        <td class="user_events_info_td" id="padding3">
                                            <a href="#addblog">
                                                <input type="submit" name="add_event" value="Add Event" title="Add Blog" class="contact_us_form_btn">
                                            </a>
                                        </td>
                                        <!--Add new blog button ends-->
                            </form>
                            </tr>
                            <!--End of first row-->
                            <!----------------------------------------------------------------------------POPUP-Forms--Starts-------------------------------------------------------------------------------->
                            <!--Edit button form code starts starts-->

                            <div id="editEvent" class="login2-window">
                                <div>
                                    <a href="#" title="Close" class="login2-close"> &times;</a>
                                    <div>
                                        <h1 class="orange_italic">Edit Event Details</h1>
                                    </div>

                                    <?php
                         # code...\

                                    echo "     <form class='login_form' action='blog_operations.php' method='post'>
                                                    <div class='login_border'>
                                                        <br>
                                                        <input type='hidden' name='event_hidden_id'  value=\"".$_COOKIE["event_id"]. "\">
                                                        <label for='event_namee' class='grey_color'>Event Name:</label><br><br>
                                                        <input type='text' name='event_namee' class='login_input' required value=\"".$_COOKIE["event_name"]. "\"><br><br>

                                                        <label for='event_date' class='grey_color'>Event Date: </label><br><br>
                                                        <input type='date' name ='event_date' class='login_input' required value=\"".$_COOKIE["event_date"]. "\"><br><br>

                                                         <label for='event_description' class='grey_color'>Event Description: </label><br><br>";?>
                                                        <textarea  name='event_description' class='dashboard_input'><?php    echo $_COOKIE["event_desc"]; ?></textarea>


                                                        <br>
                                                    </div>
                                                    <br>
                                                    <input type='submit' value='Update Event' name='event_update_btn' class='login_button' id='white' onclick='window.close()'>
                                                </form>



                                </div>
                            </div>

                            <!--Edit button Ends-->
                            <!------------------------------------>
                            <!--Add blog button form code starts here-->
                            <div id="addevent" class="login2-window">
                                <div>

                                    <a href="#" title="Close" class="login2-close"> &times;</a>
                                    <div>
                                        <h1 class="orange_italic">Add New Event</h1></div>
                                    <form class="login_form"  action='blog_operations.php' method="post">
                                        <div class="login_border">
                                            <br>
                                             <label for='event_namee' class='grey_color'>Event Name:</label><br><br>
                                                <input type='text' name='event_namee' class='login_input' required ><br><br>
                                            <label for='event_date' class='grey_color'>Event Date: </label><br><br>
                                                <input type='date' name ='event_date' class='login_input' required ><br><br>
                                            <label for='event_description' class='grey_color'>Event Description: </label><br><br>
                                                <textarea  name='event_description' class='dashboard_input' required></textarea>
                                            <br>
                                            <br>

                                        </div>
                                        <br>
                                        <input type="submit" value="Add Event"  name='event_add_btn' class="login_button" id="white" onclick="window.close()">
                                    </form>

                                </div>
                            </div>
                            <!--Add blog button form code Ends here-->
                      </table>


<!------------------------------------------------------------Events SEndsHERE---------------------------------------------------------------------------------------------------------->

                    <!--Blog tyable starts herererere-->
                    <table>
                        </div>
                        <br>
                        <br>
                          <br>
                        <br>
                        <br>
                        <!---Blogs section starts here-->
                        <div class="userd_events_grid">
                            <h2 class="orange_italic"> Posted Blogs</h2>
                            <?php
                              if ($_SESSION['blogoperation_flag']==1) {
                                // code...<label for='post_namee' class='grey_color'>Blog Name:</label>
                              echo"  <br><text style='color:green;'>Blog Updated Succesfully!!</text>";
                              $_SESSION['blogoperation_flag']=0;
                              }
                              elseif ($_SESSION['blogoperation_flag']==2) {
                                echo"  <br><text style='color:green;'>Blog Deleted Succesfully!!</text>";
                              $_SESSION['blogoperation_flag']=0;
                              }
                              elseif ($_SESSION['blogoperation_flag']==3) {
                                echo"  <br><text style='color:green;'>New Blog Added Succesfully!!</text>";
                              $_SESSION['blogoperation_flag']=0;
                              }
                              else {
                                // code...
                              }
                            ?>
                            <br>
                            <br>
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                <?php  if($blog_result=mysqli_query($mysqli,"Select * from blogs")or die("Error: ".mysqli_error($mysqli))){
                                //if there are blogs?>

                                    <?php
                              while($blog_post=mysqli_fetch_array( $blog_result)){

                                  echo "<tr>
                                          <td> <br> </td>
                                        </tr>

                                        <!--Row starts here -->
                                        <tr class='user_events_info_td'>
                                        <td class='userd_events_info_td'><input type='radio' name='blog_choice' required value=\"". $blog_post['BId']. "\"></td>
                                        <td class='user_events_info_td'>{$blog_post['BName']}</td>
                                        <td class='user_events_info_td' id='padding3'>
                                            <font id='gray'>Blog date :</font> {$blog_post['BDate']}
                                        </td></tr>";
                              }
                            }
                          ?>
                                        <tr>
                                            <td>
                                                <br> </td>
                                        </tr>
                                        <!--Edit button starts-->
                                        <td class="user_events_info_td" id="padding3">

                                            <input type="submit" name="edit_blog" value="Edit Blog" title="Edit this Blog" class="contact_us_form_btn">

                                        </td>
                                        <!--Edit blog button ends-->
                                        <!--Delete button code starts here-->
                                        <td class="user_events_info_td" id="padding3">
                                            <!--Delete button starts-->
                                            <a href="#">
                                                <input type="submit" name="delete_blog" value="Delete Blog" title="Delete this Blog" class="contact_us_form_btn">
                                            </a>
                                        </td>
                                        <!--Delete button code Ends here-->

                            </form>
                            <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                 <!--Add new blog  button strat-->
                                        <td class="user_events_info_td" id="padding3">
                                            <a href="#addblog">
                                                <input type="submit" name="add_blog" value="Add Blog" title="Add Blog" class="contact_us_form_btn">
                                            </a>
                                        </td>
                                        <!--Add new blog button ends-->
                            </form>
                            </tr>
                            <!--End of first row-->
                            <!----------------------------------------------------------------------------POPUP-Forms--Starts-------------------------------------------------------------------------------->
                            <!--Edit button form code starts starts-->

                            <div id="editblog" class="login2-window">
                                <div>
                                    <a href="#" title="Close" class="login2-close"> &times;</a>
                                    <div>
                                        <h1 class="orange_italic">Edit Blog</h1>
                                    </div>

                                    <?php
                         # code...\

                                    echo "     <form class='login_form' action='blog_operations.php' method='post'>
                                                    <div class='login_border'>
                                                        <br>
                                                        <input type='hidden' name='post_hidden_id'  value=\"".$_COOKIE["Blog_id"]. "\">
                                                        <label for='post_namee' class='grey_color'>Blog Name:</label><br><br>
                                                        <input type='text' name='post_namee' class='login_input' required value=\"".$_COOKIE["Blog_name"]. "\"><br><br>

                                                        <label for='post_date' class='grey_color'>Blog Date: </label><br><br>
                                                        <input type='date' name ='post_date' class='login_input' required value=\"".$_COOKIE["Blog_date"]. "\"><br><br>

                                                         <label for='post_description' class='grey_color'>Blog Description: </label><br><br>";?>
                                                        <textarea  name='post_description' class='dashboard_input'><?php    echo $_COOKIE["Blog_desc"]; ?></textarea>


                                                        <br>
                                                    </div>
                                                    <br>
                                                    <input type='submit' value='Update Blog' name='blog_update_btn' class='login_button' id='white' onclick='window.close()'>
                                                </form>



                                </div>
                            </div>

                            <!--Edit button Ends-->
                            <!------------------------------------>
                            <!--Add blog button form code starts here-->
                            <div id="addblog" class="login2-window">
                                <div>

                                    <a href="#" title="Close" class="login2-close"> &times;</a>
                                    <div>
                                        <h1 class="orange_italic">Add Blog</h1></div>
                                    <form class="login_form"  action='blog_operations.php' method="post">
                                        <div class="login_border">
                                            <br>
                                             <label for='post_namee' class='grey_color'>Blog Name:</label><br><br>
                                                <input type='text' name='post_namee' class='login_input' required ><br><br>
                                            <label for='post_date' class='grey_color'>Blog Date: </label><br><br>
                                                <input type='date' name ='post_date' class='login_input' required ><br><br>
                                            <label for='post_description' class='grey_color'>Blog Description: </label><br><br>
                                                <textarea  name='post_description' class='dashboard_input' required></textarea>
                                            <br>
                                            <br>

                                        </div>
                                        <br>
                                        <input type="submit" value="Add Blog"  name='blog_add_btn' class="login_button" id="white" onclick="window.close()">
                                    </form>

                                </div>
                            </div>
                            <!--Add blog button form code Ends here-->
                      </table>
                            <!---------------------------------------------------------------------------POPUP-Forms-Ends-------------------------------------------------------------------------------->


                    <br>
                    <br>
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
                                <br>
                                <br>
                                <div class="trial_inner_grid1">
                                    <div>
                                        <h1 class="footer_text">Contactate con </h1>
                                        <h1 class="orange_italic"> Nosotros</h1>
                                    </div>
                                    <div>
                                        <form name="form_footer_contact_us" id="form_footer_contact_us" method="post" action="" onsubmit="return validate_footer_email()">
                                            <input type="email" name="form_footer_contact_email" id="form_footer_contact_email" placeholder="Email" class="Email_textbox" required>
                                            <input type="submit" name="contact_us_email_btn" value="ENVAIR" id="contact_us_email_btn">
                                        </form>
                                        <br>
                                        <br>
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
