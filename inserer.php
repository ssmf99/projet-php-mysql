<?php 
//recuperation des donnees du fromulaire
$nom = $_POST['nom'];
$commentaire =$_POST['commentaire'];
$prix =$_POST['prix'];
$categorie =$_POST['categorie'];

//ajout image
$images =$_FILES['images']['name'];
$targetdir ="images/";
$filename=basename($_FILES["images"]["name"]);
$targetfilepath=$targetdir .$filename;
move_uploaded_file($_FILES["images"]["tmp_name"], $targetfilepath);
//connexion au serveur de BD de la base
$conn = mysqli_connect('localhost', 'root', '', 'thiago');
//creation de la requete SQL pour inserer les donnes
$req="INSERT INTO produit(nom,commentaire, prix, categorie, images)VALUES
('$nom', '$commentaire', '$prix', '$categorie', '$images')";
	echo $req. '<br>';
//execution de la requete
$resultat=mysqli_query($conn,$req)or die(mysqli_error($conn));
if($resultat){
	header('Location:affichagev2.php');
	echo "Insertion reussie! <br>";
	echo "<a href='affichagev2.php'>Afficher la liste?</a>";
	echo "<a href='formulaire.html'>Inserer un autre produit</a>";
}
?>