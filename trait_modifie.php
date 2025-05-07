<?php
include 'connexion.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id']; // 🔁 récupère l'id

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $statut = $_POST['statut'];

    $photo = $_FILES['photo'];
    $nomfichier = basename($photo['name']);
    $fichierTemp = $photo['tmp_name'];
    $dossier = "image/";
    $cheminDestination = $dossier . $nomfichier;

    // Gestion image : uniquement si un fichier est envoyé
    if (!empty($nomfichier)) {
        move_uploaded_file($fichierTemp, $cheminDestination);
        $requete = "UPDATE `eleve` SET 
                    `prenom`='$prenom',
                    `nom`='$nom',
                    `email`='$email',
                    `photo`='$nomfichier',
                    `statut`='$statut' 
                    WHERE id=$id";
    } else {
        // on ne touche pas à la colonne `photo`
        $requete = "UPDATE `eleve` SET 
                    `prenom`='$prenom',
                    `nom`='$nom',
                    `email`='$email',
                    `statut`='$statut' 
                    WHERE id=$id";
    }

    $execute = mysqli_query($connect, $requete);

    if ($execute) {
        $message = "Votre enregistrement a été modifié avec succès !";
        header("Location: index.php?success=1&message=" . urlencode($message));
        exit();
    } else {
        echo "Erreur lors de la modification : " . mysqli_error($connect);
    }
}
?>


