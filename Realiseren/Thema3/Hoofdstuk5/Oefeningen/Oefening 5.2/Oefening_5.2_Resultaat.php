<?php

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
    <link href="styles/stylesheet5_2.css" rel="stylesheet">
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
            $username = "Idotalot";
            $password = "P@ssword";

            if(($_POST["txtUsername"]) != $username)
            {
                echo "<p>Username incorrect</p>";
            }
            else
            {
                if(($_POST["txtUsername"]) != $username || ($_POST["txtPassword"]) != $password)
                {
                    echo "<p>Incorrect gebruikersnaam of wachtwoord</p>";
                }
                else
                {
                    echo "<figure><img src='images/schatkist.jpg'><figcaption>Gefelicteerd! Je hebt een schatkist gevonden!</figcaption></figure>";
                }
            }
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
