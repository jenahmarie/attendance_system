<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee; // Import the Attendance model


class Attendance extends Model
{
    use HasFactory;

    protected $table = 'attendance'; // Specify table name if not using Laravel conventions

    protected $fillable = [
        'employee_id',
        'date',
        'time_in',
        'time_out',
        'undertime',
        'absences'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }


}
