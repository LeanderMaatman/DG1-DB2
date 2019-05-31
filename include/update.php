<?php

include 'connection.php';

if(isset($_POST['update']))
{
$id = $_POST["id"];
$voornaam = $_POST["voornaam"];
$achternaam = $_POST["achternaam"];
$geboortedatum = $_POST["geboortedatum"];

$sql = "UPDATE eindopdracht SET voornaam='$voornaam', achternaam='$achternaam', geboortedatum='$geboortedatum' WHERE ID=$id";

if(mysqli_query($conn, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}
}

$conn->close();

?>
