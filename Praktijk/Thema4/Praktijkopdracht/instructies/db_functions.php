<?php

    $pdo = null;

    // Starten van een DB connectie
    function startConnection()
    {
        global $pdo;
        // Open de database connectie en ODBC driver
        try
        {
            $pdo = new PDO("odbc:odbc2sqlserver");

            //Selecteren van een specifieke database
            $pdo->query("USE PraktijkOpdracht");
        }
        catch (PDOException $e) {
            echo "<h1>Database error</h1>";
            echo  $e->getMessage();
            die();
        }
    }

    //Uitvoeren van een query
    function executeQuery($sql)
    {
        global $pdo;
        // Uitvoeren van een SQL Query
        try
        {
            // Query uitvoeren
            $result = $pdo->query($sql);
            return $result;
        }
        catch (PDOException $e)
        {
            echo 'Er is een probleem met het ophalen van de gegevens: ' . $e->getMessage();
            die();
        }
    }
