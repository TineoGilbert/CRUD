<?php
         
     include("conexion.php");
   // $conexion=$conexion();
         
    $datos=array(
        $conexion->real_escape_string(htmlentities($_POST['Nombreu'])),
        $conexion->real_escape_string(htmlentities($_POST['Apellidou'])),
        $conexion->real_escape_string(htmlentities($_POST['Emailu'])),
        $conexion->real_escape_string(htmlentities($_POST['Telefonou'])),
        $conexion->real_escape_string(htmlentities($_POST['idu']))
    
    
    );


$sql = "UPDATE Personas SET Nombre=?,
                            Apellido=?,
                            Email=?,
                            Telefono=?
        WHERE id=?";

$query = $conexion->prepare($sql);

$query->bind_param('ssssi',$datos[0],$datos[1],$datos[2],$datos[3],$datos[4]);

echo $query->execute();
$query->close();

/*Gilbert E. Tineo 2020*/