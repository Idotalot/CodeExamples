<?php
/**
 * User: Jordy Perret
 * Date: 9-2-2022
 * File: T3_REA_Oefening2.2.php
 */

    $story1 = "Carnaval is van oorsprong een gekerstend heidens volksfeest. Het duurt
officieel 3 dagen, zondag, maandag en dinsdag direct voorafgaand aan de
vastentijd van 40 dagen. Carnaval is bij uitstek het feest van zotheid, spot
en uitbundigheid. Inmiddels is het in verschillende plaatsen door heel
Nederland een gebruik om carnaval op carnavalsvrijdag te openen. Op
Aswoensdag wordt carnaval afgesloten, maar de tradities verschillen per
regio. In het overgrote deel van Noord-Brabant wordt er afgesloten met
Worstenbrood, koffie Schrobbeler soms met een Brabantse koffietafel.";

    $receipt1 = 110;
    $receipt2 = 160;
    $receipt3 = 130;

    $total = $receipt1 + $receipt2 + $receipt3;

    $costPerPerson = $total / 4;

    $challengeTotal = (($total / 100 * 110) - 50) / 4;
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
    <link href="styles/stylesheet.css" rel="stylesheet">
</head>
<body>
<header>
    <h1>
        <?php
        echo 'Uitwerkingen van PHP-oefeningen';
        ?>
    </h1>
</header>
<?php
//Hier gaan we in het volgende hoofdstuk het menu toevoegen.
?>
<main id="wrapper">
    <?php
    include("/inetpub/wwwroot/Realiseren/Thema3/Includes/nav.php");
    ?>
    <section>
        <h2>
            Uitwerking 3.1
        </h2>
        <h3>
            Taak 1
        </h3>
        <p>
            <?php
                echo $story1
            ?>
        </p>
        <h3>
            Taak 2
        </h3>
        <p>
            <?php
                echo "Het totaal bedrag is &euro;" . $total
            ?>
        </p>
        <p>
            <?php
                echo "Kosten per persoon bedragen: &euro;" . $costPerPerson
            ?>
        </p>
        <h3>
            Challenge
        </h3>
        <p>
            <?php
                echo "De totaalkosten inclusief fooi zijn: &euro;" . $challengeTotal
            ?>
        </p>
    </section>
</main>
</body>
</html>
