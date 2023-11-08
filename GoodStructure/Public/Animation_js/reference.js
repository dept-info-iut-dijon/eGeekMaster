
/**
 * @author Théo Cornu
*/

// Get the text from the input field reserch and Displays suggestions under the input text as you type the text and cherch in the page the location of the text to move the user to the location
function Search() {
    // Get the input field
    var input = document.getElementById("recherche");
    // Get the ul element
    var ul = document.getElementById("liste");
    // Get the li elements
    var li = ul.getElementsByTagName("li");

    // Create a loop that goes through all the li elements
    for (var i = 0; i < li.length; i++) {
        // If the text in the li matches the text in the input field
        if (li[i].innerHTML.toUpperCase().indexOf(input.value.toUpperCase()) > -1) {
            // Display the li element
            li[i].style.display = "";
        } else {
            // Don't display the li element
            li[i].style.display = "none";
        }
    }

    


    // Get the text from the input field
    var input = document.getElementById("recherche").value;
    // Get the location of the text
    var location = document.getElementById(input).offsetTop;


    function scrollToLocation() {
        window.scrollTo({
            behavior: "smooth",
            top: location
            
        });
    }

    // Sélectionnez le bouton pour remonter en haut
    const scrollToTopButton = document.querySelector(".scroll-to-top");

// Ajoutez un gestionnaire d'événement pour le clic sur le bouton
    scrollToTopButton.addEventListener("click", scrollToLocation);
}


// Attach the Sidebar function to the 'load' event
window.addEventListener('load', Search);
