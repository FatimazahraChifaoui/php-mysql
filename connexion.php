<?php

$servername = "localhost";
$dbname = "ecole";
$username = "root";
$password = ";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Échec de la connexion: " . $conn->connect_error);
} 

// echo "Connexion réussie";

?>