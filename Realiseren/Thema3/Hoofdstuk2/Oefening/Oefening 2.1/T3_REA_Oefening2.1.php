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
    <link href="styles/style.css" rel="stylesheet">
</head>
<body>
<header>
    <h1>
        <?php
        echo 'Uitwerkingen van PHP-oefeningen';
        ?>
    </h1>
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
            Uitwerking 2.1
        </h2>
        <p>
            <?php
            // Voorbeeldcode
            echo "PHP (Hypertext Preprocessor) is een scripttaal die wordt verwerkt door de webserver ISS ookwel bekend als een server-side scirpting taal. Dankzij deze scripttaal kan men via de Client communiceren met een database als hij/zij zich bevindt op de website.";
            ?>
        </p>
        <h3>
            <?php
                echo "Git & Github"
            ?>
        </h3>
        <p>
            <?php
                echo "Dit is de uitwerking van 3.2, de navigatie en header komen van een include af, de Footer komt van een include af die van een andere include afkomt."
            ?>
        </p>
    </section>
</main>
</body>
</html>
