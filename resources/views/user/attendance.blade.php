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
                <input type="text" class="search-box" id="searchInput" placeholder="Search..." oninput="showSuggestions()">
                <div class="dropdown-container" id="dropdown-container"></div>
                <div class="button-container">
                    <button class="btn-custom btn-time-in" id="timeButton" disabled>Time In</button>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>





</body>
</html>
