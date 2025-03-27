<?php
  include 'connexion.php';
    // Exécuter la requête et vérifier les erreurs
    $requete= "SELECT * FROM eleve";
    $execute=mysqli_query($connect,$requete);

  
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Doc</title>
    <link rel="icon" href="../../../../favicon.ico">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
        .modal-content {
            padding: 20px;
            border-radius: 10px;
            max-width: 600px;
            margin: auto;
        }
        .modal-header {
            border-bottom: none;
        }
        .modal-body input {
            padding-left: 25px; /* Garde un padding à gauche pour le texte */
            
            padding-top: 12px; /* Ajoute de l'espace en haut pour l'input */
            padding-bottom: 10px;
            border-radius: 25px;
            border: 1px solid #EAF7FC;
            color: black;
            
        }
  
    
        .btn-primary {
            border-radius: 25px;
            padding: 10px 50px;
            margin-right: 1.5rem;
            font-weight: bold;
            font-size: 14px;
        }

        .btn-secondary {
            border-radius: 25px;
            padding: 10px 50px;
            margin-left: 0;
            font-weight: bold;
            font-size: 14px;
            
        }
        .btn-orange {
            border-radius: 25px;
            padding: 10px 50px;
            font-weight: bold;
            font-size: 14px;
            background-color: #ff8800; /* Orange foncé */
            color: white;
        
        }
        .btn-orange:hover {
            background-color: #ff8800; /* Orange plus foncé au survol */
            
        }
     

        .form-group{
            position: relative;
            margin-bottom: 1.5rem; /* Ajoute un espace entre les champs */
        }
        .form-select {
           
            margin-bottom: .5rem; /* Ajoute un espace entre les champs */
            border-radius: 1.5rem;
        }
        .form-select {
            width: 100%;
            padding: 12px 15px;
            border-radius: 25px;
            border: 1px solid #EAF7FC;
            font-size: 14px;
            padding-left: 25px; /* Garde un padding à gauche pour le texte */

        }
        .form-select label
         {
            position: absolute;
            
            top: -13px;
            left: 15px;
            background: white;
            padding: 5 10px;
            font-weight: 600;
            color: #9FA8BC;
        }

        .form-group label
         {
            position: absolute;
            
            top: -12px;
            left: 15px;
            background: white;
            padding: 5 10px;
            font-size: 12px;
            font-weight: 600;
            color: #9FA8BC;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border-radius: 25px;
            border: 1px solid #EAF7FC;
            font-size: 14px;

        }

        


        .avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            object-fit: cover;
            margin-left: 0; /* Suppression de la marge */
            margin-right: 10px; /* Marge à droite pour éloigner un peu de la case à cocher */
        }
       

        .checkbox-avatar {
            display: flex;
            align-items: center;
        }

 

        table {
            border-collapse: separate;
            border-spacing: 0;
            background-color:white;
            margin-top: 300px; /* Ajuste pour laisser l’espace sous .actions-and-search */
            margin-right: -10px; /* Ajuste pour grappiller encore un peu d’espace */
            width: calc(100% - 80px); /* Ajustement pour compenser la sidebar */
            flex-grow: 1; /* Permet au tableau de s'étendre sans dépasser */
            

        }



        thead {
            border-radius: 20px;
            overflow: hidden;
            background-color: rgb(231 235 243 / var(--tw-bg-opacity, 1));
        }

        thead tr:first-child th:first-child {
            border-top-left-radius: 20px;
        }

        thead tr:first-child th:last-child {
            border-top-right-radius: 20px;
        }
            
 


        .table thead th {
            border: none ;
            text-align: left !important;
        }
       
        .table tbody tr {
            border-radius: 10px;
            background-color:rgb(100, 176, 252);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            
        }
        .table tbody td {
            /* border-bottom: 2px dashed #dee2e6; */
            border-bottom: 2px dotted #dee2e6;
            padding: 15px;
            border-top: none !important;
           
            
        }
        .icon-button {
            background: none;
            border: none;
            cursor: pointer;
        }
        .icon-button i {
            font-size: 1.2rem;
        }
        .edit-icon {
            color: #6c757d; /* Gris foncé pour modification */
        }
        .delete-icon {
            color: #6c757d; /* Rouge pour suppression */
        }
        input[type="checkbox"] {
            width: 20px; /* Agrandissement de la case à cocher */
            height: 20px;
            margin-right: 10px; /* Marge à droite pour espacer de l'avatar */
        }
        .badge-success {
            background-color: #28a745 !important; /* Forcer la couleur verte pour "Actif" */
        }
        .badge-danger {
            background-color: #dc3545 !important; /* Couleur rouge pour "Bloqué" */
        }
        

    </style>

   
  </head>


    <body>
        <div class="container">
            <!-- l'entête  -->
            <header class="flex justify-between items-center mb-8">
                <h5 class="w-100" style="max-width: 250px; height: 32px; font-family: 'Urbanist', sans-serif; color: var(--text); font-size: 30px; line-height: 32px; letter-spacing: -0.25px; font-weight: 500;">Bienvenue, Au collège.</h5>
                <div class="position-relative d-flex gap-2">
                    <img alt="item5"  class=" border border-2 rounded-3 h-10 w-10 p-1" style="background-color: #F2F2F2;" src="image/Notification Icon.svg" style="color: transparent;">
                    <img alt="User profile"  class="rounded-circle cursor-pointer mt-n4" src="image/Avatar.svg" style="color: transparent;">
                    <img alt="item5"  class="w-4 h-4 mt-3 cursor-pointer" src="image/Vector.svg" style="color: transparent;">
                </div>
            </header>

            
            <!-- sous_entête -->

            <div class="actions-and-search">
                <div class="d-flex align-items-center justify-content-between w-100">
                    <img width="20" height="20"  src="image/Rectangle.svg">
                    <div class="d-flex align-items-center bg-gray  rounded-pill px-3 py-1" style="width: 200px; height: 35px;">
                        <span class="font-urbanist  text-[12px] text-light_text font-semibold ">Sélectionner une action</span>
                        <img width="10" height="6" src="image/Path.svg" style="color: transparent;">
                    </div>
                    
                    <!-- Bouton d'ajout d'élève -->
                    <button class="btn btn-primary text-center ml-96 mt-6 mb-6 justify-center items-center px-1 flex bg-primary rounded-3xl w-[200px] h-[40px]" data-bs-toggle="modal" data-bs-target="#addAdminModal">
                        <span class=" text-center   text-white font-semibold ">Ajouter un élève </span>
                    </button>
                     
                </div>

                <div class="flex items-center bg-white border border-gray h-[40px] rounded-full px-2 shadow-sm">
                    <img alt="search"  width="18" height="18"   class="" src="image/Search.svg" style="color: transparent;">
                    <input placeholder="Rechercher un élève" class="w-[320px] font-Urbanist text-[12px] font-normal leading-[19.2px] focus:outline-none" type="text">
                    <img alt="setting"  width="24" height="24"   class="" src="image/setting-3.svg" style="color: transparent;">
                </div>

            </div>

            <div class="container mt-4">
       
                <table class="table text-center">
                    <thead class="table-light">
                        <tr>
                            
                            <th>Étudiant</th>
                            <th>Email</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($execute)) {
                            while ($eleve = mysqli_fetch_assoc($execute)) { // lire chaque ligne
                                $cheminImage = "image/" . htmlspecialchars($eleve['photo']);
                                
                                echo "<tr>";
                                // Utilisation d'une div avec flex pour aligner le checkbox et la photo de profil
                                echo "<td>
                                    <div class='checkbox-avatar'>
                                        <a href='#' data-bs-toggle='modal' data-bs-target='#photoModal" . $eleve['id'] . "'>
                                            <img src='" . $cheminImage . "' alt='Photo de profil' class='avatar' >
                                        </a>
                                        <strong>" . htmlspecialchars($eleve['nom']) . " " . htmlspecialchars($eleve['prenom']) . "</strong>
                                    </div>
                                </td>";
                                echo "<td>" . htmlspecialchars($eleve['email']) . "</td>";

                                // Application correcte de la classe badge selon le statut
                                $statut = htmlspecialchars($eleve['statut']);
                                $badgeClass = ($statut == 'Actif') ? 'badge-success' : 'badge-danger';
                                echo "<td><span class='badge $badgeClass'>" . $statut . "</span></td>";
                                echo "<td>";
                                
                                echo "<a href='#' data-bs-toggle='modal' data-bs-target='#modifierModal" . $eleve['id'] . "' class='icon-button'><img src='image/edit.svg' alt='Modifier' width='20' height='20'></a>";
                                echo "<a href='#' data-bs-toggle='modal' data-bs-target='#deleteModal" . $eleve['id'] . "' class='icon-button'><img src='image/trash.svg' alt='Supprimer' width='20' height='20'></a>";
                                echo "</td>";
                                echo "</tr>";

                                // Modal pour afficher uniquement la photo
                                echo "
                                    <div class='modal fade' id='photoModal" . $eleve['id'] . "' tabindex='-1' aria-labelledby='photoModalLabel" . $eleve['id'] . "' aria-hidden='true'>
                                        <div class='modal-dialog modal-dialog-centered'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h5 class='modal-title mx-auto' id='photoModalLabel" . $eleve['id'] . "'>Photo de " . htmlspecialchars($eleve['nom']) . " " . htmlspecialchars($eleve['prenom']) . "</h5>
                                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Fermer'></button>
                                                </div>
                                                <div class='modal-body text-center'>
                                                    <img src='" . $cheminImage . "' alt='Photo de profil' class='img-fluid' style='max-width:100%; border-radius:10px;'>
                                                </div>
                                            </div>
                                        </div>
                                    </div>";


                                // Modale de modification
                                echo "
                                    <div class='modal fade' id='modifierModal" . $eleve['id'] . "' tabindex='-1' aria-labelledby='modifierModalLabel" . $eleve['id'] . "' aria-hidden='true'>
                                        <div class='modal-dialog'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h5 class='modal-title mx-auto fw-bold font-urbanist' id='modifierModalLabel" . $eleve['id'] . "'>Modifier un élève</h5>
                                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Fermer'></button>
                                                </div>
                                                <div class='modal-body'>
                                                    <form action='trait_modifier.php' method='POST'>
                                                        <input type='hidden' name='id' value='" . $eleve['id'] . "'>
                                                        <div class='form-group'>
                                                            <label for='nom' >Nom</label>
                                                            <input type='text' class='form-control' name='nom' value='" . htmlspecialchars($eleve['nom']) . "' required>
                                                        </div>
                                                        <div class='form-group'>
                                                            <label for='prenom' >Prénom</label>
                                                            <input type='text' class='form-control' name='prenom' value='" . htmlspecialchars($eleve['prenom']) . "' required>
                                                        </div>
                                                        <div class='form-group'>
                                                            <label for='email' >Email</label>
                                                            <input type='email' class='form-control' name='email' value='" . htmlspecialchars($eleve['email']) . "' required>
                                                        </div>
                                                        <div class='form-group'>
                                                            <label for='statut' >Statut</label>
                                                            <select name='statut' class='form-select' id='statut'>
                                                                <option value='" . htmlspecialchars($eleve['statut']) . "'>" . htmlspecialchars($eleve['statut']) . "</option>
                                                                <option value='Actif'>Actif</option>
                                                                <option value='Bloqué'>Bloqué</option>
                                                                
                                                            </select>
                                                        </div>
                                                        <div class='form-group' >
                                                            <label for='photo' >Photo</label>
                                                            <input class='form-control'  type='file'  id='photo' name='photo'  value='" . htmlspecialchars($eleve['photo']) . "' accept='image/*'>
                                                        </div> 
                                                        <button type='submit'  name='submit'  class='btn btn-primary  w-50 d-block mx-auto'>Modifier</button>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>";

                                // Modal de suppresion

                                echo "
                                <div class='modal fade' id='deleteModal" . $eleve['id'] . "' tabindex='-1' aria-labelledby='deleteModalLabel" . $eleve['id'] . "' aria-hidden='true'>
                                    <div class='modal-dialog'>
                                        <div class='modal-content'>
                                            <div class='modal-header'>
                                                <h5 class='modal-title' id='deleteModalLabel" . $eleve['id'] . "'>Supprimer un élève</h5>
                                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Fermer'></button>
                                            </div>
                                            <div class='modal-body'>
                                                Voulez-vous supprimer l'élève <strong>" . htmlspecialchars($eleve['nom']) . " " . htmlspecialchars($eleve['prenom']) . "</strong> ?
                                            </div>
                                            <div class='modal-footer d-flex justify-content-between'>
                                                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Annuler</button>
                                                <a href='supprimer.php?id=" . $eleve['id'] . "' class='btn btn-orange'>Supprimer</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>";
                                
                                
                            }
                        }
                        ?>
                    </tbody>

                </table>
            </div>
            <hr class="mt-8 border-2 border-gray">

        </div>

            <!-- menu_coté_gauche -->

        <aside class="w-[80px] h-full bg-white border-r border-blue_Gray flex flex-col py-4">
            <div class="mb-40 flex justify-center pt-6">
                <img alt="Private Docs Logo" loading="lazy" width="34" height="37"   class="w-[163px] h-[36px]" src="image/Logo Private.svg" style="color: transparent;">
            </div>
            <nav class="flex flex-col space-y-2 w-full flex-1">
                
                <a class="flex justify-center items-center w-full py-4 border-r-4 border-primary text-primary" href="/organisations">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-inherit w-6 h-6">
                
                        <path d="M9.16006 10.87C9.06006 10.86 8.94006 10.86 8.83006 10.87C6.45006 10.79 4.56006 8.84 4.56006 6.44C4.56006 3.99 6.54006 2 9.00006 2C11.4501 2 13.4401 3.99 13.4401 6.44C13.4301 8.84 11.5401 10.79 9.16006 10.87Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path d="M16.41 4C18.35 4 19.91 5.57 19.91 7.5C19.91 9.39 18.41 10.93 16.54 11C16.46 10.99 16.37 10.99 16.28 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path d="M4.15997 14.56C1.73997 16.18 1.73997 18.82 4.15997 20.43C6.90997 22.27 11.42 22.27 14.17 20.43C16.59 18.81 16.59 16.17 14.17 14.56C11.43 12.73 6.91997 12.73 4.15997 14.56Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path d="M18.3401 20C19.0601 19.85 19.7401 19.56 20.3001 19.13C21.8601 17.96 21.8601 16.03 20.3001 14.86C19.7501 14.44 19.0801 14.16 18.3701 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                </a>
            </nav>
            
          
        </aside>

         <!-- Modal d'ajout d'admin -->
        <div class="modal fade" id="addAdminModal" tabindex="-1" aria-labelledby="addAdminModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <h5 class="modal-title mx-auto fw-bold font-urbanist" id="addAdminModalLabel">Ajouter un élève</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="trait_ajout.php" method="post" id="myForm" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nom" >Nom de l'élève</label>
                                <input type="text"  name ="nom" class="form-control" id="nom" placeholder="Nom de l'élève">
                            </div>
                            <div class="form-group">
                                <label for="prenom" >Prénom de l'élève</label>
                                <input type="text" name ="prenom" class="form-control" id="prenom" placeholder="Prénom de l'élève">
                            </div>
                            <div class="form-group">
                                <label for="email"   >Adresse e-mail de l'élève</label>
                                <input type="email" name ="email" class="form-control" id="email" placeholder="Adresse e-mail de l'élève">
                            </div>
                            <div class="form-group">
                                <label for="statut">Statut de l'élève</label>
                                <select name ="statut" class="form-select" id="exampleSelect" aria-label="Sélectionner statut">
                                    <option value="Actif">Actif</option>
                                    <option value="Bloqué">Bloqué</option>
                                 
                                </select>
                            </div>
                            <div class="form-group" >
                                <label for="photo" >Photo</label>
                                <input class="form-control"  type="file" id="photo" name="photo" accept="image/*">
                            </div> 
                            <button id="submitButton" type="submit" name="submit" class="btn btn-primary  w-50 d-block mx-auto">Ajouter élève</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>

 


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            const form = document.getElementById("myForm");
            const inputs = form.querySelectorAll("input");
            const submitButton = document.getElementById("submitButton");

            function checkFields() {
                let allFilled = true;
                inputs.forEach(input => {
                    if (input.value.trim() === "") {
                        allFilled = false;
                    }
                });
                submitButton.disabled = !allFilled;
                submitButton.style.cursor = allFilled ? "pointer" : "not-allowed";
            }

            inputs.forEach(input => {
                input.addEventListener("input", checkFields);
            });

            // Fonction pour ouvrir le modal de modification
            function ouvrirModalModification(id) {
                // Récupérer le modal spécifique en fonction de l'ID de l'élève
                var modal = new bootstrap.Modal(document.getElementById('modifierModal' + id));
                
                // Afficher le modal
                modal.show();
            }

// Ajouter un écouteur d'événements à chaque bouton de modification
document.querySelectorAll('.btn-modifier').forEach(function (btn) {
    btn.addEventListener('click', function () {
        var idEleve = btn.getAttribute('data-id');  // On récupère l'ID de l'élève depuis l'attribut `data-id`
        ouvrirModalModification(idEleve); // Ouvrir le modal pour cet élève
    });
});




        // pour afficher  le statut de l'eleve
                function supprimereleve(button) {
                    let row = button.parentNode.parentNode;
                    row.parentNode.removeChild(row);
                }

                function changerStatut(button) {
                    let cell = button.parentNode.parentNode.cells[3];
                    if (cell.innerHTML.includes('Actif')) {
                        cell.innerHTML = '<span class="badge bg-danger">Bloqué</span>';
                    } else {
                        cell.innerHTML = '<span class="badge bg-success">Actif</span>';
                    }
                }
            </script>




    </body>
</html>
