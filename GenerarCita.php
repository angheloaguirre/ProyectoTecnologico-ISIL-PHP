<?php
    $con = mysqli_connect("localhost", "root", "", "medicos_al_servicio");
    
    $fecha = $_POST["fecha"];
    $codigo = $_POST["codigo"];

    $sql = "UPDATE medicos SET citas = \"{$fecha}\" WHERE codigo = \"{$codigo}\"";
    $response = array();
    $result = mysqli_query($con, $sql);
    
    echo json_encode($response, JSON_UNESCAPED_UNICODE);
?>