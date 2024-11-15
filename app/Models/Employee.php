<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attendance; // Import the Attendance model

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees'; // Specify table name if not using Laravel conventions
    protected $primaryKey = 'id'; // Default primary key 'id' is fine, but specifying explicitly is fine too

    // Specify which columns are mass assignable
    protected $fillable = [
        'first_name',
        'last_name',
        'department',
        'role',
        'email',
        'phone_number',
        'work_phone_number',
        'profile_image',  // Added to fillable
        'sex'
    ];

    // Specify the default values for any attributes if they are not set
    protected $attributes = [
        'profile_image' => 'images/default profile.png',  // Default profile image path
        'role' => 'Regular',  // Default role is 'Regular'
        'sex' => 'male'  // Default sex is 'male'
    ];

    // Relationships
    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'employee_id');
    }

    // Optionally, you could add an accessor to format or ensure the default image is returned as a URL
    public function getProfileImageAttribute($value)
    {
        // Set default images based on sex
        if ($this->sex == 'female') {
            return asset('images/default profile.png'); // Image for females
        }

        return asset('images/default profile male.png'); // Image for males
    }
}
