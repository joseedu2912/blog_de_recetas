<?php

$inc = include("con_db.php");
if($inc) {
  $consulta = "SELECT * FROM recetas WHERE paises_id = 20 ";
  $resultado = mysqli_query($conex,$consulta);
  if($resultado){

    while($row = $resultado->fetch_array()){
         $id_recetas = $row['id_recetas'];
         $paises_id = $row['paises_id'];
      $nombre_receta = $row['nombre_receta'];
      $ingredientes = $row['ingredientes'];
      $procedimiento = $row['procedimiento'];

      ?>


      <div class="lol">
        <h2 class="papas"><?php echo $nombre_receta; ?></h2><br>
             <div>
             <p>
              <?php
               if($id_recetas == 77){


              ?>
              <img class="i"  loading="lazy" src="imagenes/puertorrico_id21/puertorrico1.jpg" alt="imagen blog">
              <?php 
             }
?>
              <?php
               if($id_recetas == 78){


              ?>
              <img class="i" loading="lazy" src="imagenes/puertorrico_id21/puertorrico2.jpg" alt="imagen blog">
              <?php 
             }
?>
              <?php
               if($id_recetas == 79){


              ?>
              <img class="i" loading="lazy" src="imagenes/puertorrico_id21/puertorrico3.jpg" alt="imagen blog">
              <?php 
             }
?>
              <?php
               if($id_recetas == 80){


              ?>
              <img class="i" loading="lazy" src="imagenes/puertorrico_id21/puertorrico4.jpg" alt="imagen blog">
              <?php 
             }
?>
<br><br>
               <b>RECETAS ID: </b> <?php echo $id_recetas; ?><br>
                <b>PAIS ID: </b> <?php echo $paises_id; ?><br>
                <b>INGREDIENTES: </b> <?php echo $ingredientes; ?><br>
                <b>PROCEDIMIENTO: </b> <?php echo $procedimiento; ?><br>

              </p>
            </div>
      </div>
      <?php



    }
}
}
?>