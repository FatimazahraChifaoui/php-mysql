<?php

//connection:
include("connexion.php");

//récupération des valeurs des champs:

	$id = $_GET["ID"];
	$nom_du_module = $_GET["nomdumodule"];
	$cofficient = $_GET["cofficient"];

	//création de la requête SQL:
	$sql = "UPDATE module
	        SET nom du module = '$nom_du_module', cofficient = '$cofficient'
	        WHERE  ID = '$id'";

	//exécution de la requête SQL:
	mysqli_query($conn, $sql);

	//affichage des résultats, pour savoir si la modification a marchée:
	$requete = mysql_query($sql) or die($conn->error);

	if($requete){
		echo("La modification à été correctement effectuée");
	}else{
		echo("La modification à échouée");
	}

// On revient à la page de consultation

?>