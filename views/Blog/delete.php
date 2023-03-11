<?php
// Connexion à la base de données
$con = mysqli_connect("localhost:3308", "root", "", "myapp");

// Récupération de l'ID de l'entrée à supprimer
$id = $_GET['id'];

// Requête SQL pour supprimer l'entrée
$query = "DELETE FROM categories WHERE id = '$id'";

// Exécution de la requête
if (mysqli_query($con, $query)) {
    // Redirection vers la page de gestion des données
    header("Location: /admin");
} else {
    echo "Erreur lors de la suppression : " . mysqli_error($con);
}
?>
