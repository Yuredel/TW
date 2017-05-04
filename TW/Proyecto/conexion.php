<?php
$conexion = mysql_connect("127.0.0.1", "root", "admin", "proyecto");
   if (!$conexion) {
       die("Conexion Fallida: " . mysqli_connect_error());
   }
   return $conexion;
   mysqli_close($conexion);

?>
