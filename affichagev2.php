
<?php
//onnexion au serveur de BD et choix de la base
$conn = mysqli_connect('localhost', 'root', '', 'thiago');
if(mysqli_connect_errno()){
	echo 'Echec connexion <br>';
	echo "Messaged'erreur : ",mysqli_connect_error(); 
}
else{//debut bloc des traitements des donnees sur la BD
		echo 'connexion reussie! <br>';

		//requete SQL
		$requete = "select * from produit";
		//execution de la requete SQL
		$resultats = mysqli_query($conn, $requete) or die(mysqli_error());

		//affichage du resultat(affichage formater)
		echo "<table border >";
		echo "<tr><th>num</th><th>nom</th><th>commentaire</th><th>prix</th><th>categorie</th><th>images</th></tr>";
		while($ligne = mysqli_fetch_assoc($resultats)){
			echo "<tr>";
			echo "<td>".$ligne['num']."</td>
			<td>".$ligne['nom']."</td>
			<td>".$ligne['commentaire']."</td>
			<td>".$ligne['prix']."</td>
			<td>".$ligne['categorie']."</td>
			<td>".$ligne['images']."</td>
			<td><a href='supprimer.php?var=" .$ligne['num']."'>supprimer</a></td>
			<td><a href='show.php?var=" .$ligne['num']."'>show</a></td>
			<td><a href='from_modifier.php?var=".$ligne['num']."'>modifier</a></td>";
			echo "</tr>";
		}
			echo "</table>";
			echo "<a href='formulaire.html'>Inserer un autre produit</a>";

}//fin du else
?>
<html>
<head>
	<title>Ajouter une personne a la base</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="css/bootstrap-4.6.1-dist/css/bootstrap.min.css" type="text/css">
</head>
<body>
<div class="container text-center">
			<button type="button" class="btn btn-lg  m-2 p-2 pt-3 mb-3">
				<a href="formulaire.html" class="text-white ">
				INSERER UNE AUTRE PERSONNE</a></button>	
			</div>
</div>
</body>
</ht>


