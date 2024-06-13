import Route from "./Route.js";

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "/pages/home.html"),
    new Route("/", "galerie",  "/pages/galerie.html"),
    new Route("/", "formulaire", "/pages/formulaire.html"),
    new Route("/", "signin", "Connexion", "/pages/signin.php", "/js/auth/signin.js"),
    
];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "VP Garage";
