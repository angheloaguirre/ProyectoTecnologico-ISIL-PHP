<?php
    $con = mysqli_connect("localhost", "root", "", "medicos_al_servicio");

    $especialidad = $_POST["especialidad"];

    $sql = "SELECT DISTINCT modalidad FROM medicos WHERE especialidad = \"{$especialidad}\"";
    
    $response = array();
    $result = mysqli_query($con, $sql);

    while ( $row = mysqli_fetch_assoc($result) ) {
        $response[] = $row;
    }

    echo json_encode($response, JSON_UNESCAPED_UNICODE);
?>