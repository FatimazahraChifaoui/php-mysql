<?php

include("connexion.php");

if ($_POST) {

	$nomDuModule = $_POST["nomDuModule"];
	$cofficient  = $_POST["cofficient"];

	$sql = "INSERT INTO "modules" ("ID", "nomDuModule", "cofficient") VALUES (NULL, "$nomDuModule", "$cofficient");";

	//affichage des résultats, pour savoir si la modification a marchée:

	if ($conn->query($sql) === TRUE) {

		echo('L\'ajout à été correctement effectuée <a href="ajoutmodules.php">Retour au formulaire</a>');
		// Redirection vers la page de consultation

	}else{

		echo("L'ajout à échouée");

	}

	// déconnexion
	$conn->close();

}else{

	echo "Interdit";

}

?>