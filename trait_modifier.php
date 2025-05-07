<?php
include 'connexion.php';

if (isset($_POST['submit'])) {
    // Récupération des champs
    $id = $_POST['id']; // Assure-toi que le champ ID est bien envoyé dans le formulaire
    $nom = mysqli_real_escape_string($connect, $_POST['nom']);
    $prenom = mysqli_real_escape_string($connect, $_POST['prenom']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $statut = mysqli_real_escape_string($connect, $_POST['statut']);

    // Gestion de la photo
    $nomfichier = null;
    if (!empty($_FILES['photo']['name'])) {
        $photo = $_FILES['photo'];
        $nomfichier = basename($photo['name']);
        $fichierTemp = $photo['tmp_name'];
        $dossier = "image/";
        $cheminDestination = $dossier . $nomfichier;

        // On déplace le fichier uploadé dans le dossier image/
        move_uploaded_file($fichierTemp, $cheminDestination);
    }

    // Construction de la requête
    $requete = "UPDATE `eleve` SET 
                `prenom` = '$prenom',
                `nom` = '$nom',
                `email` = '$email',
                `statut` = '$statut'";

    // Si une photo a été uploadée, on l'ajoute dans la requête
    if ($nomfichier) {
        $requete .= ", `photo` = '$nomfichier'";
    }

    $requete .= " WHERE id = $id";

    $execute = mysqli_query($connect, $requete);

    if ($execute) {
        $message = "votre enregistrement a été modifié avec succès !";
        header("Location: index.php?message=" . urlencode($message));
        exit;
    } else {
        echo "Erreur lors de la modification : " . mysqli_error($connect);
    }
}
?>
