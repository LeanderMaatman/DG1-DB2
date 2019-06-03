<?php
include_once 'connection.php';

$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$geboortedatum = $_POST['geboortedatum'];

if (isset($voornaam)&&isset($achternaam)&&isset($geboortedatum)) {

$sql = "INSERT INTO eindopdracht (voornaam, achternaam, geboortedatum) VALUES ('$voornaam', '$achternaam', '$geboortedatum')";

mysqli_query($conn, $sql);
}

header("Location: ../index.php?submit=succes");
$conn->close();
?>
