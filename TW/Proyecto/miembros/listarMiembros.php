div id="pagina">
  <h1 id="titulo_pagina"><span class="texto_titulo">Listar miembros </span></h1>
  <div id="contenido" class="sec_interior">
    <div class="content_doku">
       <form name="formulario" method="POST" action="">
          <?php

            include('conexion.php');
            session_start();
            $email=$_SESSION["email"];
            $mysql0="SELECT * FROM miembros";
            $result=mysqli_query($conexion,$mysql0);

          ?>
            <table>
              <tr>
              <th>Campo</th>
              <th>campo</th>
              <th>campo</th>
              </tr>
              <?php
              while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                ?>
                <tr>
                  <td><?php echo $row['nombre'] ?></td>
                  <td><?php echo $row['primerApellido'] ?></td>
                  <td><?php echo $row['segundoApellido'] ?></td>
                  <td><input type="submit" onClick='' value="Ver" name='<?php echo $row['nombre'] ?>' /></input></td>
                  <?php
                    if($_POST[$row['nombre']]){
                     $_SESSION["id_miembro"]=$row['id_miembro'];

                        print("<script>window.location.assign('listarMiembroCompleto.php');</script>");
                    }

              }
                ?>
                </tr>
  </table>
</form>
</div>
</div>
</div>
