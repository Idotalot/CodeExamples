<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="../styles/stylesheet.css">
        <link rel="stylesheet" href="../styles/header.css">
        <link rel="stylesheet" href="../styles/footer.css">
        <link rel="stylesheet" href="../styles/update.css">
        <link rel="stylesheet" href="../styles/portal.css"
    </head>

    <body>
    <?php
    include ("../includes/header.php")
    ?>
    <section>
        <h2 class="headerSection">
            SPORT
        </h2>
    </section>
    <div class="borderStyle"></div>
    <main>
        <section>
    <?php
    include("/inetpub/wwwroot/Praktijk/Thema4/Project/includes/db_functions.php");

    // Start de database verbinding
    startConnection();

    if(
        empty($_POST["Activity"]) == false &&
        empty($_POST["StartDate"]) == false &&
        empty($_POST["EndDate"]) == false &&
        empty($_POST["Place"]) == false
    )
    {
        $query = "
            INSERT INTO Activities 
            VALUES ('". $_POST["Activity"] . "', 
            '" . date('Y-m-d H:i', strtotime($_POST['StartDate'])) . "', 
            '" . date('Y-m-d H:i', strtotime($_POST['EndDate'])) . "', 
            '" . $_POST["Place"] . "')";

        $rowsAffected = executeIntoQuery($query);

        if($rowsAffected > 0)
        {
            echo "<p class='ucComplete'>Activiteit aangemaakt</p>";
            echo "<ul class='returnButton'>
                    <li>
                        <a href='eventList.php' class='portalA'>Terug</a>
                    </li>
                </ul>";
        }
        else
        {
            echo "<p class='ucFailed'>Error. Activiteit niet aangemaakt</p>";
            echo "<ul class='returnButton'>
                    <li>
                        <a onclick='history.back()' class='portalA'>Terug</a>
                    </li>
                </ul>";
        }
    }
    else
    {
        echo "<p class='ucFailed'>Error. Activiteit niet aangemaakt</p>";
        echo "<ul class='returnButton'>
                    <li>
                        <a onclick='history.back()' class='portalA'>Terug</a>
                    </li>
                </ul>";
    }


    ?>
        </section>
    </main>
    <?php
    include "../includes/footer.php";
    ?>
    </body>
</html>
