import Route from "./Route.js";

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "/Pages/home.php"),
    new Route("/", "galerie",  "/Pages/galerie.php"),
    new Route("/", "formulaire", "/Pages/formulaire.html"),
    new Route("/", "Cars", "/Pages/Cars.php"),
    new Route("/", "index.php", "/admin/index.php"),
    new Route("/", "signin", "Connexion", "/Pages/signin.php", "/js/auth/signin.js"),
    
];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "VP Garage";
