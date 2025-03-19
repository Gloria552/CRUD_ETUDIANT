<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un élève</title>
    <link rel="stylesheet" href="styles.css">
</head>

<style>
  /* Réinitialisation */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }

  /* Bouton principal pour ouvrir le formulaire */
  #openModalButton {
    padding: 10px 20px;
    background-color: #007bff;
    border: none;
    border-radius: 8px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    margin-bottom: 20px;
    transition: background-color 0.3s;
  }

  #openModalButton:hover {
    background-color: #0056b3;
  }

  /* Styles du modal */
  .modal {
    display: none; /* Caché par défaut */
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.5);
  }

  .modal-content {
    background-color: #fff;
    margin: 10% auto;
    padding: 20px;
    border-radius: 10px;
    width: 350px;
    position: relative;
  }

  /* Bouton de fermeture */
  .close {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 20px;
    cursor: pointer;
  }

  /* Titre */
  h2 {
    text-align: center;
    margin-bottom: 20px;
  }

  /* Groupes de champs */
  .input-group {
    position: relative;
    margin-bottom: 20px;
  }

  /* Label en haut à droite pour chaque input */
  /* Le fond blanc et un z-index permettent de masquer la bordure de l'input sous le texte */
  .input-group label {
    position: absolute;
    top: -12px;
    left: 10px;
    background-color: #fff;
    padding: 0 5px;
    font-size: 14px;
    font-weight: bold;
    color: #555;
    z-index: 1;
  }

  /* Champs de formulaire (input, select) */
  .input-group input,
  .input-group select {
    width: 100%;
    padding: 8px;
    padding-top: 22px; /* Pour laisser de l'espace au label */
    border: 1px solid #ccc;
    border-radius: 1.5rem;
    font-size: 14px;
    background-color: #f9f9f9;
    transition: border-color 0.3s;
  }

  .input-group input:focus,
  .input-group select:focus {
    border-color: #007bff;
    outline: none;
    
  }

  /* Bouton de soumission */
  input[type="submit"] {
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  input[type="submit"]:hover {
    background-color: #0056b3;
  }
  button {
    padding: 12px;
    background-color: #007bff;
    border: none;
    
    border-radius: 1.5rem;
    color: white;
    font-size: 16px;
    cursor: pointer;

    transition: background-color 0.3s;
    width: 100%;
    border: none;
  }
  button[type="submit"]:hover {
    background-color: #0056b3;
  }

</style>
<body>
  
    <!-- Bouton principal pour ouvrir le formulaire -->
  <button id="openModalButton">Ouvrir le formulaire</button>

  <!-- Formulaire modal -->
  <div class="modal" id="userModal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Ajouter un élève</h2>
      <form action="trait_ajout.php" method="post" enctype="multipart/form-data" >
        <div class="input-group">
          <label for="nom">Nom</label>
          <input type="text" id="nom" name="nom" placeholder="Définir le nom de l'élève">
        </div>

        <div class="input-group">
          <label for="prenom">Prénom</label>
          <input type="text" id="prenom" name="prenom" placeholder="Définir le prénom de l'élève">
        </div>

        <div class="input-group" >
          <label for="email">Email</label>
          <input type="email" id="email" name="email"placeholder="Définir l'email  de l'élève" >
        </div>


        <div class="input-group" >
          <label for="photo">Photo</label>
          <input type="file" id="photo" name="photo" accept="image/*">
        </div>

       

        


        <!-- Bouton de soumission -->
        <button type="submit" name="submit" class="btn btn-primary " style="border-radius: 1.5rem;">Ajouter élève</button>

      </form>
    </div>
  </div>

  <!-- Script JavaScript pour ouvrir/fermer le formulaire -->
  <script>
    // Sélection des éléments
    const modal = document.getElementById("userModal");
    const openModalButton = document.getElementById("openModalButton");
    const closeModalButton = document.querySelector(".modal .close");

    // Ouvrir le modal au clic sur le bouton
    openModalButton.addEventListener("click", () => {
      modal.style.display = "block";
    });

    // Fermer le modal au clic sur le "x"
    closeModalButton.addEventListener("click", () => {
      modal.style.display = "none";
    });

    // Fermer le modal si l'élève clique en dehors du contenu
    window.addEventListener("click", (event) => {
      if (event.target === modal) {
        modal.style.display = "none";
      }
    });
  </script>
</body>
</html>

