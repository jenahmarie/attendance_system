<html>
 <head>
  <title>
   Employee Attendance
  </title>
  {{-- for sidebar --}}
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
  <style>
  /* for sidebar */

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            background-color: #f0f4f8;
        }
        .container {
            display: flex;
        }
        .sidebar {
            width: 80px;
            background-color: #007bff;
            padding: 20px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .sidebar i {
            color: white;
            font-size: 24px;
            margin: 20px 0;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            margin: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header input {
            width: 300px;
            padding: 10px;
            border-radius: 20px;
            border: 1px solid #ddd;
        }
        .header .search-icon {
            position: relative;
            left: -30px;
            color: #007bff;
        }
        .header .admin {
            display: flex;
            align-items: center;
        }
        .header .admin img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .header .admin span {
            font-weight: 500;
        }
        .attendance {
            margin-top: 20px;
        }
        .attendance h2 {
            font-weight: 500;
        }
        .attendance .filters {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }
        .attendance .filters select, .attendance .filters input {
            margin-left: 10px;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .profiles {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start; /* Aligns items to the left */
        gap: 20px; /* Adds space between the cards */
        margin-top: 20px;
    }

    .profile-card {
        width: calc(20% - 20px); /* Each card takes up 20% of the row, minus the gap */
        background-color: #f9f9f9;
        border-radius: 10px;
        text-align: center;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* For screens with medium width (tablet-sized devices) */
    @media (max-width: 1024px) {
        .profile-card {
            width: calc(25% - 20px); /* 4 cards per row on medium screens */
        }
    }

    /* For smaller screens (mobile-sized devices) */
    @media (max-width: 768px) {
        .profile-card {
            width: calc(33.33% - 20px); /* 3 cards per row on smaller screens */
        }
    }

    /* For very small screens (mobile phones) */
    @media (max-width: 480px) {
        .profile-card {
            width: calc(50% - 20px); /* 2 cards per row on very small screens */
        }
    }
        .profile-card.active {
            background-color: #007bff;
            color: white;
        }
        .profile-card img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .profile-card button {
            background-color: transparent;
            border: 1px solid #007bff;
            color: #007bff;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .profile-card.active button {
            background-color: white;
            color: #007bff;
        }
        .table-container {
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table th, table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        table th {
            background-color: #f9f9f9;
            font-weight: 500;
        }
        table td button {
            background-color: transparent;
            border: 1px solid #007bff;
            color: #007bff;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .pagination button {
            background-color: transparent;
            border: 1px solid #007bff;
            color: #007bff;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            margin: 0 5px;
        }
        .pagination button.active {
            background-color: #007bff;
            color: white;
        }
  </style>
 </head>
 <body>
  <div class="container">

<!-- Sidebar -->
@include('layouts.admin.admin_sidebar_layout')

   <div class="content">
    <div class="header">
     <div>
      <input placeholder="Search employee" type="text"/>
      <i class="fas fa-search search-icon">
      </i>
     </div>
     <div class="admin">
      <img alt="Admin profile picture" height="40" src="https://storage.googleapis.com/a1aa/image/NMBcgCb0vlotBFfcdUFrcf4D2DgU7kajlsmXSvVPczeoGRFnA.jpg" width="40"/>
      <span>
       Admin
      </span>
     </div>
    </div>

    <div class="profiles">
        @foreach($employees as $employee)
            <div class="profile-card {{ $loop->first ? 'active' : '' }}">
                @php
                    // Set the default image based on the sex
                    $image = $employee->sex == 'female' ? 'images/female_profile.jpg' : 'images/male_profile.jpg';
                @endphp
                <img alt="Profile picture of {{ $employee->first_name }} {{ $employee->last_name }}" height="60" src="{{ asset($employee->profile_image ?: $image) }}" width="60"/>
                <h3>{{ $employee->first_name }} {{ $employee->last_name }}</h3>
                <p>{{ $employee->department }}</p>
                <button onclick="window.location.href='{{ route('employee.individual.profiles', ['id' => $employee->id]) }}'" class="btn btn-primary">
                    Profile Details
                </button>
            </div>
        @endforeach
    </div>


    <div class="pagination">
     <button class="active">
      1
     </button>
     <button>
      2
     </button>
     <button>
      3
     </button>
     <button>
      &gt;
     </button>
    </div>
   </div>
  </div>
 </body>
</html>
