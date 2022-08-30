<?php
//$i = 1;
//$increase = true;
//while($i >= 1)
//{
//    // Tekenen van de pyramide
//    for($count = 1;  $count <= $i; $count++)
//    {
//        echo $count;
//    }
//    echo "<br>";
//
//    if($increase == true)
//    {
//        $i++;
//    }
//    else
//    {
//        $i--;
//    }
//
//    //$increase bepalen (omslagpunt)
//    if($i == 9)
//    {
//        $increase = false;
//    }
//}

//$increase = true;
//for($i = 1; $i >= 1;)
//{
//    // Tekenen van de pyramide
//    for($count = 1;  $count <= $i; $count++)
//    {
//        echo $count;
//    }
//    echo "<br>";
//
//    if($increase == true)
//    {
//        $i++;
//    }
//    else
//    {
//        $i--;
//    }
//
//    //$increase bepalen (omslagpunt)
//    if($i == 9)
//    {
//        $increase = false;
//    }
//}

$i = 1;
$increase = true;
while($i >= 1)
{
    // Tekenen van de pyramide
    for($count = 1;  $count <= $i; $count++)
    {
        echo $count;
    }
    echo "<br>";

    if($increase == true)
    {
        $i++;
    }
    else
    {
        $i;
    }

    //$increase bepalen (omslagpunt)
    if($i == 9)
    {
        $increase = false;
    }
}
?>


