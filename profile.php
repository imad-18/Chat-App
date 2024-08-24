<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="Styles/profile.css" type="text/css">
<style type="text/css">
   label {
  width: 110px;
  display: inline-block;
  margin: 6px;
}
</style>
</head>
<body>
<ul>
    <li><a href="boite_reception.php">Boite de récéption</a></li>
    <li><a href="envoie.php">Envoyer un message</a></li>
    <li><a href="boite_envoie.php">Messages envoyés</a></li>
    <li><a href="profile.php"> Modifier mon profile</a></li>
    <li><a href="deconnexion.php">Se déconnecter</a></li>
</ul>

<form  method="post" enctype="multipart/form-data"action="compte_traitement.php" method="post">

            <label for="" >Nom</label>
            <input type="text" name="nom" required> <br><br>
            <label for="" >Prénom</label>
            <input type="text" name="prenom" required> <br><br>
        
            <label for="">Adresse Email</label>
            <input type="date" id="start" name="adresse"> <br><br>

            <label for="">Mot De Passe</label> 
            <input type="text" name="passe" required> <br><br>

            <label for="image">Photo </label>
	        <input type="file" name="image" required><br><br>
            <input type="submit" name="enregistrer" value="Enregistrer" class="submit">
            
            
        </form>
</body>
</html>