<html>
<head>
	<title>suppression</title>
</head>
<body>
<?php
include("connexion.php");
//récupération de la variable d'URL,
//qui va nous permettre de savoir quel enregistrement supprimer:

	$id  = $_GET["ID"] ; 
	//requête SQL:
	$sql = "DELETE 
	       FROM module
		    WHERE ID = ".$id ;	    
	//exécution de la requête:
	$requete = mysqli_query($conn, $sql) ;
	/*affichage des résultats, pour savoir si la suppression a marchée: */
	if($requete){
		echo("La suppression à été correctement effectuée");
	}else{
		echo("La suppression à échouée");
	}
}

?>
</body>
</html>