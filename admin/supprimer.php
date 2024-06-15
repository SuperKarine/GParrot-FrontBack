<?php

require("../Pages/galerie.php");
$Cars=afficher();

//Connection à la base de données


try {
    $dsn = "mysql:host=localhost;dbname=parrotBack;charset=utf8";
    $username = "root";
    $password = "monNomPvot";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    $pdo = new PDO($dsn, $username, $password, $options);
    echo "Connexion réussi !";

} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();

}
?><!-- fin Mode de connexion à ma bdd -->



<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="scss/main.css"/>
    <title>Formulaire de gestion</title>
</head>
<body>

<header>
    <!--Début Navbar-->
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">VP Garage</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/voitures d'occasion">Voitures d'occasion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/formulaire">Formulaire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Critères de sélection</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Formulaire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signin">Connexion</a>
                    </li>
                </ul>
            </div>
            <!--Fin Navbar-->
        </div>
    </nav>
</header>

<div class="album py-5 bg-body-tertiary">
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


            <!-- Formulaire  -->

            <form method="post">
                <div class="mb-3">

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Identifiant de la voiture</label>
                    <input type="number" class="form-control" name="idcars" required>
                </div>

                <button type="submit" name="Valider"  class="btn btn-primary">Supprimer une voiture</button>
            </form>

                </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            <?php foreach($Cars as $Car): ?>
            <div class="col">
                <div class="card shadow-sm">
                    <><?= $Car->id?>Placeholder</>
                    <img src="$Car->image ?>
                        <div class="card-body">


                </div>
            </div>
        </div>

        <?php endforeach;?>


        </div>

    </div></div>

<!--Début footer-->

<footer class="bg-dark text-white text-center footer">
    <div class="row">
        <div class="col-12 col-lg-4">
            <h3 class="text-primary">Nos horaires</h3>
            <p>Du lundi au vendredi  08:45-12:00  14:00-18:00</p>
            <p>samedi  08:45-12:00</p>
            <p>dimanche  Fermé</p>
        </div>
        <div class="col-6 col-lg-4">
            <p>VPGarage<br/>
                54 rue des Roses <br/>
                75000 Paris <br/>
                01 24 56 78 88 vparrot@gmail.com<br/>
            </p>
        </div>
        <div class="col-6 col-lg-4">
            <button class="btn btn-primary">Formulaire</button>
        </div>
    </div>
</footer>

<!--Fin footer-->



<script src=".js/script.js"></script>
<script type="module" src="Router/router.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>

<?php
if(isset($_POST["Valider"]))
{
    if(isset($_POST["idcars"])
    {
         if (!empty($_POST["idcars"]) AND is_numeric($_POST["idcars"]))
        {

            $idcars = htmlspecialchars(strip_tags($_POST["idcars"]));

            try {
                supprimer($idcars);

            }
            catch (Exception $e)
            {
                $e->getMessage();

            }

        }

    }

}

?>

