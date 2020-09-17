<!--Shubham Phape || UTA ID- 1001773736-->
<!--Ajinkya Salvi || UTA ID- 1001773996 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CONTACTO | CONTACT US</title>
    <?php include 'main_contactusform.php';?>
    <link rel="stylesheet" href="./ciudad.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/contactus_form_validation.js"></script>
    <script type="./js/login_form_validation.js"></script>
</head>

<body>
    <div id="wrapper">
        <!--Navigation bar   header-->
        <header>
             <div class="bg_logo_div">
                  <img id="logo_image" src="Images/i.jpg" ALT="Ciudad" ALIGN=CENTER>

                  <nav class="nav_header">
                       <ul>
                       <li><a class="nav_items" href="Home.php">Inicio </a></li>
                       <li>/</li>
                       <li><a class="nav_items" href="AboutUs.php"> Nosotros </a></li>
                       <li>/</li>
                       <li><a class="nav_items" href="Team.php">Equipos </a></li>
                       <li>/</li>
                       <li><a class="nav_items" href="https://sxp3737.uta.cloud/Blog/">Blog</a></li>
                       <li>/</li>
                       <li><a class="nav_items" href="ContactUs.php" id="active">Contacto</a> </li>
                       <li>/</li>
                       <li><a class="nav_items" href="#login2">Inicio de Sesion
                            <div id="login2" class="login2-window">
                                 <div>
                                      <a href="#" title="Close" class="login2-close"> &times;</a>
                                      <div>
                                           <h1 id="inline">Inicio de </h1>
                                           <h1 class="orange_italic">Sesion</h1>
                                      </div>

                                      <form class="login_form" method="post" onsubmit="return validate_login_form()" action="login_process.php">
                                           <div class="login_border">
                                                <br>
                                                <label for="correo"> Correo</label>
                                                <br>
                                                <input type="email" placeholder=" Tu Correo" class="login_input" id="login_frm_email" name="login_frm_email" required>
                                                <br><br>
                                                <label for="contraseña"> Contraseña</label>
                                                <br>
                                                <input type="password" placeholder=" Tu Contraseña" class="login_input" id="login_frm_password" name="login_frm_password" required>
                                                <br><br>
                                           </div>
                                           <br>
                                           <input type="submit" name="login_frm_btn" value="LOGIN"  class="login_button">
                                      </form>
                                 </div>
                            </div>
                            <!--LOGIN POPUP ENDS HERE-->
                            </a>
                       </li>
                       </ul>
                  </nav>
             </div>
        </header>
            <!--Banner code here-->
            <div class="banner_div" >
                <img  class="banner_div_img" src="./Images/Banner.png">
                <div class="banner_outter_text">
                    <h1 class="banner_text">CONTACT US</h1>
                    <h5 class="banner_text">HOME > CONTACT US</h5>

                </div>
            </div>
            <!--Banner Ends here-->
            <!--HEADER ends here-->
        </header>
        <!--div for wrapping the whole content-->

        <div class="content_wrap">

             <div class="contactus_all">
                  <div>
                      <div class="contact_item1">
                           <h1 class="display_inline">NUESTRAS</h1>
                           <h1 class="orange_italic"> REDES <br><font class="orange_u">SO</font>CIALES</h1>
                      </div>
                      <br>
                      <div class="contactus_media">
                           <div class="contact_item3">
                               <img src="./Images/icons/contact_instagram_70.png" style="margin: auto;"><br> @genteyciudadorg
                           </div>
                           <div class="contact_item4">
                               <img src="./Images/icons/contact_twitter_70.png"><br>@genteyciudadorg
                           </div>
                           <div class="contact_item6">
                               <img src="./Images/icons/contact_phone_70.png">
                               <br> 001 346 714 3892
                               <br> 058 414 8225881
                               <br> 056 933948007
                           </div>
                           <div class="contact_item7">
                               <img src="./Images/icons/contact_email.png"><br>
                                info@genteyciudad.org
                           </div>
                      </div>
                 </div>

                 <div class="contactus_form">
                      <div class="contact_item2">
                           <h1 class="display_inline">FORMULARIO DE</h1><br>
                           <h1 class="orange_italic"> <font class="orange_u">CO</font>TACTO</h1>
                      </div>
                      <br>
                      <div class="contact_item5">
                           <form id="contact_usformmm" method="post" onsubmit="return contactus_fullform()">
                                <label for="contact_us_name" class="grey_color"> Tu Nombre (requerido)</label><br>
                                <input type="text" id="contact_us_name" name="contact_us_name"  class="contacto_form_input" placeholder="Tu Nombre" required><br><br>

                                <label for="contact_us_email" class="grey_color">Tu Correo (requerido)</label> <br>
                                <input type="email" id="contact_us_email"  name="contact_us_email" class="contacto_form_input" placeholder="Tu Correo" required><br><br>
                                <label class="grey_color">Asunto</label><br>
                                <input type="text" name="contact_us_asunto" class="contacto_form_input" placeholder="Asunto" required><br><br>
                                <label class="grey_color">Asunto</label><br>
                                <textarea class="contactus_textarea" name="contactus_textarea" ></textarea>
                                <br>
                                <input type="submit" value="ENVAIR" name="contact_us_fullsubmitbtn"  class="contact_us_form_btn">
                           </form>
                      </div>
                 </div>
            </div>

            <!--Main wrapper class ends BELOW-->
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
                            <form name="form_footer_contact_us" id="form_footer_contact_us" method="post" action=""  onsubmit="return validate_footer_email()" >
                                <input type="email" name="form_footer_contact_email"  id="form_footer_contact_email" placeholder="Email" class="Email_textbox" required>
                                <input type="submit" name="contact_us_email_btn" value="ENVAIR"  id="contact_us_email_btn">
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
