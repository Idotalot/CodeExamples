<?php
/*
 * User: Jordy Perret
 * Date: 9-2-2022
 * File: T3_REA_Oefening2.2.php
 **/
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
            Uitwerking 4.3
        </h2>
        <?php
            include("Includes/variabelen.php");

            echo "<p>Taak 3:</p>";

            $money = 1560;
            $cost = 3000;
            CalculateInterest($cost, $money);
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
