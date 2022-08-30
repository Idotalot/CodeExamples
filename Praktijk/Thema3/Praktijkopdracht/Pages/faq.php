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
    <link href="../Styles/stylesheet.css" rel="stylesheet">
    <link href="../Styles/faq.css" rel="stylesheet">
    <script src="../Scripts/faq.js"></script>
</head>
<body>
    <header>
        <?php
            include("../Includes/nav.php")
        ?>
    </header>
    <main>
        <article id="searchBarArt">
            <input type="search" placeholder="Zoeken naar vragen..." id="searchBar">
        </article>
        <article id="art1" class="question" Wat is respect gym?>
            <button onclick="button1()" id="button1"><strong>Wat is Respectgym?</strong></button>
            <div id="a1">
                <p>
                    - Respectgym is een sportschool voor zowel indoor en outdoor sport
                </p>
            </div>
        </article>
        <article id="art2" class="question" Welke sporten worden er allemaal gegeven?>
            <button onclick="button2()" id="button2"><strong>Welke sporten worden er allemaal gegeven?</strong></button>
            <div id="a2">
                <p>
                    - Bij Respectgym geven we meerdere soorten groeplessen. Onze groeplessen zijn:
                </p>
                <ul>
                    <li>
                        BOKSEN
                    </li>
                    <li>
                        KICKBOKSEN
                    </li>
                    <li>
                        FREE FIGHTING
                    </li>
                    <li>
                        MMA
                    </li>
                    <li>
                        FUN & FIT
                    </li>
                </ul>
            </div>
        </article>
        <article id="art3" class="question">
            <button onclick="button3()" id="button3"><strong>Zijn ouderen ook welkom?</strong></button>
            <div id="a3">
                <p>
                    - Zeker weten! Mensen die 60 jaar of ouders zijn en dreigen buiten de samenleving te vallen kunnen maandag T/M zaterdag geheel <strong>GRATIS</strong> bij ons trainen!
                </p>
            </div>
        </article>
        <article id="art4" class="question">
            <button onclick="button4()" id="button4"><strong>Wat zijn de lesprijzen voor kinderen?</strong></button>
            <div id="a4">
                <p>
                    - Jeugd onder de 14 jaar willen wij stimuleren om te gaan sporten daarom kunnen ze bij ons <strong>GRATIS</strong> terecht.
                </p>
            </div>
        </article>
    </main>
    <?php
        include ("../Includes/footer.php")
    ?>
</body>