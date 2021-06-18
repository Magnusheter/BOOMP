<!-- Incluir jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Definir la función de puntuación -->
<script type="text/javascript">
function ratestar($id, $puntuacion){
	$.ajax({
		type: 'GET',
		url: 'votaciones.php',
		data: 'votarElemento='+$id+'&puntuacion='+$puntuacion,
		success: function(data) {
			alert(data);
			location.reload();
		}
	});
}
</script>

<?php
session_start();
include 'votaciones.php';

    $id=$_POST['id'];
    $nom=$_POST['boot'];
    $puntuacion=$_POST['estrellas'];
    $V = new Votacion();
    $V->insertar_puntuacion($id,$puntuacion);
?>

