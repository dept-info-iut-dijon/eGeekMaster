// author : Enzo
// author : Nicolas


// author : Enzo et Théo Cornu
// To display or hide the task registration part
function DisplayTaskRegistration() {
    // Get references to the buttons and the task registration part
    const buttonTaskModif = document.querySelector(".boutonTaches.Modif");
    const buttonTaskSupr = document.querySelector(".boutonTaches.Supr");
    const taskR = document.getElementById("divTaskRegistration");
    const buttonTaskAdd = document.querySelector('.boutonTaches.Add');
    const titleTask = document.getElementById("titleTASK"); // Get reference to the h1 element

    // The task button is clicked
    buttonTaskAdd.addEventListener("click", function () {
        if (taskR.style.right === "0px") {
            // Close the task registration part
            taskR.style.right = "-350px";
        } else {
            // Open the task registration part
            taskR.style.right = "10%";
            titleTask.textContent = "ADD A TASK"; // Change the content of the h1 element
        }
    });

    // The task button is clicked
    buttonTaskModif.addEventListener("click", function () {
        if (taskR.style.right === "0px") {
            // Close the task registration part
            taskR.style.right = "-350px";
        } else {
            // Open the task registration part
            taskR.style.right = "10%";
            titleTask.textContent = "MODIFY A TASK"; // Change the content of the h1 element
        }
    });

    // The task button is clicked
    buttonTaskSupr.addEventListener("click", function () {
        if (taskR.style.right === "0px") {
            // Close the task registration part
            taskR.style.right = "-350px";
        } else {
            // Open the task registration part
            taskR.style.right = "10%";
            titleTask.textContent = "DELETE A TASK"; // Change the content of the h1 element
        }
    });
}



// Attach the DisplayTaskRegistration function to the 'load' event
window.addEventListener('load', DisplayTaskRegistration);




// author : Enzo
// To increment and decrement the lifetime
document.addEventListener('DOMContentLoaded', function () {
    // Initialize the values of the text fields
    var hoursValue = 0;
    var minutesValue = 0;

    var hoursInput = document.getElementById('hours');
    var minutesInput = document.getElementById('minutes');

    // Function to format the value with leading zeros
    function formatValue(value) {
        return value < 10 ? '0' + value : value;
    }

    // Update the input values with the formatted values
    function updateInputValues() {
        hoursInput.value = formatValue(hoursValue);
        minutesInput.value = formatValue(minutesValue);
    }

    // Initialize the input values
    updateInputValues();

    // Function to increment the value
    window.incrementValue = function (type) {
        if (type === 'hours') {
            hoursValue++;
        } else if (type === 'minutes') {
            minutesValue = (minutesValue + 15) % 60; 
        }

        // Update the input values
        updateInputValues();
    };

    // Function to decrement the value
    window.decrementValue = function (type) {
        if (type === 'hours' && hoursValue > 0) {
            hoursValue--;
        } else if (type === 'minutes' && minutesValue > 0) {
            minutesValue -= 15;
        }

        // Update the input values
        updateInputValues();
    };
});
