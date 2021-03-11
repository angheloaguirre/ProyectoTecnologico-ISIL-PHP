<?php
    $con = mysqli_connect("localhost", "root", "", "medicos_al_servicio");
    
    $usuario = $_POST["usuario"];
    
    $statement = mysqli_prepare($con, "SELECT * FROM usuarios WHERE usuario = ?");
    mysqli_stmt_bind_param($statement, "s", $usuario);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $ID, $nombres, $apellidopaterno, $apellidomaterno, $contraseña, $usuario, $fechanac, $numcelular);
    
    $response = array();
    $response["success"] = false;  
    
    while(mysqli_stmt_fetch($statement)){
        $response["success"] = true;  
        $response["nombres"] = $nombres;
        $response["apellidopaterno"] = $apellidopaterno;
        $response["apellidomaterno"] = $apellidomaterno;
        $response["contraseña"] = $contraseña;
        $response["usuario"] = $usuario;
        $response["fechanac"] = $fechanac;
        $response["numcelular"] = $numcelular;
    }
    
    echo json_encode($response);
?>