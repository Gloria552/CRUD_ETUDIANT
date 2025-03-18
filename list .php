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
            <div class="container mt-5">
                <div class="row">
                    <?php
                    $count = 0;
                    while ($eleve = mysqli_fetch_assoc($execution)) {
                        // Nouvelle ligne pour chaque groupe de 3 cartes
                        if ($count % 4 == 0) {
                            echo '<div class="w-100"></div>';
                        }

                        echo '<div class="col-md-4 mb-4 br-50">';
                        echo '    <div class="card">';
                        echo "        <img src='image/{$eleve['photo']}' class='card-img-top img-fluid p-0' style='height:200px; object-fit:cover;' alt='img'>";
                        echo '        <div class="card-body">';
                        echo "            <h5 class='card-title'>{$eleve['nom']}.{$eleve['prenom']}</h5>";
                        
                        echo "            <p class='card-text'>Email : {$eleve['email']}</p>";
                        echo '        </div>';
                        echo '    </div>';
                        echo '</div>';

                        $count++;
                    }
                    ?>
                </div>
            </div>
        </body>
    </html>
