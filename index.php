<?php
  include 'connexion.php';

  if (isset($_GET['success']) && $_GET['success'] == 1): ?>
    <div id="successMessage" class="alert alert-success text-center">
        ✅ <?php echo htmlspecialchars($_GET['message']); ?>
    </div>
<?php endif; 


    // Exécuter la requête et vérifier les erreurs
    $requete= "SELECT * FROM eleve";
    $execute=mysqli_query($connect,$requete);

  
    $elevesParPage = 12;
    $pageCourante = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $debut = ($pageCourante - 1) * $elevesParPage;

    // Récupérer les élèves avec LIMIT
    $sql = "SELECT * FROM eleve LIMIT $debut, $elevesParPage";
    $execute = mysqli_query($connect, $sql);

    // Nombre total d'élèves
    $totalQuery = mysqli_query($connect, "SELECT COUNT(*) AS total FROM eleve");
    $totalData = mysqli_fetch_assoc($totalQuery);
    $totalEleves = $totalData['total'];
    $totalPages = ceil($totalEleves / $elevesParPage);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    

    <style>

    </style>

</head>
<body>
    <div class=" d-flex w-100 " style="height: 1000px;">
       <!-- Div gauche rouge -->
        <div class="bg-white border-r " style="width: 100px" >
            <img xxx class="margintop mx-4 " src="image/LogoPrivate.svg">
           <nav class=" margintop w-100 h-50 ">
                <a class="" href="">
                    <img  class="margintop mx-4 " src="image/user.svg"> 
                </a>

            </nav>
        </div>


        <!-- Div droite bleue -->
        <div class=" bod h-100 w-100 text-black ">
            <header class="mt-10 d-flex  ">
                <h5 class="hl text-center" >Bienvenue, Au collège.</h5>
                <div class="im justify-content-end ">
                    <img   class=" border  p-1" src="image/Notification Icon.svg" >
                    <img   class="" src="image/Avatar.svg" >
                    <img   id="menuToggle" class="cursor-pointer" src="image/Vector.svg" >

                    
                    <div id="menuDropdown" class="menu-dropdown p-2">
                        <a href="profile.php" class="text-decoration-none">
                            <button class="bouton px-4 py-1 text-dark btn-hover">
                                <img src="image/profile.svg">
                                Profil
                            </button>
                        </a>
                        
                        <button class="bouton px-4 py-1 text-danger btn-hover">
                            <img src="image/logout.svg">
                            Deconnect
                        </button>
                    </div>
                </div>

            </header>

            
            <div class="p-5 d-flex align-items-center justify-content-between gap-2">
                <img class="" src="image/Rectangle.svg">
                <div class="selectio bg-secondary gap-2 ">
                    <span class="ml-2">Sélectionner une action</span>
                    <img  src="image/Path.svg">
                </div>
                
                <!-- Bouton d'ajout d'élève -->
                <button class="btn btn-primary text-center" data-bs-toggle="modal" data-bs-target="#addAdminModal">Ajouter un élève </button>
                
                <div class="Seach bg-white border px-2  ">
                    <img class="me-1" src="image/Search.svg" >
                    <input placeholder="Rechercher un élève" class="me-5 border-0 " type="text">
                    <img  class="" src="image/setting-3.svg" >
                </div>
            </div>
            <hr class="custom-line">

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
                            $badgeClass = ($statut == 'Passe') ? 'badge-success' : 'badge-danger';
                            echo "<td><span class='br-50 badge $badgeClass'>" . $statut . "</span></td>";
                            echo "<td>";
                            
                            echo "<a href='#' data-bs-toggle='modal' data-bs-target='#modifierModal" . $eleve['id'] . "' class='icon-button'><img src='image/edit.svg' alt='Modifier' width='20'  height='20'></a>";
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
                                            <form action='trait_modifier.php' method='POST' enctype='multipart/form-data'>
                            
                                                <input type='hidden' name='id' value='" . $eleve['id'] . "'>
                            
                                                <div class='checkbox-avatar'>
                                                    <img class='avat' src='image/" . htmlspecialchars($eleve['photo']) . "'><br>
                                                </div>
                            
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
                                                        <option value='Passe'>Passe</option>
                                                        <option value='Double'>Double</option>
                                                    </select>
                                                </div>
                            
                                                <!-- Formulaire pour la photo avec nom du fichier affiché -->
                                                <div class='form-group'>
                                                    <label for='photo'>Photo</label><br>
                                                    <small id='fileNameDisplay" . $eleve['id'] . "' class='form-text text-muted'>
                                                        Fichier actuel : " . htmlspecialchars($eleve['photo']) . "
                                                    </small>
                                                   
                            
                                                    <input class='form-control' type='file' name='photo' id='photoInput" . $eleve['id'] . "' onchange='updateFileName" . $eleve['id'] . "()'>
                                                    
                                                    
                                                </div>
                            
                                                <button type='submit' name='submit' class='btn btn-primary w-50 d-block mx-auto'>Modifier</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                         
                            ";
                            
                                

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
                        if ($totalPages > 1): ?>
                            <nav class=" nav_pag ">
                                <ul class="pagination "  >
                                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                        <li class="page-item <?= ($i == $pageCourante) ? 'active' : '' ?>">
                                            <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                                        </li>
                                    <?php endfor; ?>
                                </ul>
                            </nav>
                        <?php endif; 

                    }
                    ?>

                    
                </tbody>
            </table>

        </div>
  </div>

  <!-- Modal d'ajout d'etudiant -->
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
                                <option value="Passe">Passe</option>
                                <option value="Double">Double</option>
                                
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
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


    <script>
        // afficher le formulaire d'ajout 
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

        // pour afficher  le statut de l'eleve
        function supprimereleve(button) {
                let row = button.parentNode.parentNode;
                row.parentNode.removeChild(row);
            }

        function changerStatut(button) {
            let cell = button.parentNode.parentNode.cells[3];
            if (cell.innerHTML.includes('Passe')) {
                cell.innerHTML = '<span class="badge bg-danger">Double</span>';
            } else {
                cell.innerHTML = '<span class="badge bg-success">Passe</span>';
            }
        }


        // afficher le menu qui se trouve à coté du profil sur la page
        document.getElementById("menuToggle").addEventListener("click", function() {
            var menu = document.getElementById("menuDropdown");
            menu.style.display = menu.style.display === "block" ? "none" : "block";
        });
            
            // Cacher le menu si on clique ailleurs sur la page
        document.addEventListener("click", function(event) {
                var menu = document.getElementById("menuDropdown");
                var menuToggle = document.getElementById("menuToggle");
                
                if (!menu.contains(event.target) && !menuToggle.contains(event.target)) {
                    menu.style.display = "none";
                }
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







        function updateFileName() {
    const input = document.getElementById('photoInput');
    const label = document.getElementById('fileNameDisplay');
    const file = input.files[0];
    if (file) {
        label.textContent = "Nouveau fichier sélectionné : " + file.name;
    }
}



      // Faire disparaître le message après 3 secondes (3000 ms)
      setTimeout(function() {
        const msg = document.getElementById('successMessage');
        if (msg) {
            msg.style.transition = 'opacity 0.5s ease';
            msg.style.opacity = '0';
            setTimeout(() => msg.remove(), 500); // On le supprime ensuite
        }
    }, 3000);

    </script>
 
</body>
</html>