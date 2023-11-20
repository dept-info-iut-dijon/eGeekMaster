/**
 * @author Théo Deguin
*/
function Companion() {
    const companion = document.getElementById("companion");
    if (companion.style.right === "-20%") {
        companion.style.right = "0%";
    } else {
        companion.style.right = "0%";
    }
};
window.addEventListener('load', Companion);