<?php

include_once 'connection.php';

$ID = $_POST['ID'];
$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$geboortedatum = $_POST['geboortedatum'];

$sql = "UPDATE `eindopdracht` SET voornaam = '$voornaam', achternaam = '$achternaam', geboortedatum = '$geboortedatum' WHERE ID = '$ID';";

if (isset($ID)) {
    mysqli_query($conn, $sql);
}

header("Location: ../index.php?submit=succes");
