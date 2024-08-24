<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Styles/compte.css" type="text/css">
</head>
<body>
<form  method="post" enctype="multipart/form-data"action="compte_traitement.php" method="post">
            <label for="">Nom</label>
            <input type="text" name="login" required> <br><br>

            <label for="" >Prénom</label>
            <input type="text" name="prenom" required> <br><br>

            <label for="">Adresse Mail</label>
            <input type="text" id="start" name="adresse"> <br><br>

            <label for="">Mot De Passe</label> 
            <input type="text" name="passe" required> <br><br>

            <label for="image">Photo </label>
	        <input type="file" name="image" required><br><br>
            <input type="submit" name="enregistrer" value="Enregistrer" class="submit">
            
            
        </form>
</body>
</html>