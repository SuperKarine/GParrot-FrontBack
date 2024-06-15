<!-- Mode de connexion à ma bdd -->

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



    <title>Page de Connexion</title>

</head>
<body>

<!--Bloc de bigtitle-->
<div class="entetimag text-center text-white">

    <div class="entetimag-content">
        <h1>Connexion</h1>
        <!-- <button class="btn btn-primary">Vous êtes sur la page d'accueil</button>-->
    </div>

</div>

<!--Je vais créer un div class container pour y insérer mon formulaire-->

<!--formulaire de connexion-->
<div class="container">
    <form>
        <div class="mb-3">
            <label for="EmailInput" class="form-label">Email</label>
            <input type="email" class="form-control" id="EmailInput" placeholder="test@mail.fr" name="Email">
            <div class="invalid-feedback">
                Le mail et le mot de passe ne correspondent pas
            </div>
        </div>
        <div class="mb-3">
            <label for="PasswordInput" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="PasswordInput" name="Password">
        </div>
        <div class="text-center">
            <button type="button" class="btn btn-primary">Connexion</button>
        </div>
    </form>
    <div class="text-center pt-3">
        <a href="/signup">Vous n’avez pas de compte ? Inscrivez-vous ici !</a>
    </div>
</div>

<!--Fin formulaire-->

<script src=".js/script.js"></script>
<script type="module" src="Router/router.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>
