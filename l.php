<?php
    include 'connexion.php';
    $requete= "SELECT * FROM eleve";
    $execute=mysqli_query($connect,$requete);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Étudiants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
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

        .table {
            border-collapse: separate;
            border-spacing: 0 10px;
            
        }
        .table thead th {
            border: none;
        }
       
        .table tbody tr {
            border-radius: 10px;
            background-color: #f8f9fa;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .table tbody td {
            border-bottom: 2px dashed #dee2e6;
            padding: 15px;
           
            
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
    <div class="container mt-4">
       
        <table class="table text-center">
            <thead class="table-light">
                <tr>
                    <th></th>
                    <th>Étudiant</th>
                    <th>Email</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($execute)) {
                    while($eleve = mysqli_fetch_assoc($execute)) { // lire chaque ligne
                        $cheminImage = "image/" . htmlspecialchars($eleve['photo']);
                        
                        echo "<tr>";
                        // Utilisation d'une div avec flex pour aligner le checkbox et la photo de profil
                        echo "<td><div class='checkbox-avatar'><input type='checkbox'></div></td>";
                        echo "<td><div class='checkbox-avatar'><img src='" . $cheminImage . "' alt='Photo de profil' class='avatar'> <strong>" . htmlspecialchars($eleve['nom']) . " " . htmlspecialchars($eleve['prenom']) . "</strong></div></td>";
                        echo "<td>" . htmlspecialchars($eleve['email']) . "</td>";
                        // Application correcte de la classe badge selon le statut
                        $statut = htmlspecialchars($eleve['statut']);
                        $badgeClass = ($statut == 'Actif') ? 'badge-success' : 'badge-danger';
                        echo "<td><span class='badge $badgeClass'>" . $statut . "</span></td>";
                        echo "<td>";
                        echo "<a href='modifier.php?id=" . $eleve['id'] . "' class='icon-button'><i class='fas fa-edit edit-icon'></i></a>";
                        echo "<a href='supprimer.php?id=" . $eleve['id'] . "' class='icon-button'><i class='fas fa-trash delete-icon'></i></a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

    <script>
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
