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
        <h2>
            Uitwerking 5.2
        </h2>
        <form method="post" action="Oefening_5.2_Resultaat.php">
            <table>
                <tr>
                    <td colspan="2">
                        <h1>Inloggen</h1>
                        <p>
                            Welkom op onze website. <br>
                            Na correct in te loggen, krijgt u toegang tot onze schatkist. Deze is dan voor u, om te gebruiken!
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        Username
                    </td>
                    <td>
                        <input type="text" name="txtUsername">
                    </td>
                </tr>

                <tr>
                    <td>
                        Password
                    </td>
                    <td>
                        <input type="password" name="txtPassword">
                    </td>
                </tr>

                <tr>
                    <td colspan="">
                        <input type="submit" value="Verzenden">
                    </td>
                </tr>
            </table>
        </form>
    </section>
</main>
</body>
<footer>
    <?php
    include("/inetpub/wwwroot/Realiseren/Thema3/Includes/footer.php");
    ?>
</footer>
</html>