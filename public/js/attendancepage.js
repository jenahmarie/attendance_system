
// Get the current time
const now = new Date();
const currentHour = now.getHours();

// Define the allowed time ranges
const timeInStartHour = 7; // 7 AM for Time In
const timeInEndHour = 9;   // 9 AM for Time In
const timeOutStartHour = 16; // 4 PM for Time Out
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
    // Retain the button text based on the last valid state
    // Ensure to keep the correct label and class as per the last valid time
}
