<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="../styles/stylesheet.css">
        <link rel="stylesheet" href="../styles/header.css">
        <link rel="stylesheet" href="../styles/footer.css">
        <link rel="stylesheet" href="../styles/portal.css">
        <link rel="stylesheet" href="../styles/tableStyling.css"
    </head>

    <body>
    <?php
        include ("../includes/header.php");
    ?>
    <section>
        <h2 class="headerSection">
            SPORT
        </h2>
    </section>
    <div class="borderStyle"></div>
    <main>
        <section>
            <?php

            include("/inetpub/wwwroot/Praktijk/Thema4/Project/includes/db_functions.php");

            startConnection();

            if(empty($_GET["Event"]) == true)
            {
                echo "<p class='error'>Error. Geen geldig activiteit opgegeven.</p>";
                echo "<br>";
                echo "<a href='eventList.php'>Ga terug</a>";
                // Stop het script
                die();
            }

            // Wat weet ik nu?
            $Activity = $_GET["Event"];

            // Bouw de SELECT query
            executeQuery("USE T4_PRA");

            $query = "DELETE FROM Activities WHERE Id = " . $Activity;
    //                echo $query;

    //        if(empty($_GET["Event"]) == true)
    //        {
    //            echo "<p>Er is geen personen ID ingevoerd. Ga terug en probeer opnieuw</p>";
    //            echo "<br>";
    //            echo "<a href='eventList'>Ga terug</a>";
    //            // Stop het script
    //            die();
    //        }
    //        $personId = $_GET["Id"];
    //        $query = "DELETE FROM Activities WHERE Id = ". $personId;

            // Maak de connection met de database

    //        $result = executeQuery($query);
    //
    //        // Record uitlezen van één tabel
    //
    //        $DeleteVar = $result->fetch(PDO::FETCH_ASSOC);
    //
    //        echo $DeleteVar;

            header('location: eventList.php ');

            // Uitvoeren DELETE query
            $rowsAffected = executeQuery($query);
            if($rowsAffected > 0)
            {
                echo "<p>Succes! Verwijderen geslaagd.</p>";
            }
            else
            {
                echo "<p>Error. Verwijderen mislukt.</p>";
            }

            ?>

            <ul class='returnButton'>
                <li>
                    <a href="studentPortal.php" class="portalA">Terug</a>
                </li>
            </ul>
        </section>
    </main>
    <?php
    include "../includes/footer.php";
    ?>
    </body>
</html>