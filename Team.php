<!--Shubham Phape || UTA ID- 1001773736-->
<!--Ajinkya Salvi || UTA ID- 1001773996 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
     <?php include 'footer_contactus.php';?>
    <title>Nuestros Equipos | Our Team</title>
    <link rel="stylesheet" href="./ciudad.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/footer_contactus.js"></script>
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
                        <li><a class="nav_items" href="Home.php">Inicio </a> </li>
                    <li>/</li>
                    <li><a class="nav_items" href="AboutUs.php"> Nosotros </a></li>
                    <li>/</li>
                    <li><a class="nav_items" href="Team.php" id="active">Equipos </a></li>
                    <li>/</li>
                    <li><a class="nav_items" href="https://sxp3737.uta.cloud/Blog/">Blog</a></li>
                    <li>/</li>
                    <li><a class="nav_items" href="ContactUs.php">Contacto</a> </li>
                    <li>/</li>
                    <li><a class="nav_items" href="#login2">Inicio de Sesion
                        <div id="login2" class="login2-window">
    <div>

        <a href="#" title="Close" class="login2-close"> &times;</a>
                        <div>
                            <h1 id="inline">Inicio de </h1>
                            <h1 class="orange_italic">Sesion</h1></div>
                         <form class="login_form" method="post" onsubmit="return validate_login_form()" action="login_process.php">
                            <div class="login_border">
                                <br>
                                <label for="correo"> Correo</label>
                                <br>
                                <input type="email" placeholder=" Tu Correo" class="login_input" id="login_frm_email" name="login_frm_email" required>
                                <br>
                                <br>
                                <label for="contraseña"> Contraseña</label>
                                <br>
                                <input type="password" placeholder=" Tu Contraseña" class="login_input" id="login_frm_password" name="login_frm_password" required>
                                <br>
                                <br>
                            </div>
                            <br>
                           <input type="submit" name="login_frm_btn" value="LOGIN"  class="login_button">
                        </form>

        </div>
        </div>
        <!--LOGIN POPUP ENDS HERE--></a></li>
                    </ul>
                </nav>
            </div>
            <!--Banner code here-->
          <div class="banner_div" >
                <img  class="banner_div_img" src="./Images/Banner.png">
                <div class="banner_outter_text">
                    <h1 class="banner_text">NUESTROS EQUIPOS</h1>
                    <h5 class="banner_text">INICIO > NUESTROS EQUIPOS</h5>

                </div>
            </div>
            <!--Banner Ends here-->
            <!--HEADER ends here-->
        </header>
        <!--div for wrapping the whole content-->

        <div class="content_wrap">

            <!--First h2 here-->
            <div class="team_heading">
                <h2 class="display_inline">Equipo de </h2>
                <h2 class="orange_italic">  Direccion</h2>
            </div>
            <div class="direccion_container">
                <div class="item2">
                    <figure>
                        <img class="big_team_member_img" src="./Images/mariaa.png">
                        <figcaption>
                            <font>Maria A Malaver</font>
                            <br>
                            <font class="member_place_name">Venezuela</font>
                        </figcaption>
                    </figure>
                </div>
                <div class="item3">
                    <figure>
                        <img class="big_team_member_img" src="./Images/adonella.png">

                        <figcaption>
                            <font>Adonella Loffredo</font>
                            <br>
                            <font class="member_place_name">España</font>
                        </figcaption>
                    </figure>
                </div>
                <div class="item4">
                    <figure>
                        <img class="big_team_member_img" src="./Images/tamara.png">
                        <figcaption>
                            <font>Tamara Malaver</font>
                            <br>
                            <font class="member_place_name">USA</font>
                        </figcaption>
                    </figure>
                </div>
                <!--direccion container ends below-->
            </div>

            <!--Next Photos of team members start here-->
            <div class="team_heading_2">
                <h2 class="display_inline">Equipo de </h2>
                <h2 class="orange_italic">  Trabajo Multidisciplina </h2>
            </div>
            <!--Profile photos-->
            <div>
                <div class="small_profiles">
                    <div class="profile_item">
                        <figure><img  class="small_team_member_img" src="./Images/beatriz.png">
                            <figcaption><font>Beatriz Marin</font>
                                <br><font class="member_place_name">Venezuela</font></figcaption>
                        </figure>
                    </div>
                    <div class="profile_item">
                        <figure><img   class="small_team_member_img"  src="./Images/mariaeugenia.png">
                            <figcaption><font>Maria Eugenia Jiron</font>
                                <br><font class="member_place_name">Venezuela</font></figcaption>
                        </figure>
                    </div>
                    <div class="profile_item">
                        <figure><img  class="small_team_member_img"  src="./Images/marcolopez.png">
                            <figcaption><font>Marco Lpoez</font>
                                <br><font class="member_place_name">Venezuela</font></figcaption>
                        </figure>
                    </div>
                    <div class="profile_item">
                        <figure><img   class="small_team_member_img" src="./Images/virginia.png">
                            <figcaption><font>Virginia Ortega</font>
                                <br><font class="member_place_name">Chile</font></figcaption>
                        </figure></div>
                    <div class="profile_item">
                        <figure><img  class="small_team_member_img" src="./Images/josedionisio.png">
                            <figcaption><font>Jose D Solorzano</font>
                                <br><font class="member_place_name">Venezuela</font></figcaption>
                        </figure>
                    </div>
                    <div class="profile_item">
                        <figure><img class="small_team_member_img" src="./Images/otoniel.png">
                            <figcaption><font>Otoniel Martinez</font>
                                <br><font class="member_place_name">Venezuela</font></figcaption>
                        </figure></div>
                    <div class="profile_item">
                        <figure><img class="small_team_member_img" src="./Images/vanessa.png">
                            <figcaption><font>Vanessa Curiel</font>
                                <br><font class="member_place_name">Venezuela</font></figcaption>
                        </figure>
                    </div>
                    <div class="profile_item">
                        <figure><img class="small_team_member_img" src="./Images/lenin.png">
                            <figcaption><font>Lenin Malave</font>
                                <br><font class="member_place_name">Venezuela</font></figcaption>
                        </figure>
                    </div>
                    <div class="profile_item">
                        <figure><img class="small_team_member_img" src="./Images/anacristina.png">
                            <figcaption><font>Ana C Rodriguez</font>
                                <br><font class="member_place_name">Venezuela</font></figcaption>
                        </figure>
                    </div>
                    <div class="profile_item">
                        <figure><img class="small_team_member_img" src="./Images/iristriana.png">
                            <figcaption><font>Iris Triana</font>
                                <br><font class="member_place_name">Venezuela</font></figcaption>
                        </figure>
                    </div>
                    <div class="profile_item">
                        <figure><img class="small_team_member_img" src="./Images/emil.png">
                            <figcaption><font>Emil Beraun</font>
                                <br><font class="member_place_name">Peru</font></figcaption>
                        </figure>
                    </div>
                    <div class="profile_item">
                        <figure><img class="small_team_member_img" src="./Images/ingrid.png">
                            <figcaption><font>Ingrid Nuñez</font>
                                <br><font class="member_place_name">USA</font></figcaption>
                        </figure>
                    </div>
                    <div class="profile_item">
                        <figure><img class="small_team_member_img" src="./Images/juanpablo.png">
                            <figcaption><font>Juan P Patiño</font>
                                <br><font class="member_place_name">Mexico</font></figcaption>
                        </figure>
                    </div>
                    <div class="profile_item">
                        <figure><img class="small_team_member_img" src="./Images/geanina.png">
                            <figcaption><font>Geanina Ureña</font>
                                <br><font class="member_place_name">Costa Rica</font></figcaption>
                        </figure>
                    </div>
                    <div class="profile_item">
                        <figure><img class="small_team_member_img" src="./Images/benito.png">
                            <figcaption><font>Benito Rodriguez</font>
                                <br><font class="member_place_name">Venezuela</font></figcaption>
                        </figure>
                    </div>
                </div>

            </div>

            <!--End of content wrap class-->
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
                                <input type="submit" name="contact_us_email_btn" value="ENVAIR"  id="contact_us_email_btn">
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
        <!--footer has ended ABOVE here-->
    </div>
    <!--body Ends here-->
</body>

</html>
