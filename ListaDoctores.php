<?php
    $con = mysqli_connect("localhost", "root", "", "medicos_al_servicio");

    $especialidad = $_POST["especialidad"];
    $distrito = $_POST["distrito"];
    $modalidad = $_POST["modalidad"];

    $sql = "SELECT * FROM medicos WHERE especialidad = \"{$especialidad}\" AND distrito = \"{$distrito}\" AND modalidad = \"{$modalidad}\" ORDER BY precio DESC";

    $result = mysqli_query($con, $sql);
    $response = array();

    while ( $row = mysqli_fetch_assoc($result) ) {
        $response[] = $row;
    }
    
    echo json_encode($response, JSON_UNESCAPED_UNICODE);
?>