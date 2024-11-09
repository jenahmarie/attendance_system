<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attendance; // Import the Attendance model


class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees'; // Specify table name if not using Laravel conventions
    protected $primaryKey = 'id';

    protected $fillable = [
        'first_name',
        'last_name',
        'department'
    ];

    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'employee_id');
    }
}
