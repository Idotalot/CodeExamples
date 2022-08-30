<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/stylesheet.css">
</head>

<body>
<header>
    <?php
    include ("../includes/nav.php")
    ?>
</header>
    <main>
        <form action="login.php" method="post">
            <h2>Werknemers Login</h2>
            <p>Gebruikersnaam</p>
            <input type="text" name="txtUsername"><br>
            <p>Wachtwoord</p>
            <input type="password" name="txtPassword"><br>
            <button type="submit">Inloggen</button>
        </form>
    </main>
</body>

</html>
<?php

// Inladen van de database functionaliteiten
include("../../instructies/db_functions.php");

// Start de database connectie
startConnection();

// Start de session
session_start();

// Inlog query bouwen
if (isset($_POST["txtUsername"]) && isset($_POST["txtPassword"])) {
    $username = $_POST["txtUsername"];
    $password = $_POST["txtPassword"];

    $query = "SET NOCOUNT ON; USE PraktijkOpdracht; SELECT * FROM KuijpersLoginData WHERE Gebruikersnaam = '$username' AND Wachtwoord = '$password'";

    // Query uitvoeren
    $resultaat = executeQuery($query);

    $row = $resultaat->fetch(PDO::FETCH_ASSOC);

    if ($row == false)
    {
        // Inloggen mislukt
        echo "<form id='loginResult'>
                        <h3>
                            Inloggegevens Incorrect
                        </h3>
                    </form>";
    }
    else
        {
        // Inloggen
        $_SESSION["loggedIn"] = true;
        header("Location: employeeData.php");
    }
} else {
    // Inloggen niet gelukt
    echo "Username of password niet ingevuld";
}
?>