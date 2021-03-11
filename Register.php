<?php
    $con = mysqli_connect("localhost", "root", "", "medicos_al_servicio");
    
    $nombres = $_POST["nombres"];
    $apellidopaterno = $_POST["apellidopaterno"];
    $apellidomaterno = $_POST["apellidomaterno"];
    $contraseña = $_POST["contraseña"];
    $usuario = $_POST["usuario"];
    $fechanac = $_POST["fechanac"];
    $numcelular = $_POST["numcelular"];

    $statement = mysqli_prepare($con, "INSERT INTO usuarios (nombres, apellidopaterno, apellidomaterno, contraseña, usuario, fechanac, numcelular) VALUES (?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "sssssss", $nombres, $apellidopaterno, $apellidomaterno, $contraseña, $usuario, $fechanac, $numcelular);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>