<?php
include 'connexion.php';//connexion a la base de donne
$id_ele=$_GET['id'];
echo $id_ele;
//recuperation de l'id transferer et requete de suppression
$requete="DELETE FROM eleve WHERE id =$id_ele";
//execution de la requete
$execute =mysqli_query($connect, $requete);
//retour vers la page index(tableau)
$execute?header ('location:index.php'):$execute;
?>