<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        .top-half {
            height: 50vh; /* Full half of the screen */
            background: url('{{ asset('images/attendancebg.jpg') }}') no-repeat center center;
            background-size: cover;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .search-box-container {
            width: 80%; /* Adjust width as needed */
            max-width: 800px; /* Maximum width */
        }
        .search-box-label {
            font-size: 24px;
            font-weight: bold;
            color: #000000;
            margin-bottom: 10px; /* Space between label and search bar */
        }
        .search-box {
            width: 100%;
            padding: 15px;
            font-size: 20px;
            border-radius: 25px; /* Rounded corners */
            border: 2px solid #ddd; /* Border color */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow effect */
            background-color: #fff;
        }
        .search-box:focus {
            border-color: #007bff; /* Change border color on focus */
            outline: none;
            box-shadow: 0 4px 8px rgba(0, 123, 255, 0.5); /* Change shadow color on focus */
        }
        .button-container {
            width: 80%;
            max-width: 800px;
            display: flex;
            justify-content: space-around;
            margin-top: 20px; /* Space above buttons */
            margin-left: 80px;
        }
        .btn-custom {
            width: 45%;
            padding: 15px;
            font-size: 18px;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            text-transform: uppercase; /* Capitalize text */
            font-weight: bold; /* Bold text */
            transition: all 0.3s ease; /* Smooth transition for effects */
        }
        .btn-time-in {
            background: linear-gradient(45deg, #4caf50, #81c784); /* Green gradient */
        }
        .btn-time-out {
            background: linear-gradient(45deg, #f44336, #e57373); /* Red gradient */
        }
        .btn-custom:hover {
            opacity: 0.9; /* Slightly transparent on hover */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3); /* Enhanced shadow on hover */
        }
        .bottom-half {
            height: 50vh; /* Full half of the screen */
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .bottom-half h1 {
            color: #333;
        }
        .bottom-half p {
            color: #555;
        }
    </style>
</head>
<body>

    <div class="container-fluid p-0">
        <!-- Top half with image -->
        <div class="top-half">
            <div class="search-box-container">
                <div class="search-box-label">TIMESHEET ERUDITHE/FLIGNO</div>
                <input type="text" class="search-box" placeholder="Search...">
                <div class="button-container">
                    <button class="btn-custom btn-time-in">Time In</button>
                    <button class="btn-custom btn-time-out">Time Out</button>
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
</body>
</html>
