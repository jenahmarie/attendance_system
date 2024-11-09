<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timesheet by Month</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #F2F2F8;
            margin: 0;
            padding: 20px;
        }

        /* Header styles */
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #F5F5FA;
            padding: 20px;
            border-radius: 8px;
            color: #1F1F29;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Specific logo sizing */
        .erudithe-logo {
            width: auto; /* Specific width for Erudithe logo */
            height: 50px; /* Maintain aspect ratio */
        }

        .fligno-logo {
            width: auto; /* Specific width for Fligno logo */
            height: 30px; /* Maintain aspect ratio */
        }

        .header h1 {
            font-size: 24px;
            margin: 0;
            text-align: center;
            flex-grow: 1; /* Allow the title to take available space */
        }

        /* Table and info section styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #F5F5FA;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: 1px solid #dcdcdc;
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: #3f51b5;
            color: white;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 0.05em;
        }

        .grey-bg {
            background-color: #f0f0f0;
        }

        /* Month Heading */
        .month-heading {
            margin-top: 50px;
            font-size: 24px;
            font-weight: bold;
            color: #3f51b5;
        }

        /* Hover effect for table rows */
        tbody tr:hover {
            background-color: #e3f2fd;
        }

        /* For better visibility and padding on mobile */
        @media (max-width: 768px) {
            td,
            th {
                font-size: 14px;
                padding: 10px;
            }
        }

        /* Info table styles */
        .info-table {
            margin-bottom: 30px;
        }

        .highlight-yellow {
            background-color: #ffc107;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <!-- Header section with logos and title -->
    <div class="header">
        <img src="{{ asset('images/erudithe_logo.png') }}" alt="Erudithe Logo" class="erudithe-logo" />
        <h1>Work Hours Tracker</h1>
        <img src="{{ asset('images/LAFlogo.png') }}" alt="Learn at Fligno Logo" class="fligno-logo" />
    </div>

    <!-- Info Table (Fixed) -->
    <table class="info-table">
        <tr>
            <td class="highlight-yellow">Name</td>
            <td>Krizza Marie N. Bautista</td>
            <td class="highlight-yellow">Total Hours Need</td>
            <td>400:00:00</td>
        </tr>
        <tr>
            <td class="highlight-yellow">Department</td>
            <td>Finance Department</td>
            <td class="highlight-yellow">Remaining Hours</td>
            <td>0:00:00</td>
        </tr>
        <tr>
            <td class="highlight-yellow">Supervisor</td>
            <td>Khalid Mangontawar</td>
            <td class="highlight-yellow">Schedule</td>
            <td>07:00 AM - 04:00 PM</td>
        </tr>
    </table>

    <!-- Container to hold the timesheets -->
    <div id="timesheet-container"></div>

    <script>
        // Helper function to check leap year
        function isLeapYear(year) {
            return (year % 4 === 0 && year % 100 !== 0) || (year % 400 === 0);
        }

        // Helper function to get the number of days in a month
        function getDaysInMonth(month, year) {
            const daysInMonth = [31, isLeapYear(year) ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
            return daysInMonth[month];
        }

        // Helper function to create rows for a given month
        function generateTableRows(month, year) {
            let days = getDaysInMonth(month, year);
            let rows = '';

            for (let day = 1; day <= days; day++) {
                const greyBgClass = day % 2 === 0 ? 'grey-bg' : '';
                rows += `
                    <tr class="${greyBgClass}">
                        <td>${day}</td>
                        <td>08:00 AM</td>
                        <td>01:00 PM</td>
                        <td>12:00 PM</td>
                        <td>05:00 PM</td>
                        <td>8:00</td>
                        <td>PRESENT</td>
                    </tr>
                `;
            }

            return rows;
        }

        // Helper function to create a month table
        function createMonthTable(month, year) {
            const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
            const tableRows = generateTableRows(month, year);

            return `
                <div class="month-heading">${monthNames[month]} ${year}</div>
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>AM In</th>
                            <th>AM Out</th>
                            <th>PM In</th>
                            <th>PM Out</th>
                            <th>Hours Worked</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        ${tableRows}
                    </tbody>
                </table>
            `;
        }

        // Generate tables for January and February of 2024
        const year = 2024;
        const timesheetContainer = document.getElementById('timesheet-container');
        timesheetContainer.innerHTML += createMonthTable(0, year); // January
        timesheetContainer.innerHTML += createMonthTable(1, year); // February
        // You can add more months as needed
    </script>

</body>

</html>
