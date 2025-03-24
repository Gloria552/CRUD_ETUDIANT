<?php
/*     include 'connexion.php';

    // Exécuter la requête et vérifier les erreurs
    $requete = "SELECT * FROM eleve";
    $execution = mysqli_query($connect, $requete);

    if (!$execution) {
        die("Erreur SQL : " . mysqli_error($connect));
    } */
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
        

    </style>

   
  </head>


    <body>

        <!-- l'entête  -->

            <header class="flex justify-between items-center mb-8">
                <h1 class="w-[250px] h-[32px] font-Urbanist text-text text-[30px]  leading-[32px] tracking-[-0.25px] font-medium">Bienvenue, Au collège.</h1>
                <div class="relative flex gap-x-2">
                    <img alt="item5"  class=" border rounded-xl h-10 w-10 p-1 border-bg_2  " src="image/Notification Icon.svg" style="color: transparent;">
                    <img alt="User profile"  class="rounded-full cursor-pointer -mt-4" src="image/Avatar.svg" style="color: transparent;">
                    <img alt="item5"  class="w-[16px] h-[16] mt-3 cursor-pointer" src="image/Vector.svg" style="color: transparent;">
                </div>
            </header>
            <!-- sous_entête -->

            <div class="actions-and-search">
                <div class=" flex   ">
                    <img width="20" height="20"   class="w-[24px] mt-1 h-[24px]" src="image/Rectangle.svg" style="color: transparent;">
                    <div class="items-center flex ml-4 justify-between py-4 px-3 bg-gray rounded-3xl w-[200px] h-[12px] ">
                        <span class="font-urbanist  text-[12px] text-light_text font-semibold ">Sélectionner une action</span>
                        <img width="10" height="6"   class="" src="image/Path.svg" style="color: transparent;">
                    </div>
                      <!-- Bouton d'ajout d'élève -->
  
                    <button class="btn btn-primary text-center ml-96 mt-6 mb-6 justify-center items-center px-1 flex bg-primary rounded-3xl w-[200px] h-[40px] " data-bs-toggle="modal" data-bs-target="#addAdminModal">
                        <span class=" text-center   text-white font-semibold ">Ajouter un élève </span>
                    </button>
                     
                </div>

                <div class="flex items-center bg-white border border-gray h-[40px] rounded-full px-2 shadow-sm">
                    <img alt="search"  width="18" height="18"   class="" src="image/Search.svg" style="color: transparent;">
                    <input placeholder="Rechercher un élève" class="w-[320px] font-Urbanist text-[12px] font-normal leading-[19.2px] focus:outline-none" type="text">
                    <img alt="setting"  width="24" height="24"   class="" src="image/setting-3.svg" style="color: transparent;">
                </div>


                

            </div>
            <hr class="mt-8 border-2 border-gray">

            


           
            

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
                        <h1 class="modal-title mx-auto fw-bold font-urbanist" id="addAdminModalLabel">Ajouter un élève</h1>
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
                    <div class="modal-footer border-0">

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
