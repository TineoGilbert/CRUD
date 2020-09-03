<?php

include('conexion.php');

$id = $conexion->real_escape_string(htmlentities($_POST['id']));

$sql = "SELECT id, Nombre, Apellido, Email, Telefono
         FROM Personas WHERE id=?";

         $query = $conexion->prepare($sql);

         $query->bind_param('i',$id);
         $query->execute();
         $datos = $query->get_result()->fetch_assoc();

         echo json_encode($datos);

         /*Gilbert E. Tineo 2020*/