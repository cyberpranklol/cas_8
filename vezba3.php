<?php
//      strtolower("Toma") itd
    $imena = [
        'Toma',
        'Petar',
        'Vlada'
    ];

    $imena = array_map("strtolower", $imena);

    var_dump($imena);
