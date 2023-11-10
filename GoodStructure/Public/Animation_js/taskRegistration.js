// author : Enzo
// author : Nicolas


// author : Enzo
// To display or hide the task registration part
function DisplayTaskRegistration() {
    // Get references to the button, the task registration part
    const buttonTask = document.getElementById("boutonTaches");
    const taskR = document.getElementById("divTaskRegistration");

    // The task button is clicked
    buttonTask.addEventListener("click", function () {
        if (taskR.style.right === "0px") {
            // Close the task registration part
            taskR.style.right = "-350px";
        } else {
            // Open the task registration part
            taskR.style.right = "40px";
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
