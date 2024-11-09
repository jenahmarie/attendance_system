<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Attendance;
use App\Models\Employee;
use Carbon\Carbon;


use Illuminate\Http\Request;

class AttendanceController extends Controller
{

    public function attendancePage() {
    return view('user.attendance');
    }

    public function myattendancePage() {
        return view('user.userattendance');
        }

    // Store attendance
    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required|exists:employees,id', // Validate employee ID
        ]);

        $now = Carbon::now('Asia/Manila');
        $date = $now->toDateString();
        $time = $now->toTimeString();

        // Check if there's an existing record for the current date
        $attendance = Attendance::where('employee_id', $validated['employee_id'])
            ->where('date', $date)
            ->first();

        if ($attendance) {
            // If attendance already exists for today, update time_out
            $attendance->update([
                'time_out' => $time,
                'undertime' => $this->calculateUndertime($attendance->time_in, $time),
            ]);
        } else {
            // Create a new attendance record for today
            $attendance = Attendance::create([
                'employee_id' => $validated['employee_id'],
                'date' => $date,
                'time_in' => $time,
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Attendance recorded successfully',
            'attendance' => $attendance
        ]);
    }

    private function calculateUndertime($timeIn, $timeOut)
    {
        // Calculate undertime if necessary
        // Assuming standard 8-hour workday for simplicity
        $workHours = 8;
        $timeIn = Carbon::parse($timeIn);
        $timeOut = Carbon::parse($timeOut);
        $workedHours = $timeOut->diffInHours($timeIn);
        $undertime = max(0, $workHours - $workedHours);

        return $undertime;
    }

    public function getAttendance($employeeId)
    {
        // Fetch the attendance along with employee details
        $attendanceData = DB::table('attendance')
                            ->join('employees', 'attendance.employee_id', '=', 'employees.id')
                            ->select('attendance.*', 'employees.first_name', 'employees.last_name', 'employees.department')
                            ->where('attendance.employee_id', $employeeId)
                            ->get();

        return response()->json($attendanceData);
    }


}
