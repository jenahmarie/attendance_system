<html>
 <head>
  <title>
   Employee Profile
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
 <body>

    <!-- Main container with flex layout -->
    <div class="flex">

        <!-- Sidebar -->

            @include('layouts.admin.admin_sidebar_layout')


             <!-- Main Content -->
       <div class="w-3/4 bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6">Employee Profile</h1>

        <div class="flex space-x-4 mb-6">
         <button class="px-4 py-2 bg-white border border-teal-500 text-teal-500 rounded-full">
          Personal
         </button>
         <button class="px-4 py-2 text-gray-600">
          Job &amp; Pay
         </button>
         <button class="px-4 py-2 text-gray-600">
          Documents
         </button>
         <button class="px-4 py-2 text-gray-600">
          Journey
         </button>
         <button class="px-4 py-2 text-gray-600">
          Time Off
         </button>
         <button class="px-4 py-2 text-gray-600">
          Performance
         </button>
         <button class="px-4 py-2 text-gray-600">
          More
          <i class="fas fa-chevron-down"></i>
         </button>
        </div>

        <div class="flex space-x-6">
         <div class="w-1/3 bg-white p-4 rounded-lg shadow-md">
          <div class="flex flex-col items-center">
           <img alt="Profile picture of {{ $employee->first_name }} {{ $employee->last_name }}" class="w-24 h-24 rounded-full mb-4" height="100" src="{{ $employee->profile_image }}"  width="100"/>
           <h2 class="text-xl font-bold">
            {{ $employee->first_name }} {{ $employee->last_name }}
           </h2>
           <p class="text-gray-500">
            {{ $employee->department }}
           </p>
          </div>

          <div class="mt-6">
           <p class="text-gray-500">
            Status
           </p>
           <p class="font-medium">
            {{ $employee->role }}
           </p>
          </div>

          <div class="mt-4">
           <p class="text-gray-500">
            Email
           </p>
           <p class="text-teal-500">
            {{ $employee->email }}
           </p>
          </div>

          <div class="mt-4">
           <p class="text-gray-500">
            Phone Number
           </p>
           <p class="font-medium">
            {{ $employee->phone_number ?? 'N/A' }}
           </p>
          </div>

         </div>

         <div class="w-2/3 space-y-6">
          <div class="bg-white p-4 rounded-lg shadow-md">
           <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">
             Basic Information
            </h2>
            <button class="text-teal-500">
             Edit
            </button>
           </div>

           <div class="grid grid-cols-2 gap-4">
            <div>
             <p class="text-gray-500">
              First Name:
             </p>
             <p class="font-medium">
              {{ $employee->first_name }}
             </p>
            </div>
            <div>
             <p class="text-gray-500">
              Last Name:
             </p>
             <p class="font-medium">
              {{ $employee->last_name }}
             </p>
            </div>
            <div>
             <p class="text-gray-500">
              Phone (Work):
             </p>
             <p class="font-medium">
              {{ $employee->work_phone_number ?? 'N/A' }}
             </p>
            </div>
            <div>
             <p class="text-gray-500">
              Employee ID:
             </p>
             <p class="font-medium">
              {{ $employee->id }}
             </p>
            </div>

           </div>
          </div>

         </div>
        </div>
   </div>
     {{-- <div class="bg-white p-4 rounded-lg shadow-md">
      <div class="flex justify-between items-center mb-4">
       <h2 class="text-xl font-bold">
        Personal Information
       </h2>
       <button class="text-teal-500">
        Edit
       </button>
      </div>
      <div class="grid grid-cols-2 gap-4">
       <div>
        <p class="text-gray-500">
         Legal First Name:
        </p>
        <p class="font-medium">
         Alexandra
        </p>
       </div>
       <!-- Add other personal information fields as needed -->
      </div>
     </div> --}}
    </div>

 </body>
</html>
