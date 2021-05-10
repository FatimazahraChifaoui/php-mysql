<html>
<head>
  <title> Page de Modification </title>
</head>
<?php
//connection:
include("connexion.php");
/*récupération de la variable d'URL,
qui va nous permettre de savoir quel
enregistrement modifier */
$id      = $_GET["id"];
//requête SQL:
$sql     = "SELECT *
            FROM form
      WHERE id = " . $id;
//exécution de la requête:
$requete = mysqli_query($conn, $sql);
//affichage des données:
//if( $result = mysql_fetch_object( $requete ) )
if ($row == @mysqli_fetch_array($requete)) {
    $id                 = $row['ID'];
    $nom_complet        = $row["nomcomplet"];
    $cin                = $row["cin"];
    $date_de_naissance  = $row["datedenaissance"];
    $filiere            = $row["filiere"];
    $date_d_inscription = $row["datedinscription"];
    $niveau             = $row["niveau"];
    $module             = $row["module"];   
?>
<script>
  function sure(){
    return confirm("Vous etes sur de vouloire valider la modification ?");
  }
</script>
<body bgcolor="#ffffff"><h1 ALIGN="center"> Page de Modification </h1>
  <TABLE border=2 width=25% align="center">
  <tr >
<TD width=50% BGCOLOR="#A6CAF0">
  <form name="form" ACTION="modifier1.php?" METHOD="GET" onsubmit="return sure()">
<h3>Vos coordonnées</h3>
<TABLE BORDER=0 >
<input type="hidden" size="20" name="id" value="<?php echo $id; ?>"> </TD></TR>
<TR><TD align=right> nom complet</TD><TD><input type="text" size="20" name="nom complet" value="<?php echo $nom_complet; ?>"> </TD></TR>
<TR><TD align=right> cin</TD><TD><input type="text" size="20" name="cin" value="<?php echo $cin; ?>"> </TD></TR>
<TR><TD align=right> date de naissance</TD><TD><input type="text" size="20" name="date de naissanceL" value="<?php echo ($date_de_naissance);?>"> </TD></TR>
<TR><TD align=right> filiere </TD><TD><input type="text" size="20" name="filiere" value="<?php echo $filiere ;?>"> </TD></TR>
<TR><TD align=right> date d inscription </TD><TD><input type="text" size="20" name="date d inscription" value="<?php echo $date_d_inscription; ?>"> </TD></TR>
<TR><TD align=right> niveau</TD><TD><input type="text" size="20" name="niveau" value="<?php echo $niveau; ?>"> </TD></TR>
<TR><TD align=right> module</TD><TD><input type="text" size="20" name="module" value="<?php echo $module; ?>"> </TD></TR>
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
?>
</body>
</html>