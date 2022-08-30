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
//Hier gaan we in het volgende hoofdstuk het menu toevoegen.
?>
<main id="wrapper">
    <?php
        include("/inetpub/wwwroot/Realiseren/Thema3/Includes/nav.php");
    ?>
    <section>
        <h2>
            Uitwerking 3.2
        </h2>
        <p>
            <?php
                echo "Dit is de uitwerking van 3.2, de navigatie en header komen van een include af, de Footer komt van een include af die van een andere include afkomt."
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