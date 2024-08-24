<?php 
include("connexion.php");

$login = $_POST['login'];
$password = $_POST['passe'];

if (empty($login) or empty($password)) {
    header('Location: login_error.php');
}
else{
$sql = "select * from `utilisateurs` where Email='".$login."'";
$result = mysqli_query($link,$sql);  //used to perform query on database
$row = mysqli_fetch_assoc($result);

if($row['MotDePasse']==$password){
	session_start();
    $_SESSION['login']=$row['Email'];
    $_SESSION['nom']=$row['Nom'];
    $_SESSION['Id_utilisateur']=$row['IdUtilisateur'];
    header("Location: boite_reception.php");
    }
    else
{     header('Location: login_error.php');}
    
}


?>