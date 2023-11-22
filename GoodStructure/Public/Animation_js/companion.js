/**
 * @author Théo Deguin
*/
function openCompanion() {
    const companion = document.getElementById("companion");
    companion.style.right = "0%"; // Afficher le compagnon à droite
    window.addEventListener('click',VerifiedClicked);
    setTimeout(() => {
        companion.style.right = "-50%"; // Masquer le compagnon après 20 secondes
    }, 2000);
    
    
    
}

function VerifiedClicked(){
    var divTaskRegistration = document.getElementById('divTaskRegistration');

    if(divTaskRegistration != null)
    {
        if(divTaskRegistration.style.right === "0px"){
            companion.style.top = "300px";
        }
        
    }
}

window.addEventListener('load', openCompanion);
