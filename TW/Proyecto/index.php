<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
require("conexion.php");
?>


<!DOCTYPE html>
<link rel="stylesheet" href="index.css" >
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
<head>
 <title>Práctica2</title>
</head>
<header>
 <div class="superCabecera">
  <div class="cabeceraLogo">
   <img src="Imagenes/emiliosantiago.png" class="logo"  width= "200 %"/>
  </div>
  <div class="cabeceraDrc">
   <form class="widget_loginform" action="login.php" method="post">
       <div id="login_form_widget" class="mod-buttons fieldset login_form login_form_widget">
          <label id="login_widget" for="ilogin_widget" class="login login_widget">
      <span>Usuario</span>
      <input name="usuario" id="usuario" value="Login" onfocus="javascript:if(this.value='Login') this.value='';return true;" type="text"; style="padding-right: 10px;" />
          </label>

          <label id="password_widget" for="ipassword_widget" class="password password_widget"  style="padding-right: 10px;">
      <span>CorreoElectrónico</span>
      <input name="email" id="email" type="email";/>
          </label>

          <label id="enviar_login_widget" for="submit_login_widget" class="enviar_login enviar_login_widget" >
      <input src="" alt="enviar datos de identificación" name="submit" id="submit_login_widget" class="image-enviar" type="submit" value="Ingresar" style="border-image: transparent;
    border-radius: 15px 15px 15px 15px; padding-left: 15px; padding-right: 15px;"/>
          </label>
         <br>
          <div class="olvido" ">
           <a id="forgot" href="index.html">¿Olvidó su contraseña?</a>
          </div>
          <span id="login_error_widget"> </span>
       </div>
   </form>
  </div>
 </div>
</header>

<article>
 <div class="contenido">
  <img src="Imagenes/emiliosantiago.png" class="logo"  />

 </div>
  <div class="menuLateral">
   <nav>
     <ul>
       <li><a href="index.html">inicio</a></li>
       <li><a href="listarMiembros.php">Conocer a los miembros<br> del Grupo</a></li>
       <li><a href="publicaciones.html">Publicaciones</a></li>
       <li id="ListaProyecto" ><a href="listarProyecto.php">Ver Proyectos disponibles</a></li>
       <li><a href="sobreNosotros.html">Sobre Nosotros</a></li>
     </ul>
   </nav>
  </div>


</article>






<footer>
 <nav>
  <ul>
    <li><a href="copy.html">Copyrigth</a></li>
    <li><a href="autoria.html">Autoria</a></li>
    <li><a href="sobreNosotros.html">sobrenosotros</a></li>
  </ul>
</nav>
</footer>
</html>
