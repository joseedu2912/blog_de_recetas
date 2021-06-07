
<?php

$inc = include("con_db.php");
if($inc) {
	$consulta = "SELECT * FROM recetas WHERE paises_id = 1 ";
	$resultado = mysqli_query($conex,$consulta);
	if($resultado){

		while($row = $resultado->fetch_array()){
         $id_recetas = $row['id_recetas'];
         $paises_id = $row['paises_id'];
			$nombre_receta = $row['nombre_receta'];
			$ingredientes = $row['ingredientes'];
			$procedimiento = $row['procedimiento'];

			?>


			<div>
				<h2 class="papas"><?php echo $nombre_receta; ?></h2><br>
             <div>
             <p>
             	<?php
               if($id_recetas == 1){


             	?>
             	<img class="i"  loading="lazy" src="Imagen_pais/argentina/51-image_web.jpg" alt="imagen blog">
             	<?php 
             }
?>
             	<?php
               if($id_recetas == 2){


             	?>
             	<img class="i" loading="lazy" src="Imagen_pais/argentina/01736283-7591-40B3-82B2-1F58C2E38E4C-1200x700.jpeg" alt="imagen blog">
             	<?php 
             }
?>
             	<?php
               if($id_recetas == 3){


             	?>
             	<img class="i" loading="lazy" src="Imagen_pais/argentina/Leche-nevada-merengue.jpg" alt="imagen blog">
             	<?php 
             }
?>
             	<?php
               if($id_recetas == 4){


             	?>
             	<img class="i" loading="lazy" src="Imagen_pais/argentina/77-image_web.jpg" alt="imagen blog">
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

