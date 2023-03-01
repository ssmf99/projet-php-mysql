<?php 
//recuperation des donnees du formulaire
$num =$_POST['num'];
$nom =$_POST['nom'];
$commentaire =$_POST['commentaire'];
$prix =$_POST['prix'];
$categorie =$_POST['categorie'];
$images =$_POST['images'];

//connexion a la BD et execution  de la requete de mise a jour
$conn = mysqli_connect('localhost', 'root', '', 'thiago');
$req="UPDATE produit
		SET nom = '$nom',
		commentaire= '$commentaire',
		prix = '$prix',
		categorie = '$categorie',
		images = '$images'
		WHERE num = $num";
$resultat=mysqli_query($conn,$req)or die(mysqli_error($conn));
header('Location:affichagev2.php');
echo "Modification effectuer <br>";
echo "<a href='affichagev2.php'>retourner a la liste</a><br>";
?>