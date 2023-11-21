/**
 * @author Théo Deguin
*/
function openCompanion() {
    const companion = document.getElementById("companion");
    if (companion.style.right !== "0%") {
        companion.style.right = "0%";
        
    }
    setTimeout(() => {
        // Après 1 seconde, retournez à droite
        companion.style.right = "-2000px";
    }, 3000);
}

window.addEventListener('load', openCompanion);