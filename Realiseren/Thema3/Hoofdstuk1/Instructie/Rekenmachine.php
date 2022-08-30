<?php

    // Een regel commentaar
    /*
     * Uitgebreide tekst schrijven
     * Hoe was mijn weekend
     * Heb ik de kaarsen wel uitgemaakt thuis toen ik weg ging?
     */

    $birthDate = "14-07-2005";
    $daysAlive = 0;

    // uitrekenen aantal geleefde dagen

    $dateBirth = date_create($birthDate);
    $dateNow = date_create();

    // Verschil tussen de 2 data berekenen
    $interval = date_diff($dateBirth, $dateNow);

    $daysAlive = $interval->format(format: "%a");
?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h1>
            Hoelang leef ik al?
        </h1>
        <p>
            Ik ben geboren op: <?php echo $birthDate; ?>
        </p>
        <p>
            Ik leef al <?php echo $daysAlive; ?> dagen
        </p>
    </body>
</html>
