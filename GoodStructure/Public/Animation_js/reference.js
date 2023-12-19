/**
 * @author Théo Cornu
 * @author Lola Cohidon
*/

// Get the text from the input field reserch and Displays suggestions under the input text as you type the text and cherch in the page the location of the text to move the user to the location
function Search() {
    // Get the text from the input field
    var inputText = document.getElementById("research").value;
    

    // Get the location of the text on the page by the value of the input text si celle ci n'est pas null
    if (inputText == "") {
        var location = document.getElementById("HouseholdManagement");
    }
    else {
        var location = document.getElementById(inputText);
    }

    var rect = location.getBoundingClientRect();
    function scrollToLocation() {
        window.scrollTo({
            behavior: "smooth",
            top: rect.y
        });
    }

    // Sélectionnez le bouton pour remonter en haut
    const scrollToTopButton = document.querySelector(".btn-icon-content");

    // Ajoutez un gestionnaire d'événement pour le clic sur le bouton
    scrollToTopButton.addEventListener("click", scrollToLocation);


}




// Variable to keep track of whether the checkboxes are expanded or not
var expanded = false;

// Function to show/hide the checkboxes
function showDescription() {
  // Get the element with the id "checkboxes"
  var checkboxes = document.getElementsByClassName('tdToNotDisplay')
  // Get the element with the id "selectbox"
  var select = document.getElementsByClassName("tdToDisp    lay");
  // If the checkboxes are not expanded
  if (!expanded) {
    select.style.borderBottomLeftRadius = "0px";
    select.style.borderBottomRightRadius = "0px";

    // Make checkboxes visible with animation
    checkboxes.style.display = "block";
    checkboxes.style.height = "0px";
    checkboxes.style.transition = "height 0.3s ease-out";
    var height = checkboxes.scrollHeight + "px";
    checkboxes.style.height = height;
    checkboxes.style.border = "1px solid #ccc";
    checkboxes.style.overflow = "auto";
   
    expanded = true;
  }
  // If the checkboxes are already expanded 
  else {
    
    // Make checkboxes invisible with animation
    checkboxes.style.height = "0px";
    checkboxes.style.transition = "height 0.3s ease-out";
    setTimeout(function() {
      checkboxes.style.display = "none";
    }, 300);
    expanded = false;
    
}

// // Sélectionnez le champ de recherche
// var input = document.querySelector('.input');

// // Ajoutez un gestionnaire d'événements keyup
// input.addEventListener('keyup', function(event) {
//     // Récupérez la valeur de recherche
//     var searchValue = event.target.value;

//     // Parcourez tous les éléments de la page
//     var elements = document.querySelectorAll('div, p, span, a, h1, h2, h3, h4, h5, h6');
//     elements.forEach(function(element) {
//         // Si l'élément contient la valeur de recherche, mettez-le en évidence
//         if (element.textContent.includes(searchValue)) {
//             element.style.backgroundColor = 'yellow';
//         } else {
//             element.style.backgroundColor = '';
//         }
//     });

//     // Si l'utilisateur appuie sur Entrée, faites défiler jusqu'au premier élément mis en évidence
//     if (event.key === 'Enter') {
//         var highlightedElement = document.querySelector('[style="background-color: yellow;"]');
//         if (highlightedElement) {
//             highlightedElement.scrollIntoView();
//         }
//     }
// });

    

}

    const scrollToTopButton = document.querySelector(".btn-icon-content");

    // Ajoutez un gestionnaire d'événement pour le clic sur le bouton
    scrollToTopButton.addEventListener("click", Search);
// Attach the Sidebar function to the 'load' event
// window.addEventListener('load', Search);
// window.addEventListener('load',showDescription);