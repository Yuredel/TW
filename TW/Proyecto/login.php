<?php

session_start();
include 'conexion.php';
//incluir centinelas
$usuario=$_POST['usuario'];
$email=$_POST['email'];


$mysql="SELECT * FROM miembros WHERE email='$email'";

$result=mysqli_query($conexion,$mysql);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

            if($email==$row["email"]) {
              if($usuario==$row["nombre"]) {
                $_SESSION["email"]=$email;
              }else {
                    echo "<script>alert('nombre incorrecto');</script>";
                    print("<script>window.location.assign('../index.php');</script>");
                }
            } else {
                    echo "<script>alert('El mail no coincide');</script>";
                    print("<script>window.location.assign('../index.php');</script>");
            }

?>
