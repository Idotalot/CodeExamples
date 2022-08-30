<!--// JORDY PERRET | IO1S1AV-->
<!--OPDRACHT 5.1-->

<?php
// Form.php

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
    <link href="styles/stylesheet5_1.css" rel="stylesheet">
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
        <h1>Uitschrijfformulier KW1C</h1>


        <form method="get" action="pages/T3_REA_Oefening5_1_result.php">
            <table>
                <tr>
                    <td>
                        <label>Voornaam en Achternaam</label>
                    </td>
                    <td>
                        <input type="text" name="txtVoornaamEnAchternaam" required minlength="3">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Studentnummer</label>
                    </td>
                    <td>
                        <input type="text" name="txtStudentnummer" required minlength="6">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Datum van uitschrijving</label>
                    </td>
                    <td>
                        <input type="date" name="txtDatum" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Reden van uitscrijving</label>
                    </td>
                    <td>
<!--                        <select name="slcReden">-->
<!--                            <option value="Ontevreden over de school">Ontevreden over de school</option>-->
<!--                            <option value="Verkeerde opleiding gekozen">Verkeerde opleiding gekozen</option>-->
<!--                            <option value="Onvriendelijk Personeel">Onvriendelijk Personeel</option>-->
<!--                            <option value="Andere reden...">Andere reden...</option>-->
<!--                        </select>-->

<!--                    ALTERNATIEF VOOR DE EERSTE WAARDES, WAARDES BESTAAN NU ALLEEN UIT WAARDE 1, 2, 3, 4. TOE TE VOEGEN MET IF/ELSE EN SWITCH-->

                        <select name="slcReden">
                            <option value="1">Ontevreden over de school</option>
                            <option value="2">Verkeerde opleiding gekozen</option>
                            <option value="3">Onvriendelijk Personeel</option>
                            <option value="4">Andere reden...</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Leerjaar</label>
                    </td>
                    <td>
                        <input type="radio" name="radLeerjaar" value="1">1e Leerjaar
                        <br>
                        <input type="radio" name="radLeerjaar" value="2">2e Leerjaar
                        <br>
                        <input type="radio" name="radLeerjaar" value="3">3e Leerjaar
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="chkSuccesklas" value="Yes">
                        <label>Ik wil me aanmeldden bij de succesklas</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="chkGegevensverwijdering" value="Yes">
                        <label>Verwijder mijn gegevens uit het systeem</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Geef hieronder de reden van je uitschrijving op</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="txtUitschrijving">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Versturen" id="finalInput">
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
