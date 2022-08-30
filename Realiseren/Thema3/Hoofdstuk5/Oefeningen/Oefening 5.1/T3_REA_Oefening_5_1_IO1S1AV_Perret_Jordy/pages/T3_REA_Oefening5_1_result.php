<!--// JORDY PERRET | IO1S1AV-->
<!--OPDRACHT 5.1-->

<?php
    $txtName = $_GET["txtVoornaamEnAchternaam"];
    $studentNumber = $_GET["txtStudentnummer"];
    $date = $_GET["txtDatum"];
    $reason = $_GET["txtUitschrijving"];
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
    <link href="../styles/stylesheet5_1.css" rel="stylesheet">
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

            <table>
                <tr>
                    <td>
                        <label>Voornaam en Achternaam:</label>
                    </td>
                    <td>
                        <?php
                            echo $txtName;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Studentnummer:</label>
                    </td>
                    <td>
                        <?php
                            echo $studentNumber;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Datum van uitschrijving:</label>
                    </td>
                    <td>
                        <?php
                            echo $date;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Reden van uitscrijving:</label>
                    </td>
                    <td>

                        <?php

                        // IF/ELSE STATEMENT WAARBIJ DE WAARDES HET ANTWOORD MOETEN ZIJN I.P.V NUMMERS.

//                            if(isset($_GET["slcReden"]) == true)
//                            {
//                                echo $_GET["slcReden"];
//                            }
//                            else
//                            {
//                                echo "<p>Andere reden...</p>";
//                            }

                        // IF/ELSE STATEMENT ZODAT DE WAARDES 1, 2, 3 EN 4 BLIJVEN

//                            if ($_GET["slcReden"] == "1")
//                            {
//                                echo "<p>Ontevreden over de school</p>";
//                            }
//                            else if ($_GET["slcReden"] == "2")
//                            {
//                                echo "<p>Verkeerde opleiding gekozen</p>";
//                            }
//                            else if ($_GET["slcReden"] == "3")
//                            {
//                                echo "<p>Onvriendelijk personeel</p>";
//                            }
//                            else if ($_GET["slcReden"] == "4")
//                            {
//                                echo "<p>Andere reden...</p>";
//                            }
//                            else
//                            {
//                                echo "<p>Andere reden...</p>";
//                            }

                        // SWITCH I.P.V. IF/ELSE

                            switch ($_GET["slcReden"])
                            {
                                case "1":
                                    echo "<p>Ontevreden over de school</p>";
                                    break;
                                case "2":
                                    echo "<p>Verkeerde opleiding gekozen</p>";
                                    break;
                                case "3":
                                    echo "<p>Onvriendelijk personeel</p>";
                                    break;
                                case "4":
                                    echo "<p>Andere reden...</p>";
                                    break;
                                default:
                                    echo "<p>Andere reden...</p>";
                                    break;
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Leerjaar:</label>
                    </td>
                    <td>
                        <?php
                            if(isset($_GET["radLeerjaar"]) == true)
                            {
                                echo $_GET["radLeerjaar"];
                            }
                            else
                            {
                                echo "<p>U heeft geen leerjaar opgegeven.</p>";
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Ik wil me aanmeldden bij de succesklas:</label>
                    </td>
                    <td>
                        <?php
                        if (isset($_GET["chkSuccesklas"]) == true)
                        {
                            echo "<p>JA</p>";
                        }
                        else
                        {
                            echo "<p>NEE</p>";
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Verwijder mijn gegevens uit het systeem:</label>
                    </td>
                    <td>
                        <?php
                        if (isset($_GET["chkGegevensverwijdering"]) == true)
                        {
                            echo "<p>JA</p>";
                        }
                        else
                        {
                            echo "<p>NEE</p>";
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Uw reden tot uitschrijving:</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <?php
                            echo $reason
                        ?>
                    </td>
                </tr>
            </table>
    </section>
</main>
</body>
<footer>
    <?php
    include("/inetpub/wwwroot/Realiseren/Thema3/Includes/footer.php");
    ?>
</footer>
</html>
