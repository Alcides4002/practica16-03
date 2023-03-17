<?php

require_once 'conexion.php';

$data = json_decode(file_get_contents("php://input"), true);


$id = $_GET['id'];

$sql = "UPDATE estudiante SET id='" . $data["id"] . "', nombres='" . $data["nombres"] . "', apellidos='" . $data["apellidos"] . "', carreras='" . $data["carreras"] . "', anios='" . $data["anios"] . "' WHERE id=" . $id;
$resultado=$mysql->query($sql);

if ($resultado==true) {
    echo "Datos actualizados correctamente.";
} else {
    echo "Error al actualizar los datos: ";
}




?>