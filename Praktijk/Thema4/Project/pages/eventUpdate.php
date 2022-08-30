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
<section>
<?php

// Maken en uitvoeren van de update query
if(
    empty($_POST["Activity"]) == false &&
    empty($_POST["StartDate"]) == false &&
    empty($_POST["EndDate"]) == false &&
    empty($_POST["Place"]) == false &&
    empty($_POST["Id"]) == false
)
{
    // Alle POST variabelen zijn correct
    $updateQuery = "
        UPDATE Activities 
        SET Activity = '". $_POST["Activity"] . "',
            StartDate = '" . date('Y-m-d H:i', strtotime($_POST['StartDate'])) . "',
            EndDate = '" . date('Y-m-d H:i', strtotime($_POST['EndDate'])) . "',
            Place = '" . $_POST["Place"] . "'
            WHERE Id = '" . $_POST["Id"] . "'
            ";


    include ("/inetpub/wwwroot/Praktijk/Thema4/Project/includes/db_functions.php");

    startConnection();

    $rowsAffected = executeIntoQuery($updateQuery);

    if($rowsAffected > 0)
    {
        echo "<p class='ucComplete'>Activiteit Bewerkt</p>";
        echo "<ul class='returnButton'>
                    <li>
                        <a href='eventList.php' class='portalA'>Terug</a>
                    </li>
                </ul>";
    }
    else
    {
        echo "<p class='ucFailed'>Actie mislukt</p>";
        echo "<ul class='returnButton'>
                    <li>
                        <a onclick='history.back()' class='portalA'>Terug</a>
                    </li>
                </ul>";
    }
}
else
{
    // Enkele waardes zijn niet ingevuld
    echo "<p class='ucFailed'>U bent een waarde vergeten in het formulier</p>";
    echo "<ul class='returnButton'>
                    <li>
                        <a onclick='history.back()' class='portalA'>Terug</a>
                    </li>
                </ul>";
}
?>
</section>
</main>
<?php
include "../includes/footer.php";
?>
</body>
</html>
