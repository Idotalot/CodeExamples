<?php
/**
 * User: Jordy Perret
 * Date: 9-2-2022
 * File: T3_REA_Oefening2.2.php
 */
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
        <h2>
            Uitwerking 4.2
        </h2>
        <p>
            <?php
                include("../../../Includes/functions.php");
                echo "<h3>Taak 2 - Stoplichten</h3>";
                echo CheckTrafficLight("orange", false);
                echo "<hr>";
                echo "<h3>Taak 2 - Weekmenu</h3>";
                echo ShowMenu("Dinsdag");
                echo "<hr>";
                echo "<h3>Taak 2 - (advanced) - Ladies Night</h3>";
                echo CheckLadiesNight(18, "Man");
            ?>
        </p>

    </section>
</main>
</body>
<footer>
    <?php
    include("/inetpub/wwwroot/Realiseren/Thema3/Includes/footer.php");
    ?>
</footer>
</html>