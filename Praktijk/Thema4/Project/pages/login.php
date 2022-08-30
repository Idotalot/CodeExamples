<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/stylesheet.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="stylesheet" href="../styles/footer.css">
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
<main>
    <div class="borderStyle"></div>
    <form action="login.php" method="post" id="loginForm">
        <h2 class="formCenter">Studenten Login</h2>
        <p>Gebruikersnaam</p>
        <input type="text" name="txtUsername"><br>
        <p>Wachtwoord</p>
        <input type="password" name="txtPassword"><br>
        <button type="submit">Inloggen</button>
    </form>
</main>
<?php

// Inladen van de database functionaliteiten
include("../includes/db_functions.php");

// Start de database connectie
startConnection();

// Start de session
session_start();


/* PROTOTYPE ISSET LOGIN QUERY */
//if (isset($_POST["txtUsername"]) == false || isset($_POST["txtPassword"]) == false)
//{
//
//}


// Inlog query bouwen
if (isset($_POST["txtUsername"]) && isset($_POST["txtPassword"]))
{
    $username = $_POST["txtUsername"];
    $password = $_POST["txtPassword"];

    $query = "SET NOCOUNT ON; USE T4_PRA; SELECT * FROM students WHERE Username = '$username' AND Password = '$password'";

    // Query uitvoeren
    $resultaat = executeQuery($query);

    // Stuurt geschereven Query door naar database server
    $row = $resultaat->fetch(PDO::FETCH_ASSOC);

    if($row == false)
    {
        // Inloggen mislukt
        echo "<form id='loginResult'>
                <h3>
                    Inloggegevens Incorrect / Niet ingevuld
                </h3>
              </form>";
    }
    else
    {
        // Inloggen
        header("Location: studentPortal.php");
        $_SESSION["loggedIn"] = true;
    }
}
?>
    <?php
     echo session_status();
    include "../includes/footer.php";
    ?>
</body>
</html>

