
<html>
<head>
	<meta charset="utf-8">
	<title>Eindopdracht - Database 2</title>

	<?php require 'include/connection.php' ?>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<?php date_default_timezone_set('Europe/Amsterdam') ?>

	<style>
	body {
	background: rgb(255,0,0);
	background: linear-gradient(90deg, rgba(255,0,0,1) 0%, rgba(255,255,255,0) 50%, rgba(0,255,55,1) 100%);
	}
	</style>
</head>
<body>

<br />

<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="header">
			<center><h1>
			Drenthe College | Database, Level 2
			</h1></center>
			<hr>
			</div>
		</div>
	</div>
</div>

<div class="container">
  <div class="row">
    <div class="col-5">
	  <h2>Huidige gegevens: </h2>
<?php
$sql = "SELECT id, voornaam, achternaam, geboortedatum FROM eindopdracht";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {

echo "<table border='1'>
<tr>
<th>ID: </th>
<th>Voornaam: </th>
<th>Achternaam: </th>
<th>Geb. datum: </th>
<th>Leeftijd: </th>
</tr>";

while($row = mysqli_fetch_assoc($result)) {

  require 'include/age_calc.php';

  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['voornaam'] . "</td>";
  echo "<td>" . $row['achternaam'] . "</td>";
  echo "<td>" . $row['geboortedatum'] . "</td>";
  echo "<td>$years jaar oud</td>";
  echo "</tr>";
  }
echo "</table>";

} else {
    echo "Er bevinden zich (nog) geen entries in de database...";
	echo "U dient eerst gegevens toe te voegen voor deze hier verschijnen!";
}

$conn->close();

?>
</div>
<div class="col-2">
    <div  class="insert">
        <h2 class="dbupdate">Toevoegen: </h2>
            <form class="formInsert" action="include/insert.php" method="POST">
				<input type="number" name="ID" placeholder="ID" disabled="true"><br />
                <input type="text" name="voornaam" placeholder="Voornaam"><br />
                <input type="text" name="achternaam" placeholder="Achternaam"><br />
                <input type="text" name="geboortedatum" placeholder="Geboortedatum"><br /><br />
                <input class="submit" type="submit" name="submit" value="Toevoegen">
            </form>
    </div>
</div>
<div class="col-2">
    <div  class="edit">
        <h2 class="dbupdate">Aanpassen: </h2>
            <form class="formEdit" action="include/edit.php" method="POST">
                <input type="number" name="ID" placeholder="ID"><br />
                <input type="text" name="voornaam" placeholder="Voornaam"><br />
                <input type="text" name="achternaam" placeholder="Achternaam"><br />
                <input type="text" name="geboortedatum" placeholder="Geboortedatum"><br /><br />
                <input class="submit" type="submit" name="submit"value="Aanpassen">
            </form>
    </div>
</div>
<div class="col-2">
    <div  class="remove">
        <h2 class="dbupdate">Verwijderen: </h2>
            <form class="formRemove" action="include/remove.php" method="POST">
                <input type="number" name="ID" placeholder="ID"><br />
				<input type="text" name="voornaam" placeholder="Voornaam" disabled="true"><br />
                <input type="text" name="achternaam" placeholder="Achternaam" disabled="true"><br />
                <input type="text" name="geboortedatum" placeholder="Geboortedatum" disabled="true"><br /><br />
                <input class="submit" type="submit" name="submit" value="Verwijderen">
            </form>
    </div>
</div>
<!--<div class="col-12">
    <div  class="dbcheck">
		<br />
        <h2 class="dbcheck">Database Check: </h2>
		<iframe src="http://localhost/phpmyadmin" height="500" width="1110"></iframe>
	</div>
</div>-->
	</div>
		</div>

<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="CopyRight">
			<br />
			<hr>
			<center><h4>
			Copyright &copy; <i>Falco Hospes</i> en <i>Leander Maatman</i> | 31 mei 2019
			</h4></center>
			<center><h4>
			Drenthe College | Level 2, Domein B en DG
			</h4></center>
			<hr>
			<br />
			</div>
		</div>
	</div>
</div>

</body>
</html>
