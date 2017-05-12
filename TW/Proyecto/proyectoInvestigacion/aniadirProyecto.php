<?php
  include('conexion.php');
  session_start();
  $email=$_SESSION["email"];

  $codigo=$_POST['codigo'];
  $titulo=$_POST['titulo'];
  $descrpcion=$_POST['descrpcion'];
  $fechaInicio=$_POST['fechaInicio'];
  $fechaFin=$_POST['fechaFin'];
  $entidadesColaboradoras=$_POST['entidadesColaboradoras'];
  $cuantia=$_POST['cuantia'];
  $url=$_POST['url'];

  $mysql="SELECT codigo FROM  WHERE codigo='$codigo'";
  $result=mysqli_query($conexion,$mysql);
  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
//comprobar que los campos no estan vacios validaciones
  if($row==0){
   $mysql1="INSERT INTO proyectosInvestigacion VALUES ('default','$codigo','$titulo','$descrpcion','$fechaInicio','$fechaFin','$entidadesColaboradoras','$cuantia','$url')";

  $result1=mysqli_query($conexion,$mysql1);
       echo "<script>alert('Proyecto Creado');</script>";
       print("<script>window.location.assign('informacionProyecto.php');</script>");
  }
  else //mensaje de error

?>
