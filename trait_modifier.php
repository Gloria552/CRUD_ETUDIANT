<?php
include'connexion.php';


if(isset($_POST['submit']))
{
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $statut=$_POST['statut'];
    $photo = $_FILES['photo'];
    $nomfichier = basename($photo['name']);
    $fichierTemp = $photo['tmp_name'];
    $dossier = "image/";
    $cheminDestination = $dossier . $nomfichier;
    $requete="UPDATE `eleve` SET `prenom`='$prenom'',`nom`='$nom',`email`='$email',`photo`='$nomfichier',`statut`='$statut'  WHERE id=$id";    
    $execute= mysqli_query($connect, $requete);
    if ($execute) {

        $message= "votre enregistrement a été modifié avec succes !";
        header("location:index.php?message=$message");
    }
}
?>