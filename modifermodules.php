<html>
<head>
  <title> Page de Modification </title>
<?php
//connection:
include("connexion.php");
/*récupération de la variable d'URL,
qui va nous permettre de savoir quel
enregistrement modifier */
$id      = $_GET["ID"];
//requête SQL:
$sql     = "SELECT *
            FROM module
      WHERE ID = " . $id;
//exécution de la requête:
$requete = mysqli_query($conn, $sql);
//affichage des données:
//if( $result = mysql_fetch_object( $requete ) )
if ($row == @mysqli_fetch_array($requete)) {
    $id            = $row['ID'];
    $nom_du_module = $row["nomDuModule"];
    $cofficient    = $row["cofficient"];
    
?>
<script>
function sure(){
  return confirm("Vous etes sur de vouloire valider la modification ?");
}
</script>
</head>
<body bgcolor="#ffffff"><h1 ALIGN="center"> Page de Modification </h1>
  <TABLE border=2 width=25% align="center">
  <tr >
<TD width=50% BGCOLOR="#A6CAF0">
  <form name="form" ACTION="modifier1.php?" METHOD="GET" onsubmit="return sure()">
<h3>Vos coordonnées</h3>
<TABLE BORDER=0 >
<input type="hidden" size="20" name="id" value="<?php echo $id; ?>"> </TD></TR>
<TR><TD align=right> nom du module </TD><TD><input type="text" size="20" name="nomDuModule" value="<?php echo $nom_du_module; ?>"> </TD></TR>
<TR><TD align=right> cofficient</TD><TD><input type="text" size="20" name="cofficient" value="<?php echo $cofficient; ?>"> </TD></TR>
</TABLE>
<HR SIZE=3>
<center>
<input type="submit" name="enregistrer" value="Enregistrer">
<input type="reset" name="annuler" value="Annuler">
</center>
</form>
</TD></TR></TABLE>
<?php
} //fin if 
?></body></html>