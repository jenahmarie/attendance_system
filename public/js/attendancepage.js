// Function to update the button state and label
function updateButton() {
    // Get the current time
    const now = new Date();
    const currentHour = now.getHours();

    // Define the allowed time ranges
    const timeInStartHour = 6; // 7 AM for Time In
    const timeInEndHour = 9;   // 9 AM for Time In
    const timeOutStartHour = 12; // 4 PM for Time Out
    const timeOutEndHour = 19;   // 7 PM for Time Out

    // Get the button element
    const button = document.getElementById('timeButton');

    // Determine button state and label based on the current time
    if (currentHour >= timeInStartHour && currentHour < timeInEndHour) {
        // Time In range
        button.disabled = false;  // Enable the button if within the Time In range
        button.textContent = 'Time In';
        button.classList.remove('btn-time-out');
        button.classList.add('btn-time-in');
    } else if (currentHour >= timeOutStartHour && currentHour < timeOutEndHour) {
        // Time Out range
        button.disabled = false;  // Enable the button if within the Time Out range
        button.textContent = 'Time Out';
        button.classList.remove('btn-time-in');
        button.classList.add('btn-time-out');
    } else {
        // Outside both ranges
        button.disabled = true;   // Disable the button if outside both ranges
        // Optionally, retain the last valid state
        // This example assumes you want to keep the last label and class applied
        if (button.classList.contains('btn-time-in')) {
            button.textContent = 'Time In'; // Keep showing "Time In" if last state was valid
        } else if (button.classList.contains('btn-time-out')) {
            button.textContent = 'Time Out'; // Keep showing "Time Out" if last state was valid
        }
    }
}

// Call the function on page load
window.onload = updateButton;
