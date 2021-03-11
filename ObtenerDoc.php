<?php
    $con = mysqli_connect("localhost", "root", "", "medicos_al_servicio");

    $codigo = $_POST["codigo"];

    $sql = "SELECT * FROM medicos WHERE codigo = \"{$codigo}\"";
    $response = array();
    $result = mysqli_query($con, $sql);

    while ( $row = mysqli_fetch_assoc($result) ) {
        $response[] = $row;
    }

    echo json_encode($response, JSON_UNESCAPED_UNICODE);
?>