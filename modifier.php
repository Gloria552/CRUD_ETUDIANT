<?php
   include'connexion.php';
   $id=$_GET['id'];
   $req="SELECT * FROM eleve WHERE id=$id";
   $lancer=mysqli_query($connect,$req);
   $eleve=mysqli_fetch_assoc($lancer);
   $nom=$eleve['nom'];
   $prenom=$eleve['prenom'];
   $email=$eleve['email'];
   $statut=$eleve['statut'];
   $photo=$eleve['photo'];
   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification d'eleve</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <form action="trait_modifier.php" method="post" id="myForm" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nom" >Nom de l'élève</label>
            <input type="text" value="<?php echo $nom?>" name ="nom" class="form-control" id="nom" placeholder="Nom de l'élève">
        </div>
        <div class="form-group">
            <label for="prenom" >Prénom de l'élève</label>
            <input type="text" value="<?php echo $prenom?>" name ="prenom" class="form-control" id="prenom" placeholder="Prénom de l'élève">
        </div>
        <div class="form-group">
            <label for="email"   >Adresse e-mail de l'élève</label>
            <input type="email" value="<?php echo $nom?>" name ="email" class="form-control" id="email" placeholder="Adresse e-mail de l'élève">
        </div>
        <div class="form-group">
            <label for="statut">Statut de l'élève</label>
            <select name ="statut"  class="form-select" id="exampleSelect" aria-label="Sélectionner statut">
                <option value="<?php echo $statut?>"><?php echo $statut?></option>
                <option value="Actif">Actif</option>
                <option value="Bloqué">Bloqué</option>
                
            </select>
           
        </div>
        <div class="form-group" >
            <label for="photo" >Photo</label>
            <input class="form-control" value="<?php echo $photo?>"  type="file" id="photo" name="photo" accept="image/*">
        </div> 

   
        <button id="submitButton" type="submit" name="submit" class="btn btn-primary w-100">Enregistrer</button>

    </form>
</body>
</html>
