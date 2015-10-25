<?php

include "db.php";

$id=$_GET['id'];
$delete = "delete from client where id = '$id'";
$result = $mysqli->query($delete);

$mysqli->close();

header("Location: index.php");

?>