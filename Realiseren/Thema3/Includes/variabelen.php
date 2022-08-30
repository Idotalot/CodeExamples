<?php
    date_default_timezone_set('Europe/Amsterdam');
    $date = date("d-m-y");
?>

<footer>
    <p>
        <?php
            if (isset($_COOKIE["userCountryCode"]) == true)
            {
                $countryCode = $_COOKIE["userCountryCode"];
                echo "<img src='/Realiseren/Thema3/Images/flags/$countryCode.png'> ";
            }
            else
            {
                echo "<a href='/Realiseren/Thema3/Hoofdstuk6/Oefeningen/Oefening%206.1'>Geef een land op </a>";
            }
            echo "&copy;";

            if (isset($_COOKIE["userUsernameCookie"]) == true)
            {
                $usernameCookie = $_COOKIE["userUsernameCookie"];
                echo " $usernameCookie";
            }
            else
            {
                echo "<a href='/Realiseren/Thema3/Hoofdstuk6/Oefeningen/Oefening%206.1'> Onbekende Gebruiker</a>";
            }
            echo " | IO1S1AV | " . $date
        ?>
    </p>
</footer>