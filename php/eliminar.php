<?php

include('conexion.php');

$id = $conexion->real_escape_string(htmlentities($_POST['id']));

$sql = "DELETE FROM Personas WHERE id = ?";
$query = $conexion->prepare($sql);
$query->bind_param("i", $id);
echo $query->execute();
$query->close();

/*Gilbert E. Tineo 2020*/