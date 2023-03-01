<?php 
$id =$_GET['var'];
//Connexion au serveur de BD
$conn = mysqli_connect('localhost', 'root', '', 'thiago');
//Creation de la requete de suppression 
$req ="DELETE FROM produit WHERE num =$id";
//echo "<br>$req";
$resultat = mysqli_query($conn, $req)or die(mysqli_error($conn));
if($resultat){
	echo "Suppression reussie! <br>";
	header('Location:affichagev2.php');
	echo "<a href='afficher.php'>Afficher la liste</a><br>";
}
else{
	echo " Echec de la Suppression ";
}
?>