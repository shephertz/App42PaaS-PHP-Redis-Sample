<?php 
require "DBManager.php";

$name = $_POST["name"]; 
$client = new DBManager();
$client->insert($name);

header("Location: home.php");


?>