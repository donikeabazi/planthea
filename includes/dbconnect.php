<?php 
$user = 'root';
$pass = '';
$db = 'planthea';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect!");


echo "Successful connection!";
?>