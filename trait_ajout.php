<?php
include 'connexion.php';

/*  echo "<pre>";
print_r($_POST);
print_r($_FILES);
echo "</pre>";
exit();  */


if(isset($_POST['submit'])) 
{
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $statut = $_POST['statut'];
    $photo=$_FILES['photo'];
    $nomfichier=$photo['name'];
    $fichierTemp=$photo['tmp_name'];
    $dossier="image/";
    $cheminDestination=$dossier.$nomfichier;
    move_uploaded_file($fichierTemp,$cheminDestination);

    if (move_uploaded_file($fichierTemp, $cheminDestination)) {
        // continue l'insertion
    } else {
        echo "Erreur lors du téléchargement de l'image.";
    }

            // Insérer uniquement le nom du fichier dans la base de données
            $requete = "INSERT INTO `eleve`(`prenom`, `nom`, `email`, `photo`, `statut`)
                        VALUES ('$prenom', '$nom', '$email', '$nomfichier','$statut')";

            $execute = mysqli_query($connect, $requete);

            if ($execute) {
                $message = "Votre ajout a été effectué avec succès !";
                header('Location: index.php?success=1&message=' . urlencode($message));
                exit();
            } else {
                echo "Erreur lors de l'ajout : " . mysqli_error($connect);
            }
   
}
?>
