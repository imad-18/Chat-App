<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boite de Récéption</title>
    <link rel="stylesheet" href="Styles/boite_reception.css" type="text/css">
</head>
<body>
<ul>
    <li><a href="boite_reception.php">Boite de récéption</a></li>
    <li><a href="envoie.php">Envoyer un message</a></li>
    <li><a href="boite_envoie.php">Messages envoyés</a></li>
    <li><a href="profile.php"> Modifier mon profile</a></li>
    <li><a href="deconnexion.php">Se déconnecter</a></li>
</ul>

<?php

//CVcorr_prof
session_start();
include("dbAuth/connexion.php");
$Id_utilisateur = $_SESSION['Id_utilisateur'];
$sql = "select * from `utilisateurs` where IdUtilisateur='$Id_utilisateur'";
$result = mysqli_query($link,$sql);
$data=mysqli_fetch_assoc ($result);
//$_SESSION['IdUtilisateur']=$data['IdUtilisateur'];
echo "<p>".$data['Nom']." ".$data['Prenom']."</p><br>";
echo "<p><img src=photos/".$data['Photo']."> </p>";



?>
<H2>Boite de Récéption</H2>
<table>
    <tr>
        <th>Expéditeur</th>
        <th>Objet</th>
        <th>Message</th>


        <?php

        $requette = "SELECT 
        M.IdMessage, 
        U.Nom AS ExpediteurNom, 
        U.Prenom AS ExpediteurPrenom,
        M.Sujet, 
        M.Contenu 
        FROM 
        Messages M
        JOIN 
        Utilisateurs U ON M.IdExpediteur = U.IdUtilisateur
        WHERE 
        M.IdDestinataire = '".$Id_utilisateur."'  ORDER BY M.IdMessage DESC " ;
        $resultat=mysqli_query($link,$requette);
        if ($resultat->num_rows > 0) { //<->mysqli_num_rows($resultat)

            while ($donnees=mysqli_fetch_assoc($resultat)) {
                echo "<tr>";
                echo "<td>".$donnees['ExpediteurNom']." ".$donnees['ExpediteurPrenom']."</td>";
                echo "<td>".$donnees['Sujet']."</td>";
                echo "<td>".$donnees['Contenu']."</td>";
                echo "</tr>";                             
            }
        }

    
        ?>

</table>
</body>
</html>