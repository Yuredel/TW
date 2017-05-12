<div id="pagina">
  <h1 id="titulo_pagina"><span class="texto_titulo">Datos completos de un miembro </span></h1>
  <div id="contenido" class="sec_interior">
    <div class="content_doku">
       <form name="formulario" method="POST" action="">

          <?php

            include('conexion.php');
            session_start();
            $id_miembro=$_SESSION["id_miembro"];
            $mysql="SELECT * FROM miembros WHERE id_miembro='$id_miembro'";
            $result=mysqli_query($conexion,$mysql);

          ?>


          <table>
              <tr>
                <th>campo1</th>
                <th>campo2</th>
                <th>campo3</th>
                <th>campo4</th>
                <th>campo5</th>
                <th>campo6</th>
                <th>campo7</th>
                <th>campo8</th>
                <th>campo9</th>
                <th>campo10</th>
                <th>campo11</th>
                <th>campo12</th>
                <th>campo13</th>
              </tr>
              <?php
              while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                ?>
              <tr>
                <td><?php echo $row['nombre'] ?></td>
                <td><?php echo $row['primerApellido'] ?></td>
                <td><?php echo $row['segundoApellido'] ?></td>
                <td><?php echo $row['categoria'] ?></td>
                <td><?php echo $row['director'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['telefono'] ?></td>
                <td><?php echo $row['url'] ?></td>
                <td><?php echo $row['departamento'] ?></td>
                <td><?php echo $row['centro'] ?></td>
                <td><?php echo $row['direccion'] ?></td>
                <td><?php echo $row['foto'] ?></td>
                <td><?php echo $row['activo'] ?></td>
              }
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
