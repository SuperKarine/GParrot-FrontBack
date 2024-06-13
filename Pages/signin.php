<!-- Mode de connexion à ma bdd -->

<?php

try{
    $access= new pdo("mysql:host=localhost;dbname=parrotBack;charset=utf8", "root", "monNomPvot");
    $access-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

} catch (Exception $e) {
    echo $e-> getmessage();

}
?>

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
