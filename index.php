<?php
    include 'connexion.php';

    // Exécuter la requête et vérifier les erreurs
    $requete = "SELECT * FROM eleve";
    $execution = mysqli_query($connect, $requete);

    if (!$execution) {
        die("Erreur SQL : " . mysqli_error($connect));
    }
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
            padding-left: 15px; /* Garde un padding à gauche pour le texte */
            padding-right: 15px;
            padding-top: 12px; /* Ajoute de l'espace en haut pour l'input */
            padding-bottom: 10px;
            border-radius: 25px;
            border: 1px solid #ced4da;
  }
  
    
        .btn-primary {
            border-radius: 25px;
            padding: 10px 20px;
            font-weight: bold;
            font-size: 16px;
        }
        .form-group {
            position: relative;
            margin-bottom: 0 rem;
        }
        .form-group label {
            position: absolute;
            top: 0; /* Réduit la marge supérieure entre le label et l'input */

            left: 15px;
            background: white;
            padding: 0 5px;
            font-weight: 100;
            font-size: 14px;
        }
        .form-control {
            padding-left: 15px;
            padding-right: 15px;
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
                    <img alt="item5" loading="lazy" width="20" height="20" decoding="async" data-nimg="1" class="w-[24px] mt-1 h-[24px]" src="image/Rectangle.svg" style="color: transparent;">
                    <div class="items-center flex ml-4 justify-between py-4 px-3 bg-gray rounded-3xl w-[200px] h-[18px] ">
                        <span class="font-urbanist text-[14px] text-light_text font-semibold leading-[20px]">Sélectionner une action</span>
                        <img alt="item5" loading="lazy" width="10" height="6" decoding="async" data-nimg="1" class="" src="image/Path.svg" style="color: transparent;">
                    </div>
                      <!-- Bouton d'ajout d'élève -->
  
                    <button class="btn btn-primary text-center ml-96 justify-center items-center px-1 flex bg-primary rounded-3xl w-[200px] h-[40px] " data-bs-toggle="modal" data-bs-target="#addAdminModal">
                        <span class=" text-center   text-white font-semibold ">Ajouter un élève </span>
                    </button>
                     
                </div>

                <div class="flex items-center bg-white border border-gray h-[40px] rounded-full px-2 shadow-sm">
                    <img alt="search" loading="lazy" width="18" height="18" decoding="async" data-nimg="1" class="" src="image/Search.svg" style="color: transparent;">
                    <input placeholder="Rechercher un élève" class="w-[320px] font-Urbanist text-[12px] font-normal leading-[19.2px] focus:outline-none" type="text">
                    <img alt="setting" loading="lazy" width="24" height="24" decoding="async" data-nimg="1" class="" src="image/setting-3.svg" style="color: transparent;">
                </div>

            </div>


            <hr class="mt-8 border-2 border-gray">
            

            <!-- menu_coté_gauche -->

        <aside class="w-[80px] h-full bg-white border-r border-blue_Gray flex flex-col py-4">
            <div class="mb-40 flex justify-center pt-6">
                <img alt="Private Docs Logo" loading="lazy" width="34" height="37" decoding="async" data-nimg="1" class="w-[163px] h-[36px]" src="image/Logo Private.svg" style="color: transparent;">
            </div>
            <nav class="flex flex-col space-y-2 w-full flex-1">
                <a class="flex justify-center items-center w-full py-4 text-light_text" href="/dashboard">
                    <svg class="text-inherit w-6 h-6" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.02 3.33999L3.63 7.53999C2.73 8.23999 2 9.72999 2 10.86V18.27C2 20.59 3.89 22.49 6.21 22.49H17.79C20.11 22.49 22 20.59 22 18.28V11C22 9.78999 21.19 8.23999 20.2 7.54999L14.02 3.21999C12.62 2.23999 10.37 2.28999 9.02 3.33999Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path d="M12 18.49V15.49" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                </a>
                <a class="flex justify-center items-center w-full py-4 border-r-4 border-primary text-primary" href="/organisations">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-inherit w-6 h-6">
                        <path d="M17.3333 29.3333H6.66663C3.99996 29.3333 2.66663 28 2.66663 25.3333V14.6667C2.66663 12 3.99996 10.6667 6.66663 10.6667H13.3333V25.3333C13.3333 28 14.6666 29.3333 17.3333 29.3333Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path d="M13.4799 5.33333C13.3733 5.73333 13.3333 6.17333 13.3333 6.66666V10.6667H6.66663V7.99999C6.66663 6.53333 7.86663 5.33333 9.33329 5.33333H13.4799Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path d="M18.6666 10.6667V17.3333" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path d="M24 10.6667V17.3333" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path d="M22.6666 22.6667H20C19.2666 22.6667 18.6666 23.2667 18.6666 24V29.3333H24V24C24 23.2667 23.4 22.6667 22.6666 22.6667Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path d="M8 17.3333V22.6667" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.3334 25.3333V6.66667C13.3334 4.00001 14.6667 2.66667 17.3334 2.66667H25.3334C28 2.66667 29.3334 4.00001 29.3334 6.66667V25.3333C29.3334 28 28 29.3333 25.3334 29.3333H17.3334C14.6667 29.3333 13.3334 28 13.3334 25.3333Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path></svg></a><a class="flex justify-center items-center w-full py-4 text-light_text" href="/admin"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
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
            
            <div class=" mt-36 ">
                <a class="flex justify-center items-center w-full py-4 text-light_text" href="/logout">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                        <path d="M8.8999 7.55999C9.2099 3.95999 11.0599 2.48999 15.1099 2.48999H15.2399C19.7099 2.48999 21.4999 4.27999 21.4999 8.06999V15.93C21.4999 19.72 19.7099 21.51 15.2399 21.51C11.0599 21.51 9.2099 20.04 8.8999 16.44" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">

                        </path>
                        <path d="M15.24 15.93H3.79999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.44006 12.93L3.80006 15.03L5.44006 17.03" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                </a>
            </div>
        </aside>

         <!-- Modal d'ajout d'admin -->
    <div class="modal fade" id="addAdminModal" tabindex="-1" aria-labelledby="addAdminModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h2 class="modal-title mx-auto fw-bold" id="addAdminModalLabel">Ajouter un élève</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="trait_ajout.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nom" >Nom de l'élève</label>
                            <input type="text"  name ="nom" class="form-control" id="nom" placeholder="Nom de l'élève">
                        </div>
                        <div class="mb-3">
                            <label for="prenom" >Prénom de l'élève</label>
                            <input type="text"name ="prenom " class="form-control" id="prenom" placeholder="Prénom de l'élève">
                        </div>
                        <div class="mb-3">
                            <label for="email"   >Adresse e-mail de l'élève</label>
                            <input type="email"name ="email" class="form-control" id="email" placeholder="Adresse e-mail de l'élève">
                        </div>
                        <div class="mb-3" >
                            <label for="photo"  >Photo</label>
                            <input class="form-control" name ="photo" type="file" id="photo" name="photo" accept="image/*">
                        </div> 

                    </form>
                </div>
                <div class="modal-footer border-0">

                <button type="submit" name="submit" class="btn btn-primary w-100">Ajouter élève</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    </body>
</html>
