<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attendance Page</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/attendancepage.css') }}">
</head>
<body style="background-color: #ffffff;">

    <div class="header">
        <div class="header-content text-center">
            <!-- First logo (Erudithe) -->
            <img src="{{ asset('images/erudithe_logo.png') }}" alt="Erudithe Logo" class="header-logo erudithe-logo img-fluid mb-2">

            <h1>Erudithe |</h1>

            <!-- Second logo (LAF) -->
            <img src="{{ asset('images/LAFlogo.png') }}" alt="Fligno Logo" class="header-logo laf-logo img-fluid mb-2">

            <h1>Learn at Fligno</h1>
        </div>
    </div>

    <div class="container-fluid p-0">
        <!-- Unified content section -->
        <div class="content-section">
            <div class="search-box-container">
                <div class="search-box-wrapper">
                    <input type="text" class="search-box" id="searchInput" placeholder="Enter your name to record your attendance" oninput="showSuggestions()">
                    <i class="fas fa-search search-icon"></i>
                </div>
                <div class="button-container">
                    <button class="btn-custom btn-time-in" onclick="handleTimeIn()" id="attendanceButton">Time In</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating Timesheet Form with Static Data -->
    <div class="timesheet-form-container" id="timesheetContainer">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white text-center">
                <h3 class="m-0">TIMESHEET</h3>
            </div>
            <div class="card-body">
                <form id="attendanceForm">
                    <div class="form-group">
                        <label for="name"><i class="fas fa-user"></i> Name:</label>
                        <input type="text" class="form-control" id="name" readonly>
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <div class="form-group w-50 mr-1">
                            <label for="department"><i class="fas fa-building"></i> Department:</label>
                            <input type="text" class="form-control" id="department" readonly>
                        </div>
                        <div class="form-group w-50 ml-1">
                            <label for="date"><i class="fas fa-calendar-day"></i> Date:</label>
                            <input type="text" class="form-control" id="date" readonly>
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <div class="form-group w-50 mr-1">
                            <label for="time-in"><i class="fas fa-clock"></i> Time In:</label>
                            <input type="text" class="form-control" id="time-in" readonly>
                        </div>
                        <div class="form-group w-50 ml-1">
                            <label for="time-out"><i class="fas fa-clock"></i> Time Out:</label>
                            <input type="text" class="form-control" id="time-out" readonly>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-primary flex-grow-1 mx-1" onclick="viewAttendance()">View my Attendance</button>
                        <button type="button" class="btn btn-secondary flex-grow-1 mx-1" onclick="clearForm()">Okay</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; 2024 Erudithe/Fligno Timesheet. All Rights Reserved.</p>
            <p>
                <a href="#" class="text-white">Privacy Policy</a> |
                <a href="#" class="text-white">Terms of Service</a>
            </p>
        </div>
    </footer>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <!-- Axios for AJAX requests -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        let attendanceData = []; // Store fetched attendance data here
let userAttendanceStates = {}; // Track time-in/out states per employee ID



// Time In/Out range configuration
const timeInStartHour = 10; // 1 PM
const timeInEndHour = 11;   // 3 PM
const timeOutStartHour = 12; // 3 PM
const timeOutEndHour = 15;   // 4 PM

window.onload = function () {
    updateButtonLabel(); // Call this function on page load
}

// Function to get the current date in YYYY-MM-DD format
function getCurrentDate() {
    const now = new Date();
    const year = now.getFullYear();
    const month = String(now.getMonth() + 1).padStart(2, '0'); // Months are 0-based
    const day = String(now.getDate()).padStart(2, '0');
    return `${year}-${month}-${day}`;
}

// Function to update button label based on the time range
function updateButtonLabel() {
    const now = new Date();
    const currentHour = now.getHours();
    const button = document.getElementById('attendanceButton');

    if (currentHour >= timeOutStartHour && currentHour < timeOutEndHour) {
        button.textContent = 'Time Out';
        button.onclick = handleTimeOut; // Set click event to Time Out handler
    } else if (currentHour >= timeInStartHour && currentHour < timeInEndHour) {
        button.textContent = 'Time In';
        button.onclick = handleTimeIn; // Set click event to Time In handler
    } else {
        button.textContent = 'Time Not Available'; // If out of both time ranges
        button.onclick = null; // Disable button click if out of range
    }
}

