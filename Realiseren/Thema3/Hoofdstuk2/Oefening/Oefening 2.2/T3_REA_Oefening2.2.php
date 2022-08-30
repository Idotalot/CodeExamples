<?php
/**
 * User: Jordy Perret
 * Date: 9-2-2022
 * File: T3_REA_Oefening2.2.php
 */
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
    <link href="styles/style.css" rel="stylesheet">
</head>
<body>
<header>
    <h1>
        <?php
            echo 'Uitwerkingen van PHP-oefeningen';
        ?>
    </h1>
</header>
<main id="wrapper">
    <?php
    include("/inetpub/wwwroot/Realiseren/Thema3/Includes/nav.php");
    ?>
    <section>
        <h2>
            Uitwerking 2.2
        </h2>
        <figure>
            <?php
                echo "<img src='/Realiseren/Thema3/Hoofdstuk2/Oefening/Oefening%202.2/images/image.jpg' alt='treinongeluk'>"
            ?>
        </figure>
        <article>
            <h2>
                <?php
                    echo "Bijlesbedrijven schieten als paddenstoelen uit de grond"
                ?>
            </h2>
            <h3>
                <?php
                    echo "Huiswerkbegeleiders en bijlesbedrijven zijn de afgelopen jaren als paddenstoelen uit de grond geschoten. In vijf jaar tijd zijn er zo'n tweeduizend bij gekomen, blijkt uit cijfers van de Kamer van Koophandel (KVK). De groei komt door leerachterstanden vanwege de pandemie, maar ook door meer subsidie en doordat er steeds meer druk op kinderen staat."
                ?>
            </h3>
            <p>
                <?php
                    echo "In 2017 waren er bijna 3.400 studiebegeleidingsbedrijven. Nu zijn dat er ruim 5.400, een stijging van meer dan 60 procent in vijf jaar. Vooral in de Randstad zijn er veel, zowel in absolute aantallen als in verhouding tot het aantal inwoners."
                ?>
            </p>
            <p>
                <?php
                    echo "Een belangrijke reden dat er veel bijscholingsbedrijven zijn bij gekomen, is dat scholen de afgelopen jaren meer subsidie hebben gekregen voor het inhuren van bijles. Om als bijlesbedrijf in aanmerking te komen, moet je ingeschreven staan bij de KVK. Ook de lockdowns en het bijbehorende thuisonderwijs deden een duit in het zakje, omdat digitale lessen zorgden voor achterstanden."
                ?>
            </p>
            <p>
                <?php
                    echo "Overigens is dat maar een deel van de verklaring, denkt Marianne Zuurendonk, voorzitter van de Landelijke Vereniging voor Studiebegeleidingsinstituten (LVSi). Ook speelt mee dat er meer druk op kinderen staat om goed te presteren op school."
                ?>
            </p>
            <p>
                <?php
                    echo "'Niet alleen ouders willen het beste voor hun kind, maar ook de kinderen zelf willen graag goed presteren bij bijvoorbeeld de Cito-toets. Dat heeft onder andere te maken met de competitieve samenleving', aldus Zuurendonk."
                ?>
            </p>
            <p>
                <?php
                    echo "Daar komt bij dat in steeds meer gezinnen beide ouders werken. Daarnaast zijn er volgens de LVSi-voorzitter steeds meer kinderen met ouders die een migratieachtergrond hebben en daardoor minder goed begeleiding kunnen geven."
                ?>
            </p>
        </article>
    </section>
</main>
</body>
</html>
