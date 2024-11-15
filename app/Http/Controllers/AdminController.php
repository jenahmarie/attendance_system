<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Employee;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showAdminPage()
    {
          // Retrieve attendance data ordered by time_in, from earliest to latest
    $attendance = Attendance::with('employee') // Assuming you have a relationship defined with Employee model
    ->orderBy('time_in', 'asc') // Sort by time_in (earliest first)
    ->get();

    return view('admin.adminpage', compact('attendance'));

    }

    public function allEmployeesPage()
    {
        $employees = Employee::all();
        return view('admin.allemployees', compact('employees'));

    }

    public function showEmployeesProfile($id)
    {
        $employee = Employee::findOrFail($id); // Retrieve employee data by ID
        return view('admin.employee_profile', compact('employee'));

    }


//     public function showAttendance()
// {
//     // Retrieve attendance data ordered by time_in, from earliest to latest
//     $attendance = Attendance::with('employee') // Assuming you have a relationship defined with Employee model
//         ->orderBy('time_in', 'asc') // Sort by time_in (earliest first)
//         ->get();

//     return view('admin.adminpage', compact('attendance'));
// }
}