// Function to handle Time In
function handleTimeIn() {
    const userId = document.getElementById('searchInput').value;

    if (userId) {
        fetchAttendanceData(userId, (records) => {
            const today = getCurrentDate();
            const todayRecords = records.filter(record => record.date === today);

            // Check if already timed in
            if (todayRecords.some(record => record.time_in !== null)) {
                alert('You have already timed in today.');
                return;
            }

            const now = new Date();
            const currentHour = now.getHours();

            // Check Time In range
            if (currentHour < timeInStartHour || currentHour >= timeInEndHour) {
                alert('Time In is only allowed between 1 PM and 3 PM.'); // Update this message as per your requirements
                return;
            }

            axios.post('/store-attendance', { employee_id: userId })
                .then(response => {
                    alert(response.data.message);
                    updateButtonLabel(); // Update button label
                })
                .catch(error => {
                    console.error('Error recording attendance:', error);
                    alert('Failed to record Time In');
                });
        });
    } else {
        alert('Please enter a user ID');
    }
}

// Function to handle Time Out
function handleTimeOut() {
    const userId = document.getElementById('searchInput').value;

    if (userId) {
        fetchAttendanceData(userId, (records) => {
            const today = getCurrentDate();
            const todayRecords = records.filter(record => record.date === today);

            // Check if already timed out
            if (todayRecords.some(record => record.time_out !== null)) {
                alert('You have already timed out today.');
                return;
            }

            // Check if timed in
            if (!todayRecords.some(record => record.time_in !== null)) {
                alert('You must time in before you can time out.');
                return;
            }

            const now = new Date();
            const currentHour = now.getHours();

            // Check Time Out range
            if (currentHour < timeOutStartHour || currentHour >= timeOutEndHour) {
                alert('Time Out is only allowed between 3 PM and 4 PM.'); // Update this message as per your requirements
                return;
            }

            axios.post('/store-attendance', { employee_id: userId, time_out: true })
                .then(response => {
                    alert(response.data.message);
                    updateButtonLabel(); // Update button label
                })
                .catch(error => {
                    console.error('Error recording attendance:', error);
                    alert('Failed to record Time Out');
                });
        });
    } else {
        alert('Please enter a user ID');
    }
}

// Function to fetch attendance data
function fetchAttendanceData(employeeId, callback) {
    axios.get(`/attendance/${employeeId}`)
        .then(response => {
            console.log('Fetched Attendance Data:', response.data); // Check the response
            attendanceData = response.data; // Assuming the response contains an array of attendance records
            callback(attendanceData); // Pass the records to the callback function
        })
        .catch(error => {
            console.error('Error fetching attendance data:', error);
            alert('Failed to fetch attendance data');
        });
}


// Function to display attendance data
function displayAttendanceData(records) {
    console.log('Attendance records received:', records); // Check if records are received

    if (records.length > 0) {
        const today = getCurrentDate();
        const todayRecords = records.filter(record => record.date === today);
        console.log('Today\'s records:', todayRecords); // Check if today's records exist

        if (todayRecords.length > 0) {
            const record = todayRecords[0];
            document.getElementById('name').value = `${record.first_name} ${record.last_name}`;
            document.getElementById('department').value = record.department;
            document.getElementById('date').value = record.date;
            document.getElementById('time-in').value = record.time_in;
            document.getElementById('time-out').value = record.time_out;
        } else {
            alert('No attendance records found for today.');
            clearForm();
        }
    } else {
        alert('No attendance records found for this user.');
    }
}


// Function to view attendance data
function viewAttendance() {
    const userId = document.getElementById('searchInput').value;
    fetchAttendanceData(userId, displayAttendanceData);
}

// Function to clear the form
function clearForm() {
    document.getElementById('name').value = '';
    document.getElementById('department').value = '';
    document.getElementById('date').value = '';
    document.getElementById('time-in').value = '';
    document.getElementById('time-out').value = '';
    // Optionally reset the button label as well
    updateButtonLabel();
}


    </script>




</body>
</html>
