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
    <link rel="stylesheet" href="../styles/portal.css">
</head>

<body>
<?php
include ("../includes/header.php");

include ("../includes/db_functions.php");

?>
<section>
    <h2 class="headerSection">
        SPORT
    </h2>
</section>
<div class="borderStyle"></div>
<main>
    <section>
        <ul id="portalList">
            <li class="portalButton">
                <a href="eventList.php" class="portalA">Activiteiten Lijst</a>
            </li>
            <li class="portalButton">
                <a href="studentList.php" class="portalA">Studenten Lijst</a>
            </li>
            <li>
                <a href="logout.php" class="portalA">Uitloggen</a>
            </li>
        </ul>
    </section>
</main>
<?php
    include "../includes/footer.php";
?>
</body>
</html>