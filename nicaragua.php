<?php

$inc = include("con_db.php");
if($inc) {
	$consulta = "SELECT * FROM recetas WHERE paises_id = 6 ";
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
               if($id_recetas == 21){


             	?>
             	<img class="i"  loading="lazy" src="Imagen_pais/nicaragua/1.jpg" alt="imagen blog">
             	<?php 
             }
?>
             	<?php
               if($id_recetas == 22){


             	?>
             	<img class="i" loading="lazy" src="Imagen_pais/nicaragua/2.jpg" alt="imagen blog">
             	<?php 
             }
?>
             	<?php
               if($id_recetas == 23){


             	?>
             	<img class="i" loading="lazy" src="Imagen_pais/nicaragua/3.jpg" alt="imagen blog">
             	<?php 
             }
?>
             	<?php
               if($id_recetas == 24){


             	?>
             	<img class="i" loading="lazy" src="Imagen_pais/nicaragua/4.jpg" alt="imagen blog">
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

