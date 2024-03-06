<?php

//array ada 3:
//1. default
//2. associative array = pasangan key & value
//3. multidimentional array



//ini default
    $fruits = ["Mangga", "Berry", "Kiwi"];

    print_r($fruits);
    echo '<br>';
    var_dump($fruits);
    echo '<br>';

    foreach ($fruits as $fruit) {
        echo $fruit;
        echo '<br>';
    }

//ini associative array
    $dinos = [
        "dinoName" => "Rex",
        "dinoAge" => 500,
        "isMarried" => "false"
    ];

    echo $dinos ["dinoName"];
    echo '<br>';

    foreach ($dinos as $dino) {
        echo $dino;
        echo '<br>';
    }

//ini multidimentional array
    $dinos = [
        [
            "dinoName" => "Rex",
            "dinoAge" => 500
        ],

        [
            "dinoName" => "Tricera",
            "dinoAge" => 800
        ],

        [
            "dinoName" => "Bracio",
            "dinoAge" => 250
        ]
    ];

    var_dump($dinos);
    echo '<br>';

    echo $dinos[0]["dinoName"];
    echo '<br>';

    foreach ($dinos as $dino) {
        echo $dino["dinoName"];
        echo $dino["dinoAge"];
        echo '<br>';
    }
?>