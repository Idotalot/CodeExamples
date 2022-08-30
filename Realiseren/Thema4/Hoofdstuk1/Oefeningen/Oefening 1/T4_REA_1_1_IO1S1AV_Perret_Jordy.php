<?php
    //Database connection maken
//    $PDO = new PDO("odbc:odbc2sqlserver");
//
//    // Database query uitvoeren
//    $PDO->query("SELECT * FROM tblRiddles");
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        <?php
        echo 'Realiseren instructies thema 3 en 4.';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/stylesheet.css" rel="stylesheet">
    <script src="scripts/functions.js" defer></script>
</head>
<body>
<header>
    <?php
    include("/inetpub/wwwroot/Realiseren/Thema3/Includes/header.php");
    ?>
</header>
<?php

?>
<main id="wrapper">
    <?php
    include("/inetpub/wwwroot/Realiseren/Thema3/Includes/nav.php");
    ?>
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
        echo "database connectie gelukt<br>";
        // Uitvoeren van een SQl query
        try
        {
            // Query schrijven
            $sql = "SELECT * FROM tblRiddles";
            // Query uitvoeren
            $result = $pdo->query($sql);
        }
        catch (PDOException $e)
        {
            // Bij een error, toon dan deze melding
            echo "Er is een probleem met ophalen van tblRiddles: " . $e->getMessage();
            // Stop het script
            die();
        }

        echo "<table>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Text</th>";
        echo "<th>Antwoord</th>";
        echo "<th>Maker</th>";
        echo "<th>Datum</th>";
        echo "</tr>";

        // Door de results heen loopen via een while
        while ($row = $result->fetch(PDO::FETCH_ASSOC))
        {
            echo "<tr>";
            echo    "<td>" . $row["Id"] . "</td>";
            echo    "<td>" . $row["RiddleText"] . "</td>";
            echo    "<td onclick='ShowAnswer(this)' style='filter: blur(5px)'>" . $row["RiddleAnswer"] . "</td>";
            echo    "<td>" . $row["Creator"] . "</td>";
            echo    "<td>" . $row["CreateDate"] . "</td>";
            echo "</tr>";
            //            echo "ID: " . $row["Id"] . "<br>";
            //            echo "Raadsel: " . $row["RiddleText"] . "<br>";
            //            echo "Oplossing: " . $row["RiddleAnswer"] . "<br>";
            //            echo "Bedenker:" . $row["Creator"] . "<br>";
            //            echo "Datum: " . $row["CreateDate"] . "<br>";
            //            echo "<hr>";
        }

        echo "</table>";
        ?>
    </section>
</main>
</body>
<footer>
    <?php
    include("/inetpub/wwwroot/Realiseren/Thema3/Includes/footer.php");
    ?>
</footer>
</html>