<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T4_PRA_Project_Perret_Jordy_IO1S1AV</title>
    <link href="styles/stylesheet.css" rel="stylesheet">
    <link href="styles/index.css" rel="stylesheet">
    <link href="styles/header.css" rel="stylesheet">
    <link href="styles/footer.css" rel="stylesheet">
    <link href="styles/tableStyling.css" rel="stylesheet"
</head>
<body>
    <?php
        include ("includes/header.php")
    ?>
        <section>
            <h2 class="headerSection">
                SPORT
            </h2>
        </section>
    <main>
        <div class="borderStyle"></div>
        <section id="startSection">
            <img src="images/background.jpg" id="headerImg">
            <a href="pages/login.php">
                <figure>
                    <img src="images/lock_png.png">
                    <h3 id="loginButton">
                        Sportacademie Portaal
                    </h3>
                </figure>
            </a>
        </section>
        <div class="borderStyle"></div>
        <section id="mainSection">
            <h3 id="indexEventTitle">
                Aankomende sportactiviteiten
            </h3>
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
            $sql = "SET NOCOUNT ON; USE T4_PRA; SELECT TOP 3 * FROM Activities WHERE StartDate >= GETDATE() ORDER BY StartDate";
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

        echo "<table id='activityTable'>";
        echo "<tr>";
        echo "<th>Activiteit</th>";
        echo "<th class='dateTd'>Begin Tijd</th>";
        echo "<th class='dateTd'>Eind Tijd</th>";
        echo "<th>Plaats</th>";
        echo "</tr>";

        // Door de results heen loopen via een while
        while ($row = $result->fetch(PDO::FETCH_ASSOC))
        {
            echo "<tr>";
            echo    "<td>" . $row["Activity"] . "</td>";
            echo    "<td class='dateTd'>" . date('d-m-Y H:i', strtotime($row['StartDate'])) . "</td>";
            echo    "<td class='dateTd'>" . date('d-m-Y H:i', strtotime($row['EndDate'])) . "</td>";
            echo    "<td>" . $row["Place"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
        ?>
        </section>
    </main>
    <?php
    include ("includes/footer.php")
    ?>
</body>
</html>
