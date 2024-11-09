<html>
 <head>
  <title>
   Employee Attendance
  </title>
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
            justify-content: space-between;
            margin-top: 20px;
        }
        .profile-card {
            width: 18%;
            background-color: #f9f9f9;
            border-radius: 10px;
            text-align: center;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
   <div class="sidebar">
    <i class="fas fa-home">
    </i>
    <i class="fas fa-user-friends">
    </i>
    <i class="fas fa-file-alt">
    </i>
   </div>
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
    <div class="attendance">
     <h2>
      Attendance Month- August
     </h2>
     <div class="filters">
      <label for="year">
       Year
      </label>
      <select id="year">
       <option value="2021">
        2021
       </option>
      </select>
      <label for="month">
       Month
      </label>
      <select id="month">
       <option value="aug">
        Aug
       </option>
      </select>
     </div>
    </div>
    <div class="profiles">
     <div class="profile-card">
      <img alt="Profile picture of Jessica Goldsmith" height="60" src="https://storage.googleapis.com/a1aa/image/oMKquEGvLdJ5EtEHEVY4iotaNLTRaPnTeVeE34KzNspTjoiTA.jpg" width="60"/>
      <h3>
       Jessica Goldsmith
      </h3>
      <p>
       Software Engineer
      </p>
      <button>
       Profile Details
      </button>
     </div>
     <div class="profile-card active">
      <img alt="Profile picture of Jessica Goldsmith" height="60" src="https://storage.googleapis.com/a1aa/image/oMKquEGvLdJ5EtEHEVY4iotaNLTRaPnTeVeE34KzNspTjoiTA.jpg" width="60"/>
      <h3>
       Jessica Goldsmith
      </h3>
      <p>
       Software Engineer
      </p>
      <button>
       Profile Details
      </button>
     </div>
     <div class="profile-card">
      <img alt="Profile picture of Jessica Goldsmith" height="60" src="https://storage.googleapis.com/a1aa/image/oMKquEGvLdJ5EtEHEVY4iotaNLTRaPnTeVeE34KzNspTjoiTA.jpg" width="60"/>
      <h3>
       Jessica Goldsmith
      </h3>
      <p>
       Software Engineer
      </p>
      <button>
       Profile Details
      </button>
     </div>
     <div class="profile-card">
      <img alt="Profile picture of Jessica Goldsmith" height="60" src="https://storage.googleapis.com/a1aa/image/oMKquEGvLdJ5EtEHEVY4iotaNLTRaPnTeVeE34KzNspTjoiTA.jpg" width="60"/>
      <h3>
       Jessica Goldsmith
      </h3>
      <p>
       Software Engineer
      </p>
      <button>
       Profile Details
      </button>
     </div>
     <div class="profile-card">
      <img alt="Profile picture of Jessica Goldsmith" height="60" src="https://storage.googleapis.com/a1aa/image/oMKquEGvLdJ5EtEHEVY4iotaNLTRaPnTeVeE34KzNspTjoiTA.jpg" width="60"/>
      <h3>
       Jessica Goldsmith
      </h3>
      <p>
       Software Engineer
      </p>
      <button>
       Profile Details
      </button>
     </div>
    </div>
    <div class="table-container">
     <table>
      <thead>
       <tr>
        <th>
         Employee
        </th>
        <th>
         Designation
        </th>
        <th>
         Date
        </th>
        <th>
         Check-in Time
        </th>
        <th>
         Checkout Time
        </th>
        <th>
         Details
        </th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td>
         <img alt="Profile picture of John Doe" height="40" src="https://storage.googleapis.com/a1aa/image/Wf6r6DK1k902ekMFygsTCOUEf8PReENYlY4k5lPeHzDIaEVcC.jpg" width="40"/>
         John Doe
        </td>
        <td>
         Software Engineer
        </td>
        <td>
         20-08-2021
        </td>
        <td>
         05-12-1992
        </td>
        <td>
         03008951423
        </td>
        <td>
         <button>
          View
         </button>
        </td>
       </tr>
       <tr>
        <td>
         <img alt="Profile picture of John Doe" height="40" src="https://storage.googleapis.com/a1aa/image/Wf6r6DK1k902ekMFygsTCOUEf8PReENYlY4k5lPeHzDIaEVcC.jpg" width="40"/>
         John Doe
        </td>
        <td>
         Software Engineer
        </td>
        <td>
         20-08-2021
        </td>
        <td>
         05-12-1992
        </td>
        <td>
         03008951423
        </td>
        <td>
         <button>
          View
         </button>
        </td>
       </tr>
       <tr>
        <td>
         <img alt="Profile picture of John Doe" height="40" src="https://storage.googleapis.com/a1aa/image/Wf6r6DK1k902ekMFygsTCOUEf8PReENYlY4k5lPeHzDIaEVcC.jpg" width="40"/>
         John Doe
        </td>
        <td>
         UI/UX Designer
        </td>
        <td>
         20-08-2021
        </td>
        <td>
         05-12-1992
        </td>
        <td>
         03008951423
        </td>
        <td>
         <button>
          View
         </button>
        </td>
       </tr>
      </tbody>
     </table>
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
