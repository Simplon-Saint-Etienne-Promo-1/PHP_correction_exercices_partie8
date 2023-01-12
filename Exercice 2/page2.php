<?php
    // Démarrer la session
    session_start();
    
    // Récupérer les variables nom, prenom et age depuis la session
    $nom = $_SESSION['lastname'];
    $prenom = $_SESSION['firstname'];
    $age = $_SESSION['age'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page 2</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Page 2</h1>
    <!-- Affiche le contenu des variables -->
    <p>Nom : <?php echo $nom; ?></p>
    <p>Prénom : <?php echo $prenom; ?></p>
    <p>Age : <?php echo $age; ?></p>
</body> 
</html>
