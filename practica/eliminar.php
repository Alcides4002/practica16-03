<?php

if($_SERVER["REQUEST_METHOD"]=="DELETE"){
    require_once 'conexion.php';

  
    $id = isset($_GET['id']) ? $_GET['id'] : '';

    
    if (!empty($id)) {

      
        $my_query = "DELETE FROM estudiante WHERE id = ?";
        $stmt = $mysql->prepare($my_query);

        
        $stmt->bind_param("i", $id);
        $resultado = $stmt->execute();

        if ($resultado == true) {
            echo 'Dato eliminado';
        } else {
            echo 'Error de eliminacion';
        }
    } else {
        echo 'Identificador de registro no proporcionado';
    }
}
else {
    echo 'ERROR DESCONOCIDO';
}



?>