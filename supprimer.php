<?php
include 'connexion.php';//connexion a la base de donne
$id_ele=$_GET['id'];
echo $id_ele;
//recuperation de l'id transferer et requete de suppression
$requete="DELETE FROM eleve WHERE id =$id_ele";
//execution de la requete
$execute =mysqli_query($connect, $requete);

// Vérifie si la suppression a réussi
if ($execute) {
    // Message de succès
    $message = "L'élève a été supprimé avec succès !";
    header('Location: index.php?success=1&message=' . urlencode($message));
    exit(); // S'assurer que le script s'arrête ici
} else {
    // Si la suppression échoue, afficher une erreur
    echo "Erreur lors de la suppression : " . mysqli_error($connect);
}
?>