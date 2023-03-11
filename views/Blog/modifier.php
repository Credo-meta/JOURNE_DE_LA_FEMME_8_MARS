
<?php
session_start();

// Connexion à la base de données
$con = mysqli_connect("localhost:3308", "root", "", "employee");

// Récupération de l'ID de la ligne à modifier
$id = $_GET['id'];

// Récupération des données de la ligne correspondante
$query = "SELECT * FROM emloyee_data WHERE id = '$id'";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);

// Vérification de la soumission du formulaire
if (isset($_POST['submit'])) {
    // Récupération des données du formulaire
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Mise à jour des données dans la base de données
    $query = "UPDATE emloyee_data SET name = '$name', email = '$email' WHERE id = '$id'";
    $result = mysqli_query($con, $query);

    // Redirection vers la page de gestion des données
    header("Location: index.php");
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
        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" name="name" value="<?php echo $data['name']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $data['email']; ?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</body>
</html>
