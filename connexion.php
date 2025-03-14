<?php
    $connect =mysqli_connect("localhost","root","","crud_etudiant");
    
    if(!$connect){
        echo"connexion echoue";
    } 
?>