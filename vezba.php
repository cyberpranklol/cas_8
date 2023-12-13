<?php

    $automobili = [
        "Zastava" => [
            "model" => "Yugo 55",
            "godiste" => 1995
        ],

        "Renault" => [
            "model" => "Megane RS",
            "godiste" => 2014
        ],

        "Toyota" => [
            "model" => "Rav4",
            "godiste" => 2021
        ],
    ];

// Auto mladji od 5 godina, "Nov auto"
// Auto stariji od 5, mladji od 11, "Noviji auto" 5 - 10
// Stariji od 10, mladji od 20, "Star auto"
// preko 20 godina, "oldtimer"
// Ispisati recenicu npr: "Yugo 55 je oldtimer"

        $trenutnaGodina = date('Y');

        foreach ($automobili as $marka => $auto){
            $godiste = $auto["godiste"];
            $starostAutomobila = $trenutnaGodina - $godiste;
            $status = "";

            if($starostAutomobila <= 5){
                $status = "nov auto";
            }
            else if($starostAutomobila > 5 &&  $starostAutomobila <= 10){
                $status = "noviji auto";   
            }
            else if($starostAutomobila > 10 && $starostAutomobila <= 20){
                $status = "stariji auto" ; 
            }
            else {
                $status = "oldtimer";
            }


            echo $auto["model"]. "je $status";
        }
        