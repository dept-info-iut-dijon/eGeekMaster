/**
 * @author Lola Cohidon
*/

function showDetailed() {
    var contentDiv = document.getElementById("content");
    contentDiv.innerHTML = "";  // Effacer le contenu existant

    // Remplacez les noms et les images selon vos besoins
    var boutonDetails = [
        { id: "followCleaning", nom: "Cleaning", image: "Public/image/page_followUp/img_cleaning.png" },
        { id: "followShopping", nom: "Shopping", image: "Public/image/page_followUp/img_shopping.png" },
        { id: "followCooking", nom: "Cooking", image: "Public/image/page_followUp/img_cooking.png" },
        { id: "followDishes", nom: "Dishes", image: "Public/image/page_followUp/img_dishes.png" },
        { id: "followLaundry", nom: "Laundry", image: "Public/image/page_followUp/img_laundry.png" },
        { id: "followChildrensCare", nom: "Children's Care", image: "Public/image/page_followUp/img_childrenCare.png" },
        { id: "followChildsPlay", nom: "Child's Play", image: "Public/image/page_followUp/img_childsPlay.png" },
        { id : "followChildrensJourney", nom: "Children's Journey", image: "Public/image/page_followUp/img_childrensJourney.png" },
        { id : "followParentCare", nom: "Parent Care", image: "Public/image/page_followUp/img_parentCare.png" },
        { id : "followAdministrative", nom: "Administrative", image: "Public/image/page_followUp/img_administrative.png" },
        { id : "followPetCare", nom: "Pet Care", image: "Public/image/page_followUp/img_petCare.png" },
        { id : "followGardening", nom: "Gardening", image: "Public/image/page_followUp/img_gardening.png" },
        { id : "followdiy", nom: "DIY", image: "Public/image/page_followUp/img_diy.png" },
        { id : "followhousehold", nom: "Household", image: "Public/image/page_followUp/img_householdManagement.png" },
    ];

    // Ajouter des boutons personnalisés pour le suivi détaillé
    boutonDetails.forEach(function (bouton) {
        var buttonDiv = document.createElement("div");
        buttonDiv.className = "button button-detail";
        buttonDiv.innerHTML = `
            <div class="image-container">
                <img src="${bouton.image}" alt="${bouton.nom}" class="image">
            </div>
            ${bouton.nom}
        `;
        contentDiv.appendChild(buttonDiv);
    });
}
