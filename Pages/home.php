


<?php

try{
    $dsn = "mysql:host=localhost;dbname=parrotBack;charset=utf8";
    $username = "root";
    $password = "monNomPvot";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    $pdo = new PDO($dsn,$username,$password,$options);
    echo "Connexion réussi !";

} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e-> getMessage();

}
?><!-- fin Mode de connexion à ma bdd -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="scss/main.css"/>



    <title>Page d'accueil</title>

</head>
<body>


<!-- Je vais mettre un div qui prend la largeur de mon élément et au milieu de lui, du texte-->
<div class="entetimag text-center text-white">

    <div class="entetimag-content">
       <!-- <h1>Bienvenue au garage V.Parrot</h1>-->
       <!-- <button class="btn btn-primary">Vous êtes sur la page d'accueil</button>-->
    </div>

</div>

<!--je vais réaliser le contenu de la page Home-->
<section>
    <article>

        <div class="container p-4">
            <div class="row row-cols-2 align-items-center">
                <div class="col">
                    <h2>Qui sommes-nous ?</h2>
                    <p class="text-justify">
                        Vincent Parrot, fort de ses 15 années d’expériences dans la réparation automobile a ouvert son propre garage à Toulouse en 2021.
                        Depuis 2 ans, il propose une large gamme de services à découvrir dans la rubrique “Nos services”.
                    </p>
                </div>
                <div class="col">
                    <img class="w-100 rounded" src="../Images/Images mobile/Accueil/formimag.png"/>
                </div>
            </div>
            <div class="text-center pt-4">
                <a href="/formulaire" class="btn btn-primary">Formulaire</a>
            </div>
        </div>
    </article>

    <article>

        <div class="container p-4">
            <div class="row row-cols-2 align-items-center">
                <div class="col">
                    <h2>Nos services</h2>
                    <p class="text-justify">
                        -Réparation mécanique carrosserie
                        -Entretien régulier des voitures
                        -Ventes véhicules d’occasions
                    </p>
                </div>
                <div class="col">
                    <img class="w-100 rounded" src="../Images/Images mobile/Accueil/imagtémoig.png"/>
                </div>
            </div>
            <div class="text-center pt-4">
                <a href="#" class="btn btn-primary">Témoignages</a>
            </div>
        </div>
    </article>

    <article>

        <div class="container p-4">
            <div class="row row-cols-2 align-items-center">
                <div class="col">
                    <img class="w-100 rounded" src="../Images/Images mobile/Accueil/Photoprésent.png"/>
                </div>
            </div>
            <div class="text-center pt-4">
                <a href="#" class="btn btn-primary">Voitures occasion</a>
            </div>
        </div>
    </article>





</section>

</body>

</html>


