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
    

    
    ?>

<html>
<head>
	<title>Ajouter un apprenant a la base</title>
	<link rel="stylesheet" href="css/bootstrap-4.6.1-dist/css/bootstrap.min.css" type="text/css">
</head>
<body>
	<div class="container">
<h1><center>Bienvenue sur notre pages d'accueil</center></h1>
		<div class="row">
     
			<div class="col-6">
				<img src="images/creer-une-boutique-en-ligne-e-commerce.jpg" class="rounded float-center">
			</div>
			<div class="container py-5">
				<div class="row">
        <?php
      while($ligne = mysqli_fetch_assoc($resultats)){
      ?>
					<div class="col-md-6">
			<div class="card" style="width: 18rem;">
  <img src='images/<?php echo $ligne['images'];?>' class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $ligne['prix'];?>fr</h5>
    <p class="card-text">Des ceintures de  haute qualité en cuire provenant de ngaye</p>
    <a href="#" class="btn btn-primary">A savoir plus</a>
  </div>
  </div>
  </div>
  <?php
  }
}
  
  ?>
			<div class="container text-center">
			<button type="button" class="btn btn-lg bg-primary m-2 p-2"><a href="formulaire.html" class="text-white">
				Vous pouvez visiter nos pages</a></button>	
			</div>
</body>
</html>