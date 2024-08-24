<?php
include ("dbAuth/connexion.php");
session_start();


    if(isset($_FILES['image']) and $_FILES['image']['error']==0)
    {
        $dossier= 'photos/';
        $temp_name=$_FILES['image']['tmp_name'];
        if(!is_uploaded_file($temp_name))
        {
        exit("le fichier est untrouvable");
        }
        if ($_FILES['image']['size'] >= 1000000){
            exit("Erreur, le fichier est volumineux");
        }
        $infosfichier = pathinfo($_FILES['image']['name']);
        $extension_upload = $infosfichier['extension'];
        
        $extension_upload = strtolower($extension_upload);
        $extensions_autorisees = array('png','jpeg','jpg');
        if (!in_array($extension_upload, $extensions_autorisees))
        {
        exit("Erreur, Veuillez inserer une image svp (extensions autorisées: png)");
        }
        $nom_photo=$_POST["login"].".".$extension_upload;
        if(!move_uploaded_file($temp_name,$dossier.$nom_photo)){
        exit("Problem dans le telechargement de l'image, Ressayez");
        }
        $ph_name=$nom_photo;
    }
    else{
        $ph_name="SANS_IMAGE.png";
    }    
  
    
    $nom=$_POST["login"];
    $prenom=$_POST["prenom"];
    $adresse=$_POST["adresse"];
    $passe=$_POST["passe"];


    $sql="INSERT INTO `utilisateurs`(`Nom`, `Prenom`, `Email`, `MotDePasse`, `Photo`) 
          VALUES ('$nom','$prenom','$adresse','$passe','$ph_name')";
$res= mysqli_query($link, $sql);
if ($res==false) {
    
    header("location:login_error.php");
}
else{
   header("location:index.php");
}



?>