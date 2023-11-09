document.addEventListener('DOMContentLoaded', function() {
    // Get DOM elements
    const hoursElement = document.getElementById('hours');
    const minutesElement = document.getElementById('minutes');
    
    const incrementHoursButton = document.getElementById('incrementHours');
    const decrementHoursButton = document.getElementById('decrementHours');
    
    const incrementMinutesButton = document.getElementById('incrementMinutes');
    const decrementMinutesButton = document.getElementById('decrementMinutes');
    
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
});


function Sidebar() {
    // Get references to the menu button, menu, and the menu overlay
    const menuButton = document.getElementById("boutonTaches");
    const menu = document.getElementById("divTaskRegistration");

    // Toggle menu visibility when the menu button is clicked
    menuButton.addEventListener("click", function () {
        if (menu.style.right === "0px") {
            // Close the menu and overlay
            menu.style.right = "-350px";
        } else {
            // Open the menu and overlay, add box shadow
            menu.style.right = "40px";
        }
    });
}

// Attach the Sidebar function to the 'load' event
window.addEventListener('load', Sidebar);
