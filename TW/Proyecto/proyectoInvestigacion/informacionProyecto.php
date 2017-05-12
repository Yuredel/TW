<div id="pagina">
  <h1 id="titulo_pagina"><span class="texto_titulo">Infomración sobre el Proyecto </span></h1>
  <div id="contenido" class="sec_interior">
    <div class="content_doku">
       <form name="formulario" method="POST" action="">
          <?php

            include('conexion.php');
            session_start();
            $id_proyecto=$_SESSION["id_proyecto"];
            $mysql0="SELECT * FROM proyectosInvestigacion WHERE id_proyecto='$id_proyecto'";
            $result=mysqli_query($conexion,$mysql0);

          ?>
            <table>
              <tr>
              <th>Campo</th>
              <th>campo</th>
              <th>campo</th>
              <th>campo</th>
              <th>campo</th>
              <th>campo</th>
              <th>campo</th>
              <th>campo</th>
              <th>campo</th>
              <th>campo</th>
              <th>campo</th>
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
                  <td><?php echo $row['codigo'] ?></td>
                  <td><?php echo $row['descrpcion'] ?></td>
                  <td><?php echo $row['entidadesColaboradoras'] ?></td>
                  <td><?php echo $row['url'] ?></td>
                  <td><?php echo $row['cuantia'] ?></td>


                  }

                </tr>
  </table>
</form>
</div>
</div>
</div>
