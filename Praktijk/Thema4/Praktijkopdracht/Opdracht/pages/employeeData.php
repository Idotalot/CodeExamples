<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="../styles/stylesheet.css" rel="stylesheet">
</head>
<body>
<?php
    include ("../includes/nav.php")
?>
</body>
</html>

<?php
try // Poging tot uitvoering
{
    $pdo = new PDO("odbc:odbc2sqlserver");
}
catch (PDOException $e) // Fout afhandeling
{
    // Bij een error, toon dan deze melding
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    // Stop het script
    die();
}
//echo "database connectie gelukt<br>";
// Uitvoeren van een SQl query
try
{
    // Query schrijven
    $sql = "USE PraktijkOpdracht;";
    $pdo->query($sql);
    $sql = "SELECT * FROM 
    KuijpersEmployeeData;";
    // Query uitvoeren
    $result = $pdo->query($sql);
}
catch (PDOException $e)
{
    // Bij een error, toon dan deze melding
    echo "Er is een probleem met ophalen van KuijpersEmployeeData: " . $e->getMessage();
    // Stop het script
    die();
}

echo "<table>";
echo "<tr>";
echo "<th>Naam</th>";
echo "<th>Telefoonnummer</th>";
echo "<th>Email</th>";
echo "<th>Werkzaamheden</th>";
echo "</tr>";

// Door de results heen loopen via een while
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    echo "<tr>";
    echo    "<td>" . $row["Name"] . "</td>";
    echo    "<td>" . $row["Number"] . "</td>";
    echo    "<td>" . $row["Email"] . "</td>";
    echo    "<td>" . $row["Activities"] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>