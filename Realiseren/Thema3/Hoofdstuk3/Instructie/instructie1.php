<?php

    //Rekenen in PHP

    //Basis: (Optellen, aftrekken, keer, delen door)
    $sum1 = 16 + 34;
    $substract1 = 34 - 16;
    $multiply1 = 16 * 34;
    $division1 = 34 / 16;

    //machten
    $powers1 = 4 ** 4;


    //Berekent hoevaak je een waarde tegenkomt in een getal en hoeveel je overhoudt.
    $modulo1 = 18 % 5;

    $modulo = 34 % 5;

    //Datatypes:
    $string1 = "Mijn vader zei altijd: \"Eerst denken dan doen!\" ";
    $string2 = "<a href=\"http://nu.nl\">Klik op mij!</a>";
    echo $string1;

    //Number naar Integer
    $int1 = 34;
    $decimal1 = 5.5;
    $bool1 = true; //
    $array1 = ["Coca-cola", "Fanta", "Red Bull", "Sprite", "Ginger Ale", "Appelsap", "Dr Pepper", "McBanan", "Cornetto", "Sinasappelsap"];
    echo count($array1);

    // Door een array loopen
    echo "<ol>";
        $listAmount = count($array1);
        $index = 0;
        while($index < $listAmount)
        {
            echo "<li>" . $array1[$index] . "</li>";
            $index++;
        }

    echo "</ol>";
?>