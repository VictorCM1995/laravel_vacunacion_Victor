<?php

$idPaciente = 1;
$URL = "http://localhost/api/vacunas/$idPaciente";

$curl = curl_init($URL);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$respuesta_curl = curl_exec($curl);
curl_close($curl);

$vacunas = json_decode($respuesta_curl);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacunas del Paciente <?=$idPaciente?></title>
</head>
<body>
    <h1>Vacunas posibles para paciente con ID = <?=$idPaciente?></h1>
    <ul>
        <?php
            foreach($vacunas as $vacuna)
            {
                echo "<li>$vacuna->nombre</li>";
            }
        ?>
    </ul>
</body>
</html>