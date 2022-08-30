<?php

    // Is er een POST value "txtUsername" opgegeven?
    if( isset($_POST["txtUsername"]) == true)
    {
        //  opdracht 1: Programmeer hieronder (via cookieset) een cookie met de volgende eisen:
        //   Expiration date: over 356 dagen (1 jaar)
        //   Naam: userUsernameCookie
        //   Value: $_POST["txtUsername"]
		//   Path:  "/"
        setcookie("userUsernameCookie", $_POST["txtUsername"], time() + (60 * 60 * 24 * 365), path: "/");
    }
    else
    {
        echo "<p>Je bent vergeten een username op te geven. Ga terug!</p>";
    }

    // Is er een POST value "selCountry" opgegeven?
    if( isset($_POST["selCountry"]) == true)
    {
        //  Opdracht 2: Programmeer hieronder (via cookieset) een cookie met de volgende eisen:
        //   Expiration date: over 356 dagen (1 jaar)
        //   Naam: userCountryCode
        //   Value: $_POST["selCountry"]
		//   Path: "/"
        setcookie("userCountryCode", $_POST["selCountry"], time() + (60 * 60 * 24 * 365), path: "/");
    }
    else
    {
        echo "<p>Je bent vergeten een land op te geven. Ga terug!</p>";
    }

    header("Location: /Realiseren/Thema3/Hoofdstuk2/Oefening/Oefening 2.1/T3_REA_Oefening2.1.php");
//    if (isset($_POST["txtUsername"]) == true || isset($_POST["selCountry"]) == true)
//    {
//        header("Location: /Realiseren/Thema3/Hoofdstuk2/Oefening/Oefening 2.1/T3_REA_Oefening2.1.php");
//    }
    // Stuur een gebruiker door naar de index pagina!
    // header("Location: /T3_REA_Oefeningen/index.php");

?>