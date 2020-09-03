<?php
         
     include("conexion.php");
   // $conexion=$conexion();
         
    $datos=array(
        $conexion->real_escape_string(htmlentities($_POST['Nombre'])),
        $conexion->real_escape_string(htmlentities($_POST['Apellido'])),
        $conexion->real_escape_string(htmlentities($_POST['Email'])),
        $conexion->real_escape_string(htmlentities($_POST['Telefono']))
    
    
    );

    $sql ="INSERT INTO Personas(Nombre,Apellido,Email,Telefono)
            VALUES(?,?,?,?)";

    $query = $conexion->prepare($sql);
    $query->bind_param('ssss',$datos[0],
                              $datos[1],
                              $datos[2],
                              $datos[3]);

   echo $query->execute();

   $query->close();

