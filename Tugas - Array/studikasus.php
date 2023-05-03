<?php
    $array = [
        [
            "Nama" => "Pelita",
        ],
        [
            "Nama" => "Najmina",
        ],
        [
            "Nama" => "Fahmi",
        ],
        [
            "Nama" => "Anita",
        ],
        [
            "Nama" => "Nasa",
        ],
    ];

    foreach ($array as $key => $value) {
        echo "<br>";
        echo "Nama : ".$value["Nama"];
    }
?>
