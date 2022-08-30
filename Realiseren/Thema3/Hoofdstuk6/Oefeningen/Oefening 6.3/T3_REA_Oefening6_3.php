<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="styles/stylesheet6_3.css" rel="stylesheet">
    <title>Document</title>
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
                Uitwerking 6.3
            </h2>
            <form id="gameFrm" method="get" action="T3_REA_Oefening6_3.php">
                <table>
                    <tr>
                        <td colspan="3">
                            Speel het spel Steen - Papier - Schaar tegen de computer.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="float">
                                <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="steen.gif">
                                <img src="images/steen.gif" class="photo">
                            </div>
                        </td>
                        <td>
                            <div class="float">
                                <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="papier.png">
                                <img src="images/papier.png" class="photo">
                            </div>
                        </td>
                        <td>
                            <div class="float">
                                <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="schaar.png">
                                <img src="images/schaar.png" class="photo">
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
            <?php

                $_SESSION["user1"] = 0;
                $_SESSION["user2"] = 0;

                if (isset($_GET['keuze']))
                {
                    echo "Jij koos: <img class='photo' src='images/{$_GET['keuze']}'>";
                    //Wat kiest de computer
                    //Random wordt er een getal tussen 0 en 2 gekozen
                    //keuze computer?
                    $opties = array("steen.gif","papier.png","schaar.png");
                    $computerkeuzegetal = rand(0,2);
                    $computerkeuze = $opties[$computerkeuzegetal];
                    echo "&nbsp;&nbsp;De computer koos: <img class='photo' src='images/{$computerkeuze}'>";

                    $choice1 = $_GET['keuze'];
                    $choice2 = $computerkeuze;

                    switch ($_GET['keuze'])
                    {
                        case ($choice1 == $choice2):
                            echo "<br>hetzelfde";
                            $_SESSION['user1'] +=1;
                            $_SESSION['user2'] +=1;
                            break;
                        case ($choice1 == 'schaar.png' && $choice2 == 'papier.png'):
                            echo "<br>gewonnen!";
                            $_SESSION['user1'] +=1;
                            break;
                        case ($choice1 == 'schaar.png' && $choice2 == 'steen.gif'):
                            echo "<br>verloren!";
                            $_SESSION['user2'] +=1;
                            break;
                        case ($choice1 == 'steen.gif' && $choice2 == 'schaar.png'):
                            echo "<br>gewonnen!";
                            $_SESSION['user1'] +=1;
                            break;
                        case ($choice1 == 'steen.gif' && $choice2 == 'papier.png'):
                            echo "<br>verloren!";
                            $_SESSION['user2'] +=1;
                            break;
                        case ($choice1 == 'papier.png' && $choice2 == 'schaar.png'):
                            echo "<br>verloren!";
                            $_SESSION['user2'] +=1;
                            break;
                        case ($choice1 == 'papier.png' && $choice2 == 'steen.gif'):
                            echo "<br>gewonnen!";
                            $_SESSION['user1'] +=1;
                            break;
                    }


                    /*
                    * gelijke keuzes wint niemand
                    * schaar wint van papier
                    * schaar verliest van steen
                    * steen wint van schaar
                    * steen verliest van papier
                    * papier wint van steen steen
                    * papier verliest schaar
                    */

                }

                for($_SESSION['user1'] <= 5 || $_SESSION['user2'] <= 5;;)
                {
                    echo "<br>De stand is = " . $_SESSION['user1'] . " - " . $_SESSION['user2']; break;
                }

                session_destroy()
            ?>
        </section>
    </main>
</body>
<footer>
    <?php
    include("/inetpub/wwwroot/Realiseren/Thema3/Includes/footer.php");
    ?>
</footer>
</body>
</html>
