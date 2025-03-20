<?php
  include 'connexion.php';
  $requete= "SELECT * FROM eleve";
  $execution=mysqli_query($connect,$requete);
?>


<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Liste des élèves</title>
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="js/bootstrap.min.js">

        </head>
        <body>
        <table class= "table" border=" 2px" >
            <thead>
                <tr>
                    <th>ELEVE</th>
                    <th>Adresse e-mail</th>
                    <th>Statut</th>
                    
                    
                    <th colspan="2"  class="text-center">Action</th>



                </tr>

            </thead>

            <tbody>
                <?php
                //tableau dynamique
                while($etudiant=mysqli_fetch_assoc($execute))//lire la premiere ligne
                {

                    echo"<tr>";//ligne

                            
                            echo"<td>".$eleve['nom']." ". $etudiant['prenom']."</td>";
                            echo"<td>".$eleve['email']."</td>";
                            echo"<td>".$eleve['statut']."</td>";


                            echo"<td> <a href='modifier.php?id=".$eleve['id']."'>  Modifier  </a> </td>";
                            echo"<td> <a href='supprimer.php?id=".$eleve['id']."'>  supprimer  </a> </td>";


                    echo"</tr>";



                }
                ?>
            </tbody>

        </table>
        </body>
    </html>
