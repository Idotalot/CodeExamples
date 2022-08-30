<!--
    Author:     Rob Wessels
    Date:       feb 2021

    Subject:    Result oefening 4.1  top: include
                Startende tags, head, header, ul (menulist)
-->
<html lang="en-us">
    <head>
        <title>
            <?php
                echo $title;
            ?>
        </title>
        <meta charset="UTF-8" >
        <meta name="viewport" content="width=device-width initial-scale=1" >
        <script src="../scripts/scriptpages.js" defer></script>
        <!-- nieuwe style -->
        <link rel="stylesheet" href="../styles/stylesheet.css">
    </head>

    <body>

        <header>
            <h1><a href='../index.php'>Al Pacino</a></h1>
            <h3>...in zijn rollen als gangster</h3>
            <h3>
                <?php
                    date_default_timezone_set('Europe/Amsterdam');
                    $time = (date("H:i"));

                    echo "Goedendag, welkom op deze site <br>";
                    //GEFAALDE POGING TOT BONUS OPDRACHT

//                    function TitleBasedOnTime($time)
//                    {
//                        if ($time >= " 00:00")
//                        {
//                            echo "Goedenacht, welkom op deze site <br>";
//                        }
//                        else if ($time >= " 06:00")
//                        {
//                            echo "Goedemorgen, welkom op deze site <br>";
//                        }
//                        else if ($time >= " 12:00")
//                        {
//                            echo "Goedemiddag, welkom op deze site <br>";
//                        }
//                        else if ($time >= " 18:00 ")
//                        {
//                            echo "Goedenavond, welkom op deze site <br>";
//                        }
//                    }

//                    TitleBasedOnTime($time)
                    echo $time;
                ?>
            </h3>
        </header>

        <main>
            <nav>
                <ul id="menu_list_pages">
                    menulijst loading . . .
                </ul>
            </nav>
