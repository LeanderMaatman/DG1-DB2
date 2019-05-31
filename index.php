
<html >
<head>
	<meta>
	<title>Eindopdracht - Database #2</title>

	<?php require 'include/connection.php' ?>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<?php date_default_timezone_set('Europe/Amsterdam') ?>
</head>
<body>

<h2>Gegevens opvragen vanuit de Database..</h2>

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
}

$conn->close();

?>

<br />
<button onclick="window.location.href = 'Add.php'">Add</button>
<button onclick="window.location.href = 'edit.php'">Edit</button>
<button onclick="window.location.href = 'delete.php'">Delete</button>
<button onclick="window.location.reload() = '#'">Refresh page</button>


</body>
</html>
