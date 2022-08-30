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
    include("/inetpub/wwwroot/Realiseren/Includes/header.php");
    ?>
</header>
<?php

?>
<main id="wrapper">
    <?php
    include("/inetpub/wwwroot/Realiseren/Includes/nav.php");
    ?>
    <section>
        <?php

            include("/inetpub/wwwroot/Realiseren/Includes/db_functions.php"); //echo $_GET["raadselId"];

        startConnection();

        if(empty($_GET["raadselId"]) == true)
        {
            echo "<p class='error'>Error. Geen geldig raadselId opgegeven.</p>";

            die();
        }

        // Wat weet ik nu?
        $raadselId = $_GET["raadselId"];

        // Bouw de SELECT query
        executeQuery("USE ijdb");

        $query = "SELECT * FROM tblRiddles WHERE Id = " . $raadselId;
//        echo $query;

        // Maak de connection met de database

        $result = executeQuery($query);

        // Record uitlezen van één tabel

        $jokeVar = $result->fetch(PDO::FETCH_ASSOC);

        ?>

        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
        </head>
        <body>
            <form action="update_query.php" method="post" id="updateForm">
                <?php
                echo "<h3 id='updateFormTitle'>Bewerken van grap: " . $raadselId . "</h3>";
                ?>
                <!-- NU jullie: maken formulier -->
                <input type="hidden" name="hidRiddleId" value="<?php echo $jokeVar["Id"] ?>">

                <label>Grap</label>
                <input type="text" name="RiddleText" value="<?php echo $jokeVar["RiddleText"] ?>" class="updateInput">
                <br>
                <label>Antwoord</label>
                <input type="text" name="RiddleAnswer" value="<?php echo $jokeVar["RiddleAnswer"] ?>" class="updateInput">
                <br>
                <label>Maker</label>
                <input type="text" name="Creator" value="<?php echo $jokeVar["Creator"] ?>" class="updateInput">
                <br>
                <label>Aanmaakdatum</label>
                <input type="date" name="CreateDate" value="<?php echo $jokeVar["CreateDate"] ?>" class="updateInput">
                <br>
                <input type="submit" name="butTon" value="Versturen" id="updateButton">
            </form>
    </section>
</main>
</body>
<footer>
    <?php
    include("/inetpub/wwwroot/Realiseren/Includes/footer.php");
    ?>
</footer>

</html>
