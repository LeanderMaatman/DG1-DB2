<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db2-eindopdracht";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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
