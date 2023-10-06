// JavaScript source code

var id = undefined;
var num_image = 0;
var currentImage;
var idSmiley = undefined;
let isSmiley2Hovered = false;
var heartInterval = undefined;
var smiley3Div = undefined;

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

    function createHeart() {
        console.log(smiley3);
        var smiley3Div = document.getElementById("smiley3Div")
        var heart = document.createElement("div"); 
        heart.classList.add("heart");
        heart.style.marginLeft = `${Math.random() * 80}%`;
        smiley3Div.appendChild(heart);
        setTimeout(() => {
            heart.remove();
        },3000);
        
    }
    
    function nextImage() {
        currentImage = (currentImage + 1) % listecontrol.length;
        print(currentImage);
    }
    
    function tremble() {
        if (isSmiley2Hovered) {
            smiley2.style.transform = `translate(${getRandomOffset()}px, ${getRandomOffset()}px) scale(2)`;
            idSmiley = requestAnimationFrame(tremble); // Demande une nouvelle frame d'animation
        }
    }
    
    function getRandomOffset() {
        return (Math.random() * 100) - 50;
    }
    
    /**
     * Active une image du slider
     * @param {number} number - Le numéro de l'image à activer
     */
    function print(number) {
        let listeimage = document.querySelectorAll(".slider-panel");
        let listecontrol = document.querySelectorAll(".slider-control");
        console.log(listecontrol);
        for (let i = 0; i < listeimage.length; i++) {
            listeimage[i].classList.remove("active");
            listecontrol[i].classList.remove("active");
        }
        listeimage[number].classList.add("active");
        listecontrol[number].classList.add("active");
    }
    
    function click(evt) {
        let button = evt.target;
        let controls = document.querySelectorAll(".slider-control");
        let pos = [].indexOf.call(controls, button);
        print(pos);
        currentImage = pos;
        clearInterval(id);
        id = setInterval(nextImage, 2000);
    }
// Créez une fonction pour générer un cœur


window.addEventListener('load', main);
