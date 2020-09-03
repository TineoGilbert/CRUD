<?php

include('conexion.php');

$sql = "SELECT * FROM Personas";
$resultado = $conexion->query($sql);

$tabla = "";

while ($datos = $resultado->fetch_assoc()) {
   $tabla = $tabla . '<tr>
    
                         <td>' . $datos['id'] . '</td>
                         <td>' . $datos['Nombre'] . '</td>
                         <td>' . $datos['Apellido'] . '</td>
                         <td>' . $datos['Email'] . '</td>
                         <td>' . $datos['Telefono'] . '</td>
                         <td>
                            <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#Actualizar" onclick="agregarDatosActualizar(' . $datos['id'] . ')">
                            <i class="fas fa-edit"></i>
                            </span>
                         </td>

                         <td>
                         <span class="btn btn-danger btn-sm" onclick="eliminarDatos(' . $datos['id'] . ')">
                         <i class="fas fa-trash-alt"></i>
                         </span>
                         </td>
                         
                      </tr>';
}

$conexion->close();

echo '<table class="table table-stripped">
               <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                
                <tbody>' . $tabla . '
                
                </tbody>';
