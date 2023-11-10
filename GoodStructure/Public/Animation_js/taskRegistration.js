// author : Enzo
// author : Nicolas
// to increment and decrement the time you path on the task
document.addEventListener('DOMContentLoaded', function() {
    // Get DOM elements
    const hoursElement = document.getElementById('hours');
    const minutesElement = document.getElementById('minutes');
    
    const incrementHoursButton = document.getElementById('incrementHours');
    const decrementHoursButton = document.getElementById('decrementHours');
    
    const incrementMinutesButton = document.getElementById('incrementMinutes');
    const decrementMinutesButton = document.getElementById('decrementMinutes');

    const RegisterTaskButton = document.getElementById('submit');
    
    // Initialize variables
    let hours = 0;
    let minutes = 0;
    
    // Function to format numbers with leading zero if needed
    function formatNumber(number) {
        return number.toString().padStart(2, '0');
    }

    // Update display
    function updateDisplay() {
        hoursElement.textContent = formatNumber(hours);
        minutesElement.textContent = formatNumber(minutes);
    }
    
    // Increment hours function
    incrementHoursButton.addEventListener('click', () => {
        hours++;
        if (hours > 99) {
            hours = 0;
        }
        updateDisplay();
    });
    
    // Decrement hours function
    decrementHoursButton.addEventListener('click', () => {
        hours--;
        if (hours < 0) {
            hours = 0;
        }
        updateDisplay();
    });
    
    // Increment minutes function
    incrementMinutesButton.addEventListener('click', () => {
        minutes += 15;
        if (minutes > 59) {
            minutes = 0;
        }
        updateDisplay();
    });
    
    // Decrement minutes function
    decrementMinutesButton.addEventListener('click', () => {
        minutes -= 15;
        if (minutes < 0) {
            minutes = 0;
        }
        updateDisplay();
    });

    // author : Nicolas
    // Register task function
    RegisterTaskButton.addEventListener('click', () => {
        // Creating a cookie after the document is ready
        $(document).ready(function () {
            createCookie("NewTask", (hours*4*15) + minutes, "1");
        });
    });

    // author : Nicolas
    // Function to create the cookie
    function createCookie(name, value, days) {
        var expires;
        
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toGMTString();
        }
        else {
            expires = "";
        }
        
        document.cookie = escape(name) + "=" + 
            escape(value) + expires + "; path=/";
    }
});

// author : Enzo
// to display or hide the task registration part
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
