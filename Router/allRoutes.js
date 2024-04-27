import Route from "./Route.js";

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "/pages/home.html"),
    new Route("/galerie", "La galerie", "/pages/galerie.html"),
    new Route("/formulaire", "formulaire.html", "/pages/formulaire.html"),
    
];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "VP Garage";
