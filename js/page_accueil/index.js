// JavaScript source code
import accueil from "module-name";


function main() {
    console.log("Hello, world");
    listecontrol = document.querySelectorAll(".slider-control");
    for (let i = 0; i < listecontrol.length; i++) {
        listecontrol[i].onclick = click;
    }
    currentImage = 0;
    id = setInterval(nextImage, 2000);

    // Récupérez les éléments img par leur id
    var smiley1 = document.getElementById("smiley1");
    var smiley2 = document.getElementById("smiley2");
    var smiley3 = document.getElementById("smiley3");

    // Ajoutez un gestionnaire d'événement pour le survol de la souris sur smiley1
    smiley1.addEventListener("mouseover", () => {
        smiley1.style.transition = "transform 0.5s"; // Ajoutez une transition de 0.5 seconde
        smiley1.style.transformOrigin = "center center"; // Définissez l'origine de la transformation au centre de l'image
        smiley1.style.transform = "rotate(360deg)"; // Applique une rotation de 360 degrés
    });

    // Ajoutez un gestionnaire d'événement pour le départ de la souris sur smiley1
    smiley1.addEventListener("mouseout", () => {
        smiley1.style.transition = "transform 0.5s"; // Ajoutez une transition de 0.5 seconde
        smiley1.style.transform = "rotate(0deg)"; // Réinitialise la rotation
    });

    // Ajoutez un gestionnaire d'événement pour le survol de la souris sur smiley2
    smiley2.addEventListener("mouseover", () => {
        isSmiley2Hovered = true; // La souris survole smiley2
        smiley2.style.transition = "transform 0.5s, scale 0.1s"; // Ajoutez une transition pour la transformation et l'échelle de 0.5 seconde
        smiley2.style.transformOrigin = "center center"; // Définissez l'origine de la transformation au centre de l'image
        smiley2.style.transform = "scale(3)"; // Applique une échelle de 3 fois la taille d'origine
        // Ajoutez une animation de tremblement en utilisant les animations CSS
        tremble();
    });

    // Ajoutez un gestionnaire d'événement pour le départ de la souris sur smiley2
    smiley2.addEventListener("mouseout", () => {
        isSmiley2Hovered = false; // La souris ne survole plus smiley2
        smiley2.style.transition = "transform 0.5s, scale 0.2s"; // Ajoutez une transition pour la transformation et l'échelle de 0.5 seconde
        smiley2.style.transformOrigin = "center center"; // Définissez l'origine de la transformation au centre de l'image
        smiley2.style.transform = "scale(1)"; // Réinitialise l'échelle à la taille d'origine
        // Réinitialise l'animation de tremblement
        cancelAnimationFrame(idSmiley);
    });

    // Ajoutez un gestionnaire d'événement pour le survol de la souris sur smiley3
    smiley3.addEventListener("mouseover", () => {
        // Créez un intervalle pour générer des cœurs à intervalles réguliers
        heartInterval = setInterval(createHeart, 400); // Génère un cœur toutes les 200 millisecondes (ajustez selon vos besoins)
       
    });
    smiley3.addEventListener("mouseout", () => {
        // Arrêtez de générer des cœurs lorsque la souris quitte le smiley3
        clearInterval(heartInterval);
    });
    // Ajoutez des gestionnaires d'événements pour les liens du header
    
}

// Créez une fonction pour générer un cœur


window.addEventListener('load', main);
