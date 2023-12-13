<?php

//Napisati petlju koja ce pretvoriti imena u mala slova

    $imena = [
        'Toma',
        'Petar',
        'Vlada'
    ];

    // & - da se taj element u array-u moze promeniti
        foreach ($imena as &$ime){
            $ime = strtolower($ime);
        }
        
    var_dump($imena);
