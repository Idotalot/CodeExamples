<?php

// GET --> txtUsername
// GET --> txtChatReceived

// Controleren of de GET waardes niet leeg zijn
$boolTxtUsernameEmpty = empty($_GET["txtUsername"]);
$boolTxtChatReceivedEmpty = empty($_GET["txtChatText"]);

if( $boolTxtUsernameEmpty == true )
{
    echo "<p>Username niet opgegeven.</p>";
    // Todo voor Jullie: Toon een <a href voor "Ga Terug knop"
}
if($boolTxtChatReceivedEmpty == true)
{
    // Todo voor jullie: Kijken of je de telefoon kunt laten trillen doormiddel van Javascript via een website.
    echo "<p>Tekst niet opgegeven</p>";
}

// Chat versturen!
if($boolTxtUsernameEmpty == false && $boolTxtChatReceivedEmpty == false)
{
    // Correcte message + username ontvangen. Schrijf deze nu weg!
    $message = $_GET["txtUsername"] . " - " . date(format:"d-m-y h:m");
    $message .= "\n" . $_GET["txtChatText"];

    $file = fopen(filename: "data/chat.txt", mode: "w+");

    fwrite($file, $message);

    fclose($file);
}