<!--Shubham Phape || UTA ID- 1001773736-->
<!--Ajinkya Salvi || UTA ID- 1001773996 -->

<?php include 'db_connect.php';

     include 'footer_contactus.php';
     if($_SERVER["REQUEST_METHOD"] == "POST")
     {
          if (isset($_POST['register_form_btn']))
          {
               $register_name= $_POST['register_name'];
               $register_email= $_POST['register_email'];
               $register_phoneno= $_POST['register_tel'];
               $register_city = $_POST['register_city'];
               $register_password= $_POST['register_password'];

               if (isset($register_name) && isset($register_email) && isset($register_password))
               {
                    $result=mysqli_query($mysqli,"INSERT INTO user ( u_email, u_password, u_name, u_phoneno, u_city ) VALUES ( '$register_email', '$register_password' , '$register_name' , '$register_phoneno', '$register_city' )")or die("Error: ".mysqli_error($mysqli));
                    if ($result)
                    {
                           $msg = "Hello,\n\t".$register_name.", you have been registered with CIUDAD.\n Thank you for registering with us!\n Good Luck! ";
      // use wordwrap() if lines are longer than 70 characters
      $msg = wordwrap($msg,);
      // send email
      mail($email,"CIUDAD : Thank you for Registering.",$msg);
                         echo "Registered Succesfully";
                         header("Location:Home.php#login2 ");
                    }
               }

               else
               {
                    echo"Enter the complete data";
               }
          }
     }
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Inicio | Home</title>
        <link rel="stylesheet" href="./ciudad.css">
        <script src="./js/footer_contactus.js"></script>
        <script type="./js/login_form_validation.js"></script>
    </head>

    <body>
        <!--   -***-***-***-   -***-***-***-   -***-***-***-   Navigation Bar   -->
        <header>
            <div class="bg_logo_div">
                <img id="logo_image" src="Images/i.jpg" ALT="Ciudad" ALIGN=CENTER>

                <nav class="nav_header">
                    <ul>
                        <li><a class="nav_items" href="Home.php" id="active">Inicio </a></li>
                        <li>/</li>
                        <li><a class="nav_items" href="AboutUs.php"> Nosotros </a></li>
                        <li>/</li>
                        <li><a class="nav_items" href="Team.php">Equipos </a></li>
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
                                <h1 class="orange_italic">Sesion</h1>
                            </div>

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
                                <input type="submit" name="login_frm_btn" value="LOGIN" class="login_button">
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

        <!--   -***-***-***-   -***-***-***-   -***-***-***-   Banner   -->
        <div class="body_wrapper">

            <div class="caption">
                <img src="./Images/homepage-one-banner.jpg" class="home_banner">
                <div class="home_banner_overlay"></div>
            </div>
            <div class="home_banner_text">
                <h1 id="active">GENTE</h1>
                <h1 id="white_italics">Y CIUDAD</h1>
                <div id="white">
                    Buscamos marcar un punto de partida para la transformación de nuestras
                    <br> dificultades y diferencias en cimientos firmes que, desde las ciudades,
                    <br> requieren nuestros países latinoamericanos para convertirse en los mejores
                    <br> lugares para vivir, ya no solo por las bellezas y riquezas de nuestras tierras, sino
                    <br> por lo decisión de su gente de aportar lo mejor de si para mejorar su calidad de
                    <br> vida y asegurar los derechos de las futuras generaciones.
                </div>
            </div>

            <!--   -***-***-***-   -***-***-***-   -***-***-***-   Actual Body   -->
            <br>
            <br>
            <!--   -***-***-***-   -***-***-***-   -***-***-***-   Objectives   -->
            <div class="box_shadow" id="center">
                <h2>OBJETIVOS</h2>
                <div id="gray">
                    Realizar investigaciones, estudios y propuestas legislativas, relacionados con la gestión de los gobierno locales para el desarrollo sostenible.
                    <br> Formular proyectos para promover la participación ciudadana en iniciativas locales para la sostenibilidad.
                    <br> Desarrollar programas de capacitación en las áreas de participación ciudadana local y gobierno abierto para la sostenibilidad.
                    <br> Promover iniciativas de responsabilidad social y voluntariado, como espacios de participación ciudadana
                    <br> Implementar campañas de sensibilización para motivar en la audiencia el ejercicio activo de la ciudadanía como eje fundamental para la transformación de las ciudades.
                </div>
            </div>
            <br><br><br>

            <!--   -***-***-***-   -***-***-***-   -***-***-***-   Nosotros Valores   -->
            <div>
                <div class="center_align">
                    <h2 class="display_inline">Nuestros</h2>
                    <h2 class="orange_italic">  Valores</h2>
                </div>
                <br>

                <div class="nv_cointainer">
                     <div>
                          <h2><font class="orange_u">CA</font>LIDAD</h2>
                          Es la práctica de los integrantes de Gente & Ciudad que fomenta una mejora continua para alcanzar la misión de la organización.
                     </div>
                     <div>
                          <h2><font class="orange_u">CO</font>NFIANZA</h2>
                          Es la seguridad que Gente & Ciudad genera a través de sus actos.
                     </div>
                     <div>
                          <h2><font class="orange_u"> CO</font>HERENCIA</h2>
                          Todas las actuaciones de Gente & Ciudad estarán en consonancia con sus valores institucionales.
                     </div>
                     <div>
                          <h2><font class="orange_u">CO</font>MPROMISO</h2>
                          Los integrantes de Gente & Ciudad asumen como propio el cumplimiento de las obligaciones de la institución.
                     </div>
                     <div>
                          <h2><font class="orange_u">CO</font>OPERACIÓN</h2>
                          En Gente & Ciudad se promueve la suma de fuerzas para lograr objetivos compartidos.
                     </div>
                     <div>
                          <h2><font class="orange_u">TR</font>ANSPARENCIA</h2>
                          Es la cualidad que caracteriza y promueve Gente & Ciudad que permite conocer claramente nuestro planteamientos y acciones.
                     </div>
                </div>
                <!--end of last content division before the footer division with id paddit_more-->

                <!--end of last content division before the footer division with id paddit_more-->
            </div>

            <br>
            <br>
            <br>
            <!--   -***-***-***-   -***-***-***-   -***-***-***-   Registration   -->
            <div class="form_container">
                <div class="orange_container">
                    <button class="orange_button1"><img src="Images/icons/home_mic.png">
                        <br>18 FOROS</button>
                    <button class="orange_button2"><img src="Images/icons/home_group.png">
                        <br>50 + PASTICIPANTES</button>
                    <button class="orange_button3"><img src="./Images/Book.png">
                        <br>30 EVENTOS</button>
                    <button class="orange_button4"><img src="Images/icons/home_calendar.png">
                        <br>3 EVENTOS POR DIAS</button>
                </div>

                <form class="home_form" id="home_registration_form" method="post">
                    <div class="box02">
                        <div>
                            <h2 id="inline">Registrate con </h2>
                            <h2 class="orange_italic">Nosotros</h2>
                        </div>
                        <div>Para estas informado de nuestas actividades y eventos</div>
                        <br>

                        <input type="text" id="register_name" name="register_name" placeholder=" Nombre Completo" class="register_form" required>
                        <input type="email" id="register_email" name="register_email" placeholder=" Correo" class="register_form" required>
                        <br>
                        <input type="tel" id="register_tel" name="register_tel" placeholder=" Telefono" class="register_form">
                        <select id="input" name="register_city" class="register_form" required>
                            <option>Cuidad de Origen</option>
                            <option value="Arlington" id="black">Arlington</option>
                            <option value="Austin" id="black">Austin</option>
                            <option value="Dallas" id="black">Dallas</option>
                            <option value="Fort-Worth" id="black">Fort-Worth</option>
                            <option value="Houston" id="black">Houston</option>
                        </select>
                        <br>
                        <input type="password" name="register_password" placeholder=" Password" class="register_form" id="input" required>
                        <input type="submit" value="Registrar Ahora" class="home_register_button" name="register_form_btn">
                    </div>
                </form>
            </div>

            <!--   -***-***-***-   -***-***-***-   -***-***-***-   Paper   -->
            <div class="white">
                <br>
                <br>
                <div id="center">
                    <h2 id="inline">Nuestros Aliados </h2>
                    <h2 class="orange_italic">Estrategicos</h2>
                </div>
                <br>

                <div class="image_grid">
                    <img src="./Images/image3.jpg" class="image1">
                    <img src="./Images/i.jpg" class="image2">
                </div>
                <br>
                <br>
            </div>
            <br>
            <br>
            <br>

            <!--   -***-***-***-   -***-***-***-   -***-***-***-   Blog   -->

            <div id="center">
                <h2 id="inline">Nuestro </h2>
                <h2 class="orange_italic">Blog</h2>
                <div id="gray">
                    <br>Esta sección esta pensada para integrar a los ciudadanos y poder tener un feedback directo con nuestra comunidad.</div>
            </div>
            <br>

            <div class="card_grid">
                <div class="blog_card">
                    <div class="caption">
                        <img src="./Images/image1.jpg" class="image3">
                        <div class="date_icon" id="center">23
                            <br>Ago</div>
                        <br>
                        <br>
                    </div>

                    <div class="caption" id="padding2">¿Ciudadanos?
                        <br>
                    </div>
                    <br>
                    <div class="blog_internal_grid">
                        <font class="blog_details"><img class="blog_details" src="Images/icons/admin_icongray3.png">  Admin</font>
                        <font class="blog_details"><img class="blog_details" src="Images/icons/icon_heart.png">350</font>
                        <font class="blog_details"><img class="blog_details" src="Images/icons/forum_icon.png">30</font>
                    </div>
                </div>
                <div class="blog_card">
                    <div class="caption">
                        <img src="./Images/image2.png" class="image3">
                        <div class="date_icon" id="center">23
                            <br>Ago</div>
                        <br>
                        <br>
                    </div>

                    <div class="caption" id="padding2">Efecto espejo: Calidad de vida
                        <br>
                    </div>
                    <br>
                    <div class="blog_internal_grid">
                        <font class="blog_details"><img class="blog_details" src="Images/icons/admin_icongray3.png">  Admin</font>
                        <font class="blog_details"><img class="blog_details" src="Images/icons/icon_heart.png">350</font>
                        <font class="blog_details"><img class="blog_details" src="Images/icons/forum_icon.png">30</font>
                    </div>
                </div>
                <div class="blog_card">
                    <div class="caption">
                        <img src="./Images/Logotipo.png" class="image3">
                        <div class="date_icon" id="center">23
                            <br>Ago</div>
                        <br>
                        <br>
                    </div>

                    <div class="caption" id="padding2">Evolución ciudadana (opinión)
                        <br>
                    </div>
                    <br>
                    <div class="blog_internal_grid">
                        <font class="blog_details"><img class="blog_details" src="Images/icons/admin_icongray3.png">  Admin</font>
                        <font class="blog_details"><img class="blog_details" src="Images/icons/icon_heart.png">350</font>
                        <font class="blog_details"><img class="blog_details" src="Images/icons/forum_icon.png">30</font>
                    </div>
                </div>
            </div>
</div>

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

    </body>

    </html>
