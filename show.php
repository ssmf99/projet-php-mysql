<?php
//recuperations de cni transmis via l'url
$id =$_GET['var'];
//connexiona la base et recuperation des donnees
$conn = mysqli_connect('localhost', 'root', '', 'thiago');
$requete = "SELECT * FROM produit WHERE num =$id";
$resultat=mysqli_query($conn,$requete)or die(mysqli_error($conn));
$ligne=mysqli_fetch_assoc($resultat);

//var_dump($ligne);
echo "recuperation effectuer <h1>" .$ligne['num']."</h1>";
echo "<h1>" .$ligne['nom']."</h1>";
echo "<h1>" .$ligne['commentaire']."</h1>";
echo "<h1>" .$ligne['prix']."</h1>";
echo "<h1>" .$ligne['categorie']."</h1>";
echo "<h1>" .$ligne['images']."</h1>";
echo "<a href='affichagev2.php'>retourner la liste des produits</a>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="images/<?php echo $ligne['images'];?>"> 
</body>
</html>