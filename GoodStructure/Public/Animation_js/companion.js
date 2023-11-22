/**
 * @author Théo Deguin
*/
function openCompanion() {
    const companion = document.getElementById("companion");
    companion.style.right = "0%"; // Afficher le compagnon à droite
    setTimeout(() => {
        companion.style.right = "-50%"; // Masquer le compagnon après 20 secondes
    }, 20000);
}

window.addEventListener('load', openCompanion);