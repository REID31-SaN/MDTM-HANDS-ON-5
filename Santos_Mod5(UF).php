<!-- SANTOS, Jeorge Andrei Benedict M.
WD-201
15-01-26 -->

<?php
    $school = "Holy Angel University";
    $name = "Jeorge Santos";
    $remrep = "@School of Computing@";
    $isnum = 67;
    $reverse = "Evil is a name of a foeman, as I live";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MDTM Hands-On Mod5</title>
</head>
<body>
    <!-- table 1 -->
    <table style="width:100%">
        <h2>Changing the Case of Character</h2>
        <tr>
            <th>Lowercase Showcase:</th>
            <td><?= strtolower($school)?></td>
            <td>strtolower()</td>
        </tr>

        <tr>
            <th>Uppercase Showcase:</th>
            <td><?= strtoupper($school)?></td>
            <td>strtoupper()</td>
        </tr>

        <tr>
            <th>Capitalized Showcase:</th>
            <td><?= ucwords($school)?></td>
            <td>ucwords()</td>
        </tr>
    </table>

    <!-- table 2 -->
    <table style="width:100%">
        <h2>Counting Characters and Words</h2>
        <tr>
            <th>String length Showcase:</th>
            <td><?= strlen($name)?></td>
            <td>strlen()</td>
        </tr>

        <tr>
            <th>String Word Count:</th>
            <td><?= str_word_count($name)?></td>
            <td>str_word_count()</td>
        </tr>
    </table>

    <!-- table 3 -->
    <table style="width:100%">
        <h2>Removing and Replacing Characters</h2>
        <tr>
            <th>Removing Whitespace from left Showcase:</th>
            <td><?= ltrim($remrep, "@")?></td>
            <td>ltrim()</td>
        </tr>

        <tr>
            <th>Removing Whitespace from right Showcase:</th>
            <td><?= rtrim($remrep, "@")?></td>
            <td>rtrim()</td>
        </tr>

        <tr>
            <th>Removing Whitespace from left and right Showcase:</th>
            <td><?= trim($remrep, "@")?></td>
            <td>trim()</td>
        </tr>

        <tr>
            <th>Replaces Substring Showcase:</th>
            <td><?= str_replace("School", "Class", $remrep)?></td>
            <td>str_replace()</td>
        </tr>

        <tr>
            <th>Ireplace Showcase:</th>
            <td><?= str_ireplace("school", "Class", $remrep)?></td>
            <td>str_replace()</td>
        </tr>

        <tr>
            <th>String Repeat Showcase:</th>
            <td><?= str_repeat($remrep, 2)?></td>
            <td>str_repeat()</td>
        </tr>
    </table>

    <!-- table 4 -->
    <table style="width:100%">
        <h2>Other Built in Functions</h2>
        <tr>
            <th>Round Showcase:</th>
            <td><?= round(6541.1019)?></td>
            <td>round($number)</td>
        </tr>

        <tr>
            <th>Round Showcase (Two Decimal Numbers):</th>
            <td><?= round(6541.1019, 2)?></td>
            <td>round($number, $places)</td>
        </tr>

        <tr>
            <th>Round Half Up:</th>
            <td><?= round(6.5, 0, PHP_ROUND_HALF_UP)?></td>
            <td>round ($number, $places, PHP_ROUND_HALF_UP)</td>
        </tr>

        <tr>
            <th>Round Half Down:</th>
            <td><?= round(6.5, 0, PHP_ROUND_HALF_DOWN)?></td>
            <td>round ($number, $places, PHP_ROUND_HALF_DOWN)</td>
        </tr>

        <tr>
            <th>Random Number:</th>
            <td><?= mt_rand(5,10)?></td>
            <td>mt_rand()</td>
        </tr>

        <tr>
            <th>Square Root:</th>
            <td><?= sqrt(25)?></td>
            <td>sqrt()</td>
        </tr>

        <tr>
            <th>Format Number:</th>
            <td><?= number_format(105012.145002, 2, ',', ' ')?></td>
            <td>number_format()</td>
        </tr>

        <tr>
            <th>Format Number:</th>
            <td><?= number_format(105012.145002, 2, ',', ' ')?></td>
            <td>number_format()</td>
        </tr>

        <tr>
            <th>strrev:</th>
            <td>- Evil is a name of a foeman, as I live <br> - <?= strrev($reverse)?></td>
            <td>strrev($string)</td>
        </tr>
    </table>
</body>
</html>
