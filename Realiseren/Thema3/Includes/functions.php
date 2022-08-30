<?php
    function CheckTrafficLight($trafficLight, $Ambulance)
    {
        if ($Ambulance == false)
        {
            if ($trafficLight == "red" || $trafficLight == "orange")
            {
                echo "<p>U moet stoppen</p>";
            }
            else
            {
                echo "<p>U mag doorrijden</p>";
            }
        }
        else
        {
            echo "<p>Er komt een ambulance aan, Maak ruimte vrij</p>";
        }
    }

    function ShowMenu($sunday)
    {
        switch ($sunday)
        {
            case "Maandag":
                echo "<p>Kip Tandori</p>";
                break;
            case "Dinsdag":
                echo "<p>Spaghetti</p>";
                break;
            case "Woensdag":
                echo "<p>Spinazzi Overschotel</p>";
                break;
            case "Donderdag":
                echo "<p>Boerenkool</p>";
                break;
            case "Vrijdag":
                echo "<p>Kapsalon</p>";
                break;
            case "Zaterdag":
                echo "<p>Patat</p>";
                break;
            case "Zondag":
                echo "<p>Pannekoeken</p>";
                break;
            default:
                echo "<p>Ongeldige invoer</p>";
        }
    }

    function CheckLadiesNight($age, $gender)
    {
        if($age >= 18)
        {
            if ($gender == "Vrouw")
                echo "<p>U bent toegestaan</p>";
            else
            {
                echo "<p>U bent niet toegestaan</p>";
            }
        }
        elseif ($age >= 70)
        {
            echo "<p>U bent toegestaan</p>";
        }
        else
        {
            echo "<p>U bent niet toegestaan</p>";
        }

    }
?>