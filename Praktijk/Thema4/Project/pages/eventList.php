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

include ("../includes/db_functions.php");

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
        try // Poging tot uitvoering
        {
            $pdo = new PDO("odbc:odbc2sqlserver");
        }
        catch (PDOException $e) // Fout afhandeling
        {
            // Bij een error, toon dan deze melding
            echo "<h1>Database error:</h1>";
            echo $e->getMessage();
            // Stop het script
            die();
        }
        //            echo "database connectie gelukt<br>";
        // Uitvoeren van een SQl query
        try
        {
            // Query schrijven
            $sql = "SET NOCOUNT ON; USE T4_PRA; SELECT * FROM Activities";
            // Query uitvoeren
            $result = $pdo->query($sql);
        }
        catch (PDOException $e)
        {
            // Bij een error, toon dan deze melding
            echo "Er is een probleem met ophalen van tblActivities: " . $e->getMessage();
            // Stop het script
            die();
        }

        echo "<table id='studentTable'>";
        echo "<tr>";
        echo "<th></th>";
        echo "<th>Activiteit</th>";
        echo "<th class='dateTd'>Begin Tijd</th>";
        echo "<th class='dateTd'>Eind Tijd</th>";
        echo "<th>Plaats</th>";
        echo "</tr>";

        while ($row = $result->fetch(PDO::FETCH_ASSOC))
        {
            echo "<tr>";
            echo    "<td><a href='eventEdit.php?Event=". $row["Id"] . "'>Bewerk</a>
                    <br>
                    <a href='eventDelete.php?Event=". $row["Id"] . "'>Verwijderen</a></td>";
            echo    "<td>" . $row["Activity"] . "</td>";
            echo    "<td class='dateTd'>" . date('d-m-Y H:i', strtotime($row['StartDate'])) . "</td>";
            echo    "<td class='dateTd'>" . date('d-m-Y H:i', strtotime($row['EndDate'])) . "</td>";
            echo    "<td>" . $row["Place"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
        ?>
        <ul class='returnButton'>
            <li class="portalButton">
                <a href="eventCreate.php" class="portalA">Activiteit Aanmaken</a>
            </li>
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