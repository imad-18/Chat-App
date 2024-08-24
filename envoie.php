<?php
include("connexion.php");
session_start();

//Check User Authentication; by verifying the existence of 'id_user' in the session.
$Id_utilisateur = $_SESSION['Id_utilisateur'];   // !!!! // I need id_user of 'this' session (this time)


//Handle Message Submission:
if (isset($_POST['submit'])) {
    $message = mysqli_real_escape_string($link, $_POST['msg']); 
    //insertion of the message into the 'messages' table associated with the user
    $query_insert = "INSERT INTO `messages`(`Contenu`) VALUES ('$message')";
    $result_insert = mysqli_query($link, $query_insert);
    //After inserting the message, it redirects the user to 'liste.php'.
    header('Location: liste.php');
    exit();
}

// Fetch languages from the database to use ot later in moncv
$sql = "SELECT * FROM utilisateurs";
$result = mysqli_query($link,$sql);

if($result){
    $destinataire= "";
    while($rows = mysqli_fetch_assoc($result) ){
        $destinataire.="<option value='" .$rows['IdUtilisateur']."'>". $rows['Nom']. "</option>";
    }
}else{
    $destinataire = "<option value=''>Erreur de chargement des villes</option>";
}
?>

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Styles/boite_reception.css" type="text/css">
    <style>
        .container{
            position: relative;
        }
        .top-right{
            position: absolute;
            top: 0px;
            right: 50px;
        }
        .right-align{
            text-align: right;
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
<br><br>

    <form action="envoie.php" method="post">
        <label for="">Destinataire</label>
        <select name="ville" required>
        <?php
                    echo $destinataire ;
        ?>
        </select><br><br>
        <label for="">Objet</label> 
        <input type="text" name="objet" required> <br><br>
        <div>
            <label for="msg">Message</label>
            <input type="text" name="msg" style="width: 300px;" maxlength="400">
        </div>
        <br>
        <div>
            <input type="submit" name="submit" value="Envoyer"><br><br>
            <a href="deconnexion.php" >Déconnexion</a> 
        </div>
    </form><br>
</body>
