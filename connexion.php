<?php
    $connect =mysqli_connect("localhost","root","","crud_etudiant");
    
    if(!$connect){
        echo"connexion echoue";
    } 

    

        // Vérification de connexion
   /*  if ($connect->connect_error) {
        die("Connexion échouée : " . $connect->connect_error);
    } */
?>
