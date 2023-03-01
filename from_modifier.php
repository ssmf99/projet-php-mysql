<html>
<head>
	<title>Ajouter une personne a la base</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="css/bootstrap-4.6.1-dist/css/bootstrap.min.css" type="text/css">
</head>
<body>
	
</body>
</html>

<?php
//recuperations de cni transmis via l'url
$id =$_GET['var'];
//connexiona la base et recuperation des donnees
$conn = mysqli_connect('localhost', 'root', '', 'thiago');
$requete = "SELECT * FROM produit WHERE num =$id";
$resultat=mysqli_query($conn,$requete)or die(mysqli_error($conn));
$ligne=mysqli_fetch_assoc($resultat);
?>

<h3> Modification des personnes <?php echo $ligne['num']; ?> </h3>

<!--Creation du formulaire dynamique et prechargement des donnees-->
<form action="modifier.php" method="post" class="bg-primary mr-3 p-2 col-md-2 text-center">
	<input type="hidden" name="num"  
	value="<?php echo $ligne['num'];?>"><br>;
	<input type="text" name="nom" 
	value="<?php echo $ligne['nom'];?>"><br>;
	<input type="text" name="commentaire" 
	value="<?php echo $ligne['commentaire'];?>"><br>;
	<input type="text" name="prix" 
	value="<?php echo $ligne['prix'];?>"><br>;
	<input type="text" name="categorie" 
	value="<?php echo $ligne['categorie'];?>"><br>;
	<input type="file" name="images" 
	value="<?php echo $ligne['images'];?>"><br>;
	<input type="submit" value="Enregistrer">
	<input type="reset" value="Annuler">
</form>