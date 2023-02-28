<?php
// echo $_GET['id'];
// print_r($_COOKIE);
// die();

if(!isset($_GET['id']))
{
    header('LOCATION: index.php');
    die();
}
require_once('connection.php');
$id=$_GET['id'];

$result=$connection->query("DELETE FROM `tasks` WHERE id=$id");
header('LOCATION: index.php');
?>