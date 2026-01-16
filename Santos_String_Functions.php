<!-- SANTOS, Jeorge Andrei Benedict M.
WD-201
16-01-26 -->

<?php
	$school = "Holy Angel University";
	$name = "Jeorge Santos";
	$remrep = "@School of Computing@";
	$isnum = 67;
	$reverse = "Evil i sa nameof a fo eman a sI live";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MDTM Hands-On Mod5</title>
<style>
    body {
        background-color: #cacaca;
        margin: 20px;
        font-family: Arial, sans-serif;
    }

    h2 {
        background-color: #dd6300;
        color: #ffffff;
        padding: 8px 12px;
        margin: 20px 0 5px 0;
        font-size: 18px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #ffffff;
        margin-bottom: 20px;
    }

    th, td {
        border: 1px solid #cfd8dc;
        padding: 8px 10px;
        text-align: left;
        vertical-align: top;
        font-size: 14px;
		border-radius: 4px;
    }

    th {
        background-color: #e9ecef;
        width: 35%;
    }

    td:nth-child(3) {
        width: 25%;
        color: #37474f;
		font-weight: bold;
    }
	footer {
		padding: 14px;
		text-align: center;
		background-color: #dd6300;
		color: #ffffff;
		font-size: 13px;
	}
</style>
</head>

<body>
	<h1>PHP Built-in Functions Showcase Table</h1>
	<!-- table 1 -->
	<h2>Changing the Case of Character</h2>
	<table>
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
	<h2>Counting Characters and Words</h2>
	<table>
		
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
	<h2>Removing and Replacing Characters</h2>
	<table>
		<tr>
			<th>Removing @ from left Showcase:</th>
			<td><?= ltrim($remrep, "@")?></td>
			<td>ltrim()</td>
		</tr>

		<tr>
			<th>Removing @ from right Showcase:</th>
			<td><?= rtrim($remrep, "@")?></td>
			<td>rtrim()</td>
		</tr>

		<tr>
			<th>Removing @ from left and right Showcase:</th>
			<td><?= trim($remrep, "@")?></td>
			<td>trim()</td>
		</tr>

		<tr>
			<th>Replaces Substring Showcase:</th>
			<td><?= str_replace("School", "Class", $remrep)?></td>
			<td>str_ireplace()</td>
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
	<h2>Other Built in Functions</h2>
	<table>
		
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
<footer>
    <p> MDTM Hands-On Module 5<br>Jeorge Andrei Benedict M. Santos - WD - 201<br></p>
</footer>

</html>
