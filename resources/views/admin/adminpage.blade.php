<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Dashboard v3
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
        }
  </style>
 </head>
 <body class="bg-gray-100">
  <div class="flex">
   <!-- Sidebar -->
   @include('layouts.admin.admin_sidebar_layout')
   <!-- Main Content -->
   <div class="flex-1 flex flex-col">
    <!-- Header -->
    <div class="flex items-center justify-between bg-white p-4 shadow">
     <div class="flex items-center">
      <button class="text-gray-600 mr-4">
       <i class="fas fa-bars">
       </i>
      </button>
      <div class="text-xl font-bold">
       AdminLTE 3
      </div>
     </div>
     <div class="flex items-center space-x-4">
      <div class="relative">
       <input class="p-2 border rounded" placeholder="Search" type="text"/>
       <i class="fas fa-search absolute top-3 right-3 text-gray-400">
       </i>
      </div>
      <div class="flex items-center space-x-4">
       <a class="text-gray-600" href="#">
        <i class="fas fa-comments">
        </i>
        <span class="bg-red-500 text-white text-xs rounded-full px-2 py-1 ml-1">
         3
        </span>
       </a>
       <a class="text-gray-600" href="#">
        <i class="fas fa-bell">
        </i>
        <span class="bg-yellow-500 text-white text-xs rounded-full px-2 py-1 ml-1">
         15
        </span>
       </a>
       <a class="text-gray-600" href="#">
        <i class="fas fa-th-large">
        </i>
       </a>
      </div>
     </div>
    </div>
    <div class="p-6 flex-1">
     <div class="flex items-center justify-between mb-6">
      <div class="text-2xl font-bold">
       Dashboard v3
      </div>
      <div class="flex items-center space-x-4">
       <a class="text-gray-600" href="#">
        Home
       </a>
       <span class="text-gray-400">
        /
       </span>
       <a class="text-gray-600" href="#">
        Dashboard v3
       </a>
      </div>
     </div>

     <div class="grid grid-cols-2 gap-6 mt-6">
      <!-- Products -->
      <div class="bg-white p-6 rounded shadow">
       <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">
         Daily Attendance Tracker
        </h2>
        <div class="flex items-center">
         <i class="fas fa-download mr-4">
         </i>
         <i class="fas fa-bars">
         </i>
        </div>
       </div>
       <div class="bg-white shadow rounded-lg p-4 mb-4">
        <table class="w-full">
         <thead>
          <tr class="text-left">
           <th class="py-2">
            Employees
           </th>
           <th class="py-2">
            Status
           </th>
           <th class="py-2">
            Time In
           </th>
           <th class="py-2">
            Time Out
           </th>
          </tr>
         </thead>
         <tbody>
          <tr class="border-t">
           <td class="py-2 flex items-center">
            <img alt="Product Image" class="rounded-full mr-2" height="40" src="https://placehold.co/40" width="40"/>
            Some Product
           </td>
           <td class="py-2">
            $13 USD
           </td>
           <td class="py-2 text-green-500">
            ↑ 12% 12,000 Sold
           </td>
           <td class="py-2">
            <i class="fas fa-search">
            </i>
           </td>
          </tr>
          <tr class="border-t">
           <td class="py-2 flex items-center">
            <img alt="Product Image" class="rounded-full mr-2" height="40" src="https://placehold.co/40" width="40"/>
            Another Product
           </td>
           <td class="py-2">
            $29 USD
           </td>
           <td class="py-2 text-yellow-500">
            ↓ 0.5% 123,234 Sold
           </td>
           <td class="py-2">
            <i class="fas fa-search">
            </i>
           </td>
          </tr>
          <tr class="border-t">
           <td class="py-2 flex items-center">
            <img alt="Product Image" class="rounded-full mr-2" height="40" src="https://placehold.co/40" width="40"/>
            Amazing Product
           </td>
           <td class="py-2">
            $1,230 USD
           </td>
           <td class="py-2 text-red-500">
            ↓ 3% 198 Sold
           </td>
           <td class="py-2">
            <i class="fas fa-search">
            </i>
           </td>
          </tr>
          <tr class="border-t">
           <td class="py-2 flex items-center">
            <img alt="Product Image" class="rounded-full mr-2" height="40" src="https://placehold.co/40" width="40"/>
            Perfect Item
            <span class="ml-2 bg-red-500 text-white text-xs rounded-full px-2">
             NEW
            </span>
           </td>
           <td class="py-2">
            $199 USD
           </td>
           <td class="py-2 text-green-500">
            ↑ 63% 87 Sold
           </td>
           <td class="py-2">
            <i class="fas fa-search">
            </i>
           </td>
          </tr>
         </tbody>
        </table>
       </div>
      </div>
      <!-- Online Store Overview -->
      <div class="bg-white p-6 rounded shadow">
       <h2 class="text-xl font-bold mb-4">
        Online Store Overview
       </h2>
       <div class="flex items-center mb-2">
        <i class="fas fa-sync-alt text-green-500 mr-2">
        </i>
        <span class="text-green-500">
         ↑ 12%
        </span>
        <span class="ml-auto">
         CONVERSION RATE
        </span>
       </div>
       <div class="flex items-center mb-2">
        <i class="fas fa-shopping-cart text-yellow-500 mr-2">
        </i>
        <span class="text-yellow-500">
         ↑ 0.8%
        </span>
        <span class="ml-auto">
         SALES RATE
        </span>
       </div>
       <div class="flex items-center">
        <i class="fas fa-users text-red-500 mr-2">
        </i>
        <span class="text-red-500">
         ↓ 1%
        </span>
        <span class="ml-auto">
         REGISTRATION RATE
        </span>
       </div>
      </div>
     </div>
    </div>
    <!-- Footer -->
    <footer class="bg-white p-4 shadow mt-6">
     <div class="text-center text-gray-600">
      © 2023 AdminLTE. All rights reserved.
     </div>
    </footer>
   </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/chart.js">
  </script>
  <script>
   const visitorsCtx = document.getElementById('visitorsChart').getContext('2d');
        const visitorsChart = new Chart(visitorsCtx, {
            type: 'line',
            data: {
                labels: ['18th', '20th', '22nd', '24th', '26th', '28th', '30th'],
                datasets: [{
                    label: 'This Week',
                    data: [60, 80, 100, 120, 140, 160, 180],
                    borderColor: 'blue',
                    backgroundColor: 'transparent',
                    borderWidth: 2
                }, {
                    label: 'Last Week',
                    data: [40, 60, 80, 100, 120, 140, 160],
                    borderColor: 'lightgray',
                    backgroundColor: 'transparent',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const salesCtx = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(salesCtx, {
            type: 'bar',
            data: {
                labels: ['JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
                datasets: [{
                    label: 'This year',
                    data: [1000, 1500, 3000, 2000, 2500, 3000, 2700],
                    backgroundColor: 'blue',
                    borderWidth: 1
                }, {
                    label: 'Last year',
                    data: [500, 1000, 2700, 1500, 2000, 2500, 2000],
                    backgroundColor: 'lightgray',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
  </script>
 </body>
</html>
