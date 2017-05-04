<?php

session_start();
include 'conexion.php';

$usuario=$_POST['nombre'];
$email=$_POST['email'];


$mysql="SELECT * FROM miembros WHERE email='$email'";

$result=mysqli_query($conexion,$mysql);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

           if($email==$row["email"]){
               if($usuario==$row["nombre"]){
                   if($row>0){
                       $_SESSION["email"]=$email;
                      }else {
                   echo "<script>alert('Clave incorrecta');</script>";
                   print("<script>window.location.assign('../index.php');</script>");
                    }
               } else {
                   echo "<script>alert('El usuario no existe');</script>";
                   print("<script>window.location.assign('../index.php');</script>");
               }
           }
?>
