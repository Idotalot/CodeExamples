<?php
    // Form.php

?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>

        <h1>Inschrijfformulier Huurvereniging De Scheve Gevel</h1>


        <form method="get" action="result.php">
            <table>
                <tr>
                    <td>
                        <label>Voornaam</label>
                    </td>
                    <td>
                        <input type="text" name="txtVoornaam" required minlength="3">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Geslacht</label>
                    </td>
                    <td>
                        <select name="slcGeslacht">
                            <option value="m">Man</option>
                            <option value="v">Vrouw</option>
                            <option value="x">Mentaal Gehandicapt</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Getrouwd</label>
                    </td>
                    <td>
                        <input type="radio" name="radGetrouwd" value="Yes">Ja
                        <input type="radio" name="radGetrouwd" value="No">Nee
                        <input type="radio" name="radGetrouwd" value="Engaged">Verloofd
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Werkzaam</label>
                    </td>
                    <td>
                        <input type="checkbox" name="chkWerkzaam" value="Yes">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Versturen">
                        <button>Versturen</button>
                    </td>
                </tr>
            </table>
        </form>

    </body>
</html>