<?php
    $numeros = [1,2,3,4,5,6];

    for($i = 0; $i < count($numeros); $i++){
        echo $numeros[$i] . "<br>";
    }

    $carro = [
        "marca" => "Chevrolet",
        "modelo" => "Onix",
        "quilometragem" => 7500,
        "anoFabricacao" => 2012
    ];

    $carro2 = [
        "marca" => "Fiat",
        "modelo" => "Uno",
        "quilometragem" => 17500,
        "anoFabricacao" => 2002
    ];

    foreach ($carro as $key => $value) {
        echo "$key => $value <br>";
    }

    $numeros = [1,2,3,4,5,6];
    echo "<h3>Array \$numeros = [1,2,3,4,5,6]</h3>";
    
    echo "<h3>Foreach com \$numeros as \$key => \$value</h3>";
    foreach ($numeros as $key => $value) {
        echo "$key => $value <br>";
    }
    echo "<h3>Foreach com \$numeros as \$numero</h3>";
    foreach ($numeros as $numero) {
        echo "$numero <br>";
    }

    echo "<h3>Foreach com \$carro2 as \$value</h3>";
    foreach ($carro2 as $value) {
        echo "$value <br>";
    }

?>