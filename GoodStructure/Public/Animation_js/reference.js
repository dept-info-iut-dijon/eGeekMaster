/**
 * @author Théo Cornu
 * @author Lola Cohidon
*/

const scrollToTopButton = document.getElementById("btn-icon-content");

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
  var select = document.getElementsByClassName("tdToDisplay");
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



    

}

document.addEventListener("DOMContentLoaded", function () {
    // Sélectionne tous les éléments tdToDisplay
    var tdToDisplayElements = document.querySelectorAll('.tdToDisplay');
  
    // Ajoute un écouteur d'événement click à chaque élément tdToDisplay
    tdToDisplayElements.forEach(function (element) {
      element.addEventListener('click', function () {
        // Récupère l'élément supplémentaire contenant le descriptif et la valeur
        var extraInfo = element.querySelector('.extra-info');
  
        // Bascule la visibilité de l'élément supplémentaire
        extraInfo.classList.toggle('visible');
      });
    });
  });


// Ajoutez un gestionnaire d'événement pour le clic sur le bouton
scrollToTopButton.addEventListener("click", Search);





  

