<?php 
include("config.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM ti2e WHERE id=$id");

header("Location:index.php");

?>