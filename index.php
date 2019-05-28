<html>
  <head>
    <meta>
    <title>database 2</title>
  </head>
  <body>


<?php
 include "database.php";

$sql = "SELECT id, voornaam, achternaam, geboortedatum FROM eindopdracht";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Naam: ". $row["voornaam"]. " " . $row["achternaam"] . " - Geboortedatum: ". $row["geboortedatum"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

?>

<form name="form" method="post" action="database.php" >
  <select name="id">
    <option value="1"><?php $row["id"] $row["voornaam"] $row["achternaam"] $row ["geboortedatum"]?></option>
    <option value="2"><?php $row["id"] $row["voornaam"] $row["achternaam"] $row ["geboortedatum"]?></option>
    <option value="3"><?php $row["id"] $row["voornaam"] $row["achternaam"] $row ["geboortedatum"]?></option>
  </select>

  </body>
</html>
