/**
 * @author Théo Deguin
*/
function openCompanion() {
    const companion = document.getElementById("companion");
    companion.style.right = "0%"; // Afficher le compagnon à droite
    
    setTimeout(() => {
        companion.style.right = "-2000px"; // Masquer le compagnon après 3 secondes
    }, 3000);
}

window.addEventListener('load', openCompanion);