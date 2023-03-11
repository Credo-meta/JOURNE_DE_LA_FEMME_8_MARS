<?php


// Connexion à la base de données
$con = mysqli_connect("localhost:3308", "root", "", "myapp");

// Récupération de l'ID de la ligne à modifier
$id = $_GET['id'];

// Récupération des données de la ligne correspondante
$query = "SELECT * FROM categories WHERE id = '$id'";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);

// Vérification de la soumission du formulaire
if (isset($_POST['submit'])) {
   // Récupération des données du formulaire
   $posts_id = $_POST["posts_id"];
   $libele = $_POST["libele"];

    // Mise à jour des données dans la base de données
    $query = "UPDATE categories SET posts_id = '$posts_id', libele = '$libele' WHERE id = '$id'";
    $result = mysqli_query($con, $query);

    // Redirection vers la page de gestion des données
    header("Location: layout.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Modification de données</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-5">Modification de données</h1>
        <form action="/traitement" method="post">
            <div class="form-group">
                <label for="posts_id">Identifiant</label>
                <input type="number" id="posts_id" class="form-control" name="posts_id"  value="<?php echo $data['posts_id']; ?>" >
            </div>
            <div class="form-group">
                <label for="libele">Libellé Article</label>
                <input type="text" id="libele" class="form-control" name="libele" value="<?php echo $data['libele']; ?>" >
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</body>
</html>