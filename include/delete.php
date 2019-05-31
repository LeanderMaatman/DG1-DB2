<?php
iclude_once "conection.php";

$id = $_POST["ID"];

if (isset($id)) {
  $sql = "DELETE FROM 'eindopdracht' WHERE ID = '$id'';";
  mysqli_query($conn, $sql);
}

header ("location: ../index.php?submit=succes");
$conn->close();
 ?>
