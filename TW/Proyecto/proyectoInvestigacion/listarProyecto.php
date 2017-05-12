<div id="pagina">
  <h1 id="titulo_pagina"><span class="texto_titulo">Listar Proyectos </span></h1>
  <div id="contenido" class="sec_interior">
    <div class="content_doku">
       <form name="formulario" method="POST" action="">
          <?php

            include('conexion.php');
            session_start();
            $email=$_SESSION["email"];
            $mysql0="SELECT * FROM proyectosInvestigacion";
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
                  <td><?php echo $row['titulo'] ?></td>
                  <td><?php echo $row['fechaInicio'] ?></td>
                  <td><?php echo $row['fechaFin'] ?></td>
                  <td><input type="submit" onClick='' value="Ver" name='<?php echo $row['titulo'] ?>' /></input></td>

                  <?php
                    if($_POST[$row['titulo']]){
                      $_SESSION["id_proyecto"]=$row['id_mproyecto'];

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
