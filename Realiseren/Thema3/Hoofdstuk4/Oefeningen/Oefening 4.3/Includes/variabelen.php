<?php
    $dateStart = "01-01-1970 00:00:00";
    $seconds = 0;

    $date = date_create("$dateStart");
    $currentDate = date_create();

    $timeBetween = $currentDate->getTimestamp() - $date->getTimestamp();

    echo "<p>Taak 2:</p>";
    echo "De tijd tussen 01-01-1970 00:00:00 = " . $timeBetween . " seconden.";

    echo "<p>Taak 4:</p>";


    function CalculateInterest ($price, $saved)
    {
        echo "<p>U spaart voor een nieuwe auto. De auto kost &euro;" . $price . ". Op dit moment heb je al &euro;" . $saved . " gespaard. Iedere maand ontvangt u 6% rente omdat uw geld op de bank staat. Op deze website kunt u uitrekenen hoelang u nog moet sparen om de auto te kunnen betalen.</p>";

        $counter = 0;
        while ($saved <= $price)
        {
            $counter ++;
            $saved = $saved * 1.06;

            echo "<p>Maand " . $counter . ": U heeft: &euro;" . number_format($saved, 2, ",", ".") . " gespaard.</p>";

        }
        $left = $saved - $price;
        echo "<p>U heeft de auto na ". $counter . " maanden aangeschaft. U heeft nu nog &euro;" . number_format($left, 2, ",", ".") . " over.</p>";
    }

    echo "<br>";

    $increase = true;
    for($i = 1; $i >= 1;)
    {
        // Tekenen van de pyramide
        for($count = 1;  $count <= $i; $count++)
        {
        echo $count;
        }
        echo "<br>";

        if($increase == true)
        {
            $i++;
        }
        else
        {
            $i--;
        }

        //$increase bepalen (omslagpunt)
        if($i == 9)
        {
            $increase = false;
        }
    }
?>
