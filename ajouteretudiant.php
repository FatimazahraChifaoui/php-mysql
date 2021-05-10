<?php

include("connexion.php");

$nom = $_POST["nomcomplet"];
$cin = $_POST["cin"];
$datenaissance = $_POST["datedenaissance"];
$filiere = $_POST["filiere"];
$dateinsciption = $_POST["datedinscription"];
$niveau = $_POST["niveau"];
$modules = $_POST["modules"];

$sql = "INSERT INTO `etudiants` (`ID`, `nomcomplet`, `cin`, `datedenaissance`, `filiere`, `datedinscription`, `niveau`, `modules`) VALUES (NULL, '$nom','$cin','$datenaissance','$filiere','$dateinsciption','$niveau','$modules');";

	if ($conn->query($sql) === TRUE) {

		echo('L\'enregistrement est ajouté');

	}else{

		echo("L'ajout à échouée");

	}

	$conn->close();

?>

<a href="ajoutEtudiant.php">Retour au formulaire</a>