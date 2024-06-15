<!-- Créer des fonctions pour ajouter, supprimer, modifier... une voiture-->

<?php


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
<!-- fin Mode de connexion à ma bdd -->

//Je vais créer une var pour afficher mes cars


// Fonction pour ajouter une voiture
    function ajouter($model, $marque, $kilometres, $prix, $carburant, $image) {
    global $access;
    if (require("signin.php")) {

    $req = $access->prepare("INSERT INTO Cars (model, marque, kilometres, prix, carburant, image) VALUES (?, ?, ?, ?, ?, ?)");
    $req->execute(array($model, $marque, $kilometres, $prix, $carburant, $image));

//je ferme la fonction
    $req->closeCursor();
    }
}


function afficher() {
    global $access;
    if (require("signin.php")) {

        $req = $access->prepare("SELECT * FROM Cars");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        //je ferme la fonction

        $req->closeCursor();

        return $data;
        }
    }


// Fonction supprimer

function supprimer($id_cars) {
    global $access;
    if (require("signin.php"))
    {
        $req = $access->prepare("DELETE FROM Cars WHERE id_cars = ?");

        $req->execute(array($id_cars));

//je ferme la fonction
        $req->closeCursor();
    }
}


?>

<!--Fin fonction php-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="scss/main.css"/>



    <title>Galerie</title>

</head>
<body>

<h1>Galerie</h1>
<!-- Je vais mettre un div qui prend la largeur de mon élément et au milieu de lui, du texte-->
<div class="entetimag text-center text-white">

    <div class="entetimag-content">
        <!-- <h1>Bienvenue au garage V.Parrot</h1>-->
        <!-- <button class="btn btn-primary">Vous êtes sur la page d'accueil</button>-->
    </div>

</div>

<!--Création du placement des images de la galerie et boutons supprimer ou modifier-->
<div class="container">
    <div class="text-center">
        <button type="button" class="btn btn-primary"data-bs-toggle="modal" data-bs-target="#EditionPhotoModal">>Ajouter une photo</button>
    </div>

    <div class="row row-cols-2 row-cols-lg-3">
        <div class="col p-3">

            <div class="image-card text-white">
                <img src="../Images/Images mobile/Galerie/Audi A6.png" class="rounded w-100" alt="Titre"/>
                <p class="titre-image">Titre</p>
                <div class="action-image-buttons">
                    <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#EditionPhotoModal"><i class="bi bi-pencil-square"></i></button>
                    <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#DeletePhotoModal"><i class="bi bi-trash"></i></button>
                </div>

            </div>

        </div>
        <!— Ajouter d’autres images —>
        <div class="col p-3">
            <img src="../Images/Images mobile/Galerie/Mercedes%20AMG%202019.png" class="rounded w-100"/>
        </div>
        <div class="text-center">
            <a href="#" class="btn btn-primary">Renseignement</a>
        </div>

    </div>

</div>

<!-- Modal edition -->
<div class="modal fade" id="EditionPhotoModal" tabindex="-1" aria-labelledby="EditionPhotoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5" id="EditionPhotoModalLabel">Edition Photo</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!--Formulaire d'édition de photo-->
                <form>
                    <div class="mb-3">
                        <label for="NamePhotoInput" class="form-label">Titre</label>
                        <input type="text" class="form-control" id="NamePhotoInput" placeholder="" name="Titre">
                    </div>
                    <div class="mb-3">
                        <label for="ImageInput" class="form-label">Image</label>
                        <input type="file" class="form-control" id="ImageInput"  name="Image">
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal suppression -->
<div class="modal fade" id="DeletePhotoModal" tabindex="-1" aria-labelledby="DeletePhotoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5" id="DeletePhotoModalLabel">Etes-vous sûr de vouloir supprimer cette photo ?</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!--Formulaire d'édition de photo-->
                <form>
                    <div class="mb-3">
                        <p>Titre</p>
                        <img src="../Images/Images mobile/Galerie/Mercedes%20AMG%202019.png" class="rounded w-100"/>
                    </div>

                    <div class="text-center">
                        <button type="button" class="btn btn-danger">Supprimer</button>
                        <button type="button" class="btn btn-secondary"data-bs-dismiss="modal">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src=".js/script.js"></script>
<script type="module" src="Router/router.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>
