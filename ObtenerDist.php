<?php
    $con = mysqli_connect("localhost", "root", "", "medicos_al_servicio");

    $especialidad = $_POST["especialidad"];
    $modalidad = $_POST["modalidad"];
    
    $sql = "SELECT DISTINCT distrito FROM medicos WHERE especialidad = \"{$especialidad}\" AND modalidad = \"{$modalidad}\"";

    $result = mysqli_query($con, $sql);
    $response = array();

    while ( $row = mysqli_fetch_assoc($result) ) {
        $response[] = $row;
    }
    
    echo json_encode($response, JSON_UNESCAPED_UNICODE);
?>