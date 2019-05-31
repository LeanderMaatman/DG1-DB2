<html>
<head>
	<meta>
	<title>Eindopdracht - Database 2</title>
	<?php require 'include/connection.php' ?>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<h2>Gegevens in database aanpassen...</h2>

	<form method="post" action="include/update.php">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>

<?php
$sql = "SELECT id, voornaam, achternaam, geboortedatum FROM eindopdracht";
$result = mysqli_query($conn, $sql);

	while($row = mysqli_fetch_assoc($result)) {

$id = $row['id'];
$voornaam = $row['voornaam'];
$achternaam = $row['achternaam'];
$geboortedatum = $row['geboortedatum'];

?>
<tr>
<td width="100">ID: </td>
<td><input name="id" type="text" readonly="true" value="<?=$id?>"></td>
</tr>
<tr>
<td width="100">Voornaam: </td>
<td><input name="voornaam" type="text" required="true" value="<?=$voornaam?>"></td>
</tr>
<tr>
<td width="100">Achternaam: </td>
<td><input name="achternaam" type="text" required="true" value="<?=$achternaam?>"></td>
</tr>
<tr>
<td width="100">Geboortedatum: </td>
<td><input name="geboortedatum" type="text" required="true" value="<?=$geboortedatum?>"></td>
</tr>
<tr>
<td width="0"></td>
<td><hr></td>
</tr>

<?php } ?>
<tr>
<td width="100"> </td>
<td><input name="update" type="submit" id="update" value="Database updaten"></td>
</tr>
</table>
</form>

</body>
</html>
