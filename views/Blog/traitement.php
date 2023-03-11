<?php


$server = 'localhost:3308';
$username = 'root';
$userpass = '';
$dbname = 'myapp';

try {
    $dbconn = new PDO("mysql:host=$server;dbname=$dbname", $username, $userpass);
    $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo 'Echec de connexion : ' . $e->getMessage();
}



// Vérification que les données ont été envoyées en POST
if(isset($_POST["posts_id"]) && isset($_POST["libele"])) {

    // Récupération des données du formulaire
    $posts_id = $_POST["posts_id"];
    $libele = $_POST["libele"];

    // Préparation et exécution de la requête d'insertion
    $req = $dbconn->prepare("INSERT INTO categories (posts_id, libele) VALUES('$posts_id','$libele') ");
			$req->execute();
			$req->closeCursor();
        }