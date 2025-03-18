<?php
include 'connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];


    $photo = $_FILES['photo'];
    $nomfichier = basename($photo['name']);
    $fichierTemp = $photo['tmp_name'];
    $dossier = "image/";
    $cheminDestination = $dossier . $nomfichier;

    // Vérifier si l'upload a réussi
    if (move_uploaded_file($fichierTemp, $cheminDestination)) {
        // Insérer uniquement le nom du fichier dans la base de données
        $requete = "INSERT INTO eleve (prenom, nom, email, photo) 
                    VALUES ('$prenom', '$nom', '$email', '$nomfichier')";

        $execute = mysqli_query($connect, $requete);

        if ($execute) {
           
            header('Location: index.php');
            exit;
        } else {
            echo "Erreur lors de l'ajout : " . mysqli_error($connect);
        }
    } 
}
?>
