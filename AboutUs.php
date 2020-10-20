<!--Shubham Phape || UTA ID- 1001773736-->
<!--Ajinkya Salvi || UTA ID- 1001773996 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
     <?php include 'footer_contactus.php';?>
    <title>Nosotros | About Us</title>
    <link rel="stylesheet" href="./ciudad.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="./js/footer_contactus.js"></script>
     <script type="./js/login_form_validation.js"></script>
</head>
<body>
    <div id="wrapper">
        <!--Navigation bar   header-->
        <div class="bg_logo_div">
             <img id="logo_image" src="Images/i.jpg" ALT="Ciudad" ALIGN=CENTER>

             <nav class="nav_header">
                  <ul>
                  <li><a class="nav_items" href="Home.php">Inicio </a></li>
                  <li>/</li>
                  <li><a class="nav_items" href="AboutUs.php"id="active"> Nosotros </a></li>
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
                    <h1 class="banner_text">NOSOTROS</h1>
                    <h5 class="banner_text">INICIO > NOSOTROS</h5>

                </div>
            </div>
            <!--Banner Ends here-->
            <!--HEADER ends here-->
        </header>
        <!--div for wrapping the whole content-->
        <div class="content_wrap">
            <!--displaying the content through cards-->
            <div class="aboutus_vm">
                 <div>
                        <h2 class="display_inline"><font class="orange_u">Nu</font>estra</h2>
                        <h2 class="orange_italic">  MISIÓN</h2>
                        <p><br>Somos una Corporación no gubernamental en Estados Unidos, sin fines de lucro, que tiene el propósito de contribuir con el Desarrollo Sostenible de las ciudades, a través de investigaciones, asesorías, formulación de Proyectos, planes de formación, iniciativas de responsabilidad social y voluntariado.</p>
                   </div>
                <div>
                     <h2 class="display_inline"><font class="orange_u">Nu</font>esta</h2>
                        <h2 class="orange_italic">  VISIÓN</h2>
                        <p>
                            <br>Ser reconocida como un instrumento facilitador para promover el Desarrollo Sustentable de la colectividad. Nuestra filosofía de trabajo contempla la búsqueda concertada de soluciones de distintos actores sociales con la participación de la ciudadanía.</p>
                       </div></div>
                <!-- Rows End here-->
            </div>
            <!--new Row starts here--><div class="aboutus_c">
            <div class="aboutus_row" id="padd_it">
                <!--column starts here-->
                <div class="commentbox_column2">
                    <div class="aboutus_card2">
                        <p>
                            Asesorías a los políticos y gobernantes dispuestos a impulsar la sostenibilidad dispuestos a llevar adelante una gestión al servicio de su ciudadanía desde el punto de vista de la gobernanza y el gobierno confiable basado en la calidad a partir del modelo de gestión de gobierno sostenible local de los estándares de las normas ISO para gobiernos.
                            <footer class="comment_box_foot">QUÉ BRINDAMOS?</footer>
                        </p>
                    </div>
                    <img src="./Images/About Us.png" class="aboutus_img">
                </div>
                <!-- new column starts here-->
                <div class="commentbox_column2">
                    <div class="aboutus_card2">
                        <p>Proyectos innovadores en función de generar beneficios para la ciudad a partir de su gente, a partir de la participación ciudadana organizada y efectiva. Vivir en Ciudades dignas al servicio de las necesidades reales de la ciudadanía es posible, en “Gente y Ciudad” trabajamos para convertir los sueños colectivos en realidad.
                            <footer class="comment_box_foot">QUÉ DESARROLLAMOS?</footer>
                        </p>
                    </div>
                    <img src="./Images/About Us.png" class="aboutus_img">
                </div>
                <!--new column starts here-->
                <div class="commentbox_column2">
                    <div class="aboutus_card2">
                        <p>Para sumar a todo aquel dispuesto a brindar su mejor aporte para formar ciudadanos y comunicar cómo lograr esas ciudades sostenibles al servicio de la ciudadanía. Nos organizamos para poner en práctica todas las metodologías que hacen posible la sostenibilidad local, partimos de la base, desde la gente, para convertirla en ciudadano a partir de la formación y la comunicación estratégica, la sostenibilidad es posible si hay participación ciudadana y hay participación ciudadana si existen ciudadanos.
                            <footer class="comment_box_foot">PARA QUÉ TRABAJAMOS?</footer>
                        </p>
                    </div>
                    <img src="./Images/About Us.png" class="aboutus_img">
                </div>
                <!-- Rows End here-->
           </div></div><br><br><br><br><br><br>
            <!--nuestros values start here-->
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
            <!--End of content wrap class-->
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
