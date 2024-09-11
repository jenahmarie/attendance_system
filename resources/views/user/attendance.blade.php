<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('css/attendancepage.css') }}">

</head>
<body>

    <div class="container-fluid p-0">
        <!-- Top half with image -->
        <div class="top-half">
            <div class="search-box-container">
                <div class="search-box-label">TIMESHEET ERUDITHE/FLIGNO</div>
                <input type="text" class="search-box" placeholder="Search...">
                <div class="button-container">
                    <button class="btn-custom btn-time-in" id="timeButton" disabled>Time In</button>
                    {{-- <button class="btn-custom btn-time-out">Time Out</button> --}}
                </div>
            </div>
        </div>

        <!-- Bottom half with white background -->
        <div class="bottom-half">
            <h1>Welcome to Our Website</h1>
            <p>Practice Page</p>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <script>
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
    </script>


</body>
</html>
