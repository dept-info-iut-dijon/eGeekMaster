/**
 * @author Lola Cohidon
*/

function showDetailed() {
    var contentDiv = document.getElementById("content");
    contentDiv.innerHTML = "";  

    // Add text for Detailed View
    var boutonDetails = [
        { id: "followCleaning", nom: "Cleaning", image: "Public/image/page_followUp/img_cleaning2.png" },
        { id: "followShopping", nom: "Shopping", image: "Public/image/page_followUp/img_shopping2.png" },
        { id: "followCooking", nom: "Cooking", image: "Public/image/page_followUp/img_cooking2.png" },
        { id: "followDishes", nom: "Dishes", image: "Public/image/page_followUp/img_dishes2.png" },
        { id: "followLaundry", nom: "Laundry", image: "Public/image/page_followUp/img_laundry2.png" },
        { id: "followChildrensCare", nom: "Children's Care", image: "Public/image/page_followUp/img_childrenCare2.png" },
        { id: "followChildsPlay", nom: "Child's Play", image: "Public/image/page_followUp/img_childsPlay2.png" },
        { id : "followChildrensJourney", nom: "Children's Journey", image: "Public/image/page_followUp/img_childrensJourney2.png" },
        { id : "followParentCare", nom: "Parent Care", image: "Public/image/page_followUp/img_parentCare2.png" },
        { id : "followAdministrative", nom: "Administrative", image: "Public/image/page_followUp/img_administrative2.png" },
        { id : "followPetCare", nom: "Pet Care", image: "Public/image/page_followUp/img_petCare2.png" },
        { id : "followGardening", nom: "Gardening", image: "Public/image/page_followUp/img_gardening2.png" },
        { id : "followdiy", nom: "DIY", image: "Public/image/page_followUp/img_diy2.png" },
        { id : "followhousehold", nom: "Household", image: "Public/image/page_followUp/img_householdManagement2.png" },
    ];

    // Add custom buttons for detailed view
    boutonDetails.forEach(function (bouton) {
        var buttonDiv = document.createElement("div");
        buttonDiv.className = "button button-detail";
        var originalHTML = `
            <div class="image-container">
                <img src="${bouton.image}" alt="${bouton.nom}" class="image">
            </div>
            ${bouton.nom}
        `;

        buttonDiv.innerHTML = originalHTML;
        // Add a 'click' event handler to the button
        buttonDiv.addEventListener('click', function() {
            // If the custom text is already displayed, re-display the button's name and image
            if (this.innerHTML === "Texte personnalisé") {
                this.innerHTML = originalHTML;
            } else {
                // Otherwise, display the custom text
                this.innerHTML = "Texte personnalisé";
            }
        });
        contentDiv.appendChild(buttonDiv);
    });
    hideGlobal();
}

function showGlobal() {
    var contentDiv = document.getElementById("content");
    // Clear the existing content
    contentDiv.innerHTML = "";

    // Add text for Global View
    var globalText = document.getElementById("globalText");
    globalText.innerText = "Année 2023/2024";
}

function hideGlobal() {
    var globalText = document.getElementById("globalText");
    globalText.innerText = "";
}




function ActionDetail() {
    const suiviD = document.getElementById("suiviD");
    const suiviG = document.getElementById("suiviG");
    suiviD.addEventListener("click", showDetailed);
    suiviG.addEventListener("click", showGlobal);
}


window.addEventListener('load', ActionDetail);



