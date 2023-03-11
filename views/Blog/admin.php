<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Gestion des données</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-5">Gestion des données</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>POST_ID</th>
                    <th>NOM_COMPLE</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Connexion à la base de données
                $con = mysqli_connect("localhost:3308", "root", "", "myapp");

                            // Récupération des données
            $query = "SELECT * FROM categories";
            $result = mysqli_query($con, $query);

            while($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["posts_id"]; ?></td>
                    <td><?php echo $row["libele"]; ?></td>
                    <td>
                        <a href="/edit?id=<?php echo $row["id"]; ?>" class="btn btn-info">Modifier</a>
                        <a href="/delete?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <a href="/formulaire" class="btn btn-success float-right my-3">Ajouter une entrée</a>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="yt1s.com - All about integrating Google Pay online.mp4"></iframe>
            </div>
        </div>
    </div>
</div>

</body>
</html>
