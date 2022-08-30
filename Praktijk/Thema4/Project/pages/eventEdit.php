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
    <link rel="stylesheet" href="../styles/update.css">
    <link rel="stylesheet" href="../styles/portal.css"
</head>

<body>
<?php
include ("../includes/header.php")
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

            die();
        }

        // Wat weet ik nu?
        $Activity = $_GET["Event"];

        // Bouw de SELECT query
        executeQuery("USE T4_PRA");

        $query = "SET NOCOUNT ON; SELECT * FROM Activities WHERE Id = '" . $Activity . "'";
        //        echo $query;

        // Maak de connection met de database

        $result = executeQuery($query);

        // Record uitlezen van één tabel

        $ActivityVar = $result->fetch(PDO::FETCH_ASSOC);

        ?>
        <form action="eventUpdate.php" method="post" id="updateForm">
            <?php
            echo "<h3 id='updateFormTitle'>Bewerken van activiteit: " . $Activity . "</h3>";
            ?>
            <input type="hidden" name="Id" value="<?php echo $ActivityVar["Id"] ?>">

            <label>Activiteit</label>
            <input type="text" name="Activity" value="<?php echo $ActivityVar["Activity"] ?>" class="updateInput">
            <br>
            <label>Begin Tijd</label>
            <input type="datetime-local" name="StartDate" value="<?php echo $ActivityVar["StartDate"] ?>" class="updateInput">
            <br>
            <label>Eind Tijd</label>
            <input type="datetime-local" name="EndDate" value="<?php echo $ActivityVar["EndDate"] ?>" class="updateInput">
            <br>
            <label>Plaats</label>
            <input type="text" name="Place" value="<?php echo $ActivityVar["Place"] ?>" class="updateInput">
            <br>
            <input type="submit" name="butTon" value="Versturen" id="updateButton">
        </form>
        <ul class="returnButton">
            <li>
                <a href="eventList.php" class="portalA">Terug</a>
            </li>
        </ul>
    </section>
</main>
<?php
include "../includes/footer.php";
?>
</body>
</html>