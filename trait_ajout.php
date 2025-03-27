<?php
include 'connexion.php';

/* echo "<pre>";
print_r($_POST);
print_r($_FILES);
echo "</pre>";
exit(); */

if(isset($_POST['submit'])) 
{
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $statut = $_POST['statut'];

    $photo = $_FILES['photo'];
    $nomfichier = basename($photo['name']);
    $fichierTemp = $photo['tmp_name'];
    $dossier = "image/";
    $cheminDestination = $dossier . $nomfichier;

    // Vérifiez si les champs ne sont pas vides
    if (!empty($prenom) && !empty($nom) && !empty($email) && !empty($statut)) {
        // Vérifier si l'upload a réussi
        if (move_uploaded_file($fichierTemp, $cheminDestination)) {
            // Insérer uniquement le nom du fichier dans la base de données
            $requete = "INSERT INTO `eleve`(`prenom`, `nom`, `email`, `photo`, `statut`)
                        VALUES ('$prenom', '$nom', '$email', '$nomfichier','$statut')";

            $execute = mysqli_query($connect, $requete);

            if ($execute) {
                $message= "votre ajout a été éffectué avec succes !";
                header('Location: index.php');
                exit;
            } else {
                echo "Erreur lors de l'ajout : " . mysqli_error($connect);
            }
        } 
    } else {
        echo "Tous les champs doivent être remplis.";
    }
}
?>
