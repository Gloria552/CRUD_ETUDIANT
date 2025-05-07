<?php
     //$connect =mysqli_connect("sql12.freesqldatabase.com","sql12768884","ZgZgUFUfBL","sql12768884");

    $connect =mysqli_connect("localhost","root","","crud_etudiant");
    
    if(!$connect){
        echo"connexion echouée";
    } 

    

?>
