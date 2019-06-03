<?php
include_once 'connection.php';

$id = $_POST['ID'];

if (isset($id)) {
    $sql = "DELETE FROM `eindopdracht` WHERE ID = '$id';";
    mysqli_query($conn, $sql);
}

header("Location: ../index.php?submit=succes");
$conn->close();
