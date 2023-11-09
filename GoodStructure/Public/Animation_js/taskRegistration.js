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
    
    // Handle increment and decrement
    incrementHoursButton.addEventListener('click', () => {
        hours++;
        if (hours > 99) {
            hours = 0;
        }
        updateDisplay();
    });
    
    decrementHoursButton.addEventListener('click', () => {
        hours--;
        if (hours < 0) {
            hours = 0;
        }
        updateDisplay();
    });
    
    incrementMinutesButton.addEventListener('click', () => {
        minutes += 15;
        if (minutes > 59) {
            minutes = 0;
        }
        updateDisplay();
    });
    
    decrementMinutesButton.addEventListener('click', () => {
        minutes -= 15;
        if (minutes < 0) {
            minutes = 0;
        }
        updateDisplay();
    });
});
