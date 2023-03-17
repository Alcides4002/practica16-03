<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'conexion.php';
    $id = $_POST["id"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $carreras = $_POST["salario"];
    $anios = $_POST["cargo"];
    $my_query = "insert into empleado(id, nombres, apellidos, carreras, anios ) 
    values('".$id."', '".$nombres."', '".$apellidos."', '".$carreras."','".$anios."')";
    $result = $mysql -> query($my_query);
    if($result == true){
        echo "Registro guardado satisfactoriamente...";
    }else{
        echo "Error al guardar registro...";
    }
}else{
    echo"Error desconocido";
}
?>