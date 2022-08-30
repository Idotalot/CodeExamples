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
        <form action="eventCreate2.php" method="post" id="updateForm">
            <h3 id='updateFormTitle'>
                Aanmaken van activiteit:
            </h3>

            <input type="hidden" name="Id">

            <label>Activiteit</label>
            <input type="text" name="Activity" class="updateInput">
            <br>
            <label>Begin Tijd</label>
            <input type="datetime-local" name="StartDate" class="updateInput">
            <br>
            <label>Eind Tijd</label>
            <input type="datetime-local" name="EndDate" class="updateInput">
            <br>
            <label>Plaats</label>
            <input type="text" name="Place" class="updateInput">
            <br>
            <input type="submit" value="Opslaan" id="updateButton">
        </form>
        <ul class="returnButton">
            <li>
                <a href="eventList.php" class="portalA">Terug</a>
            </li>
        </ul>
    </section>
</main>
<?php
include "../includes/footer.php";
?>
</body>
</html>