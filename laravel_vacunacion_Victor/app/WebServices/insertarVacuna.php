<?php
    $datos = ['nombre' => "Soberana (la vacuna cubana)"];

    $URL = "http://localhost/api/vacunas/crear";
    $curl = curl_init($URL);

    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, $datos);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $respuesta_curl = curl_exec($curl);
    curl_close($curl);
    echo $respuesta_curl;
?>