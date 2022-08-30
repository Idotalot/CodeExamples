<?php

// Maken en uitvoeren van de update query
if(
    empty($_POST["RiddleText"]) == false &&
    empty($_POST["RiddleAnswer"]) == false &&
    empty($_POST["Creator"]) == false &&
    empty($_POST["CreateDate"]) == false &&
    empty($_POST["hidRiddleId"]) == false
)
{
    // Alle POST variabelen zijn correct
    $updateQuery = "
        UPDATE tblRiddles 
        SET RiddleText = '". $_POST["RiddleText"] . "',
            RiddleAnswer = '" . $_POST["RiddleAnswer"] . "',
            Creator = '" . $_POST["Creator"] . "',
            CreateDate = '" . $_POST["CreateDate"] . "'
            WHERE Id = " . $_POST["hidRiddleId"] . "
            ";

        echo $updateQuery;

        include ("/inetpub/wwwroot/Realiseren/Includes/db_functions.php");

        startConnection();

        $rowsAffected = executeIntoQuery($updateQuery);

        if($rowsAffected > 0)
        {
            echo "Actie geslaagd";
            echo "<a href='T4_REA_4_2_IO1S1AV_Perret_Jordy.php'>Terug</a>";
        }
        else
        {
            echo "Actie mislukt";
        }
}
else
{
    // Enkele waardes zijn niet ingevuld
    echo "<p>U bent een waarde vergeten in het formulier</p>";
    echo "<a onclick='history.back()'>Terug</a>";
}
?>