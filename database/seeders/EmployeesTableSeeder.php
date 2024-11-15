<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EmployeesTableSeeder extends Seeder
{
    public function run(): void
    {
        $employees = [
            [
                'first_name' => 'Jenah',
                'last_name' => 'Rivero',
                'department' => 'OJT Trainee',
                'email' => 'jenah@gmail.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Christian',
                'last_name' => 'Vargas',
                'department' => 'OJT Trainee',
                'email' => 'chris@gmail.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Jamaica',
                'last_name' => 'Bandong',
                'department' => 'OJT Trainee',
                'email' => 'jam@gmail.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // New employee data
            [
                'first_name' => 'New',
                'last_name' => 'Employee',
                'department' => 'New Department',
                'email' => 'new@gmail.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Jennie',
                'last_name' => 'Kim',
                'department' => 'New Department',
                'email' => 'jennie@gmail.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Jennifer',
                'last_name' => 'Kim',
                'department' => 'New Department',
                'email' => 'jennifer@gmail.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        foreach ($employees as $employee) {
            $exists = DB::table('employees')
                ->where('first_name', $employee['first_name'])
                ->where('last_name', $employee['last_name'])
                ->exists();

            if (!$exists) {
                DB::table('employees')->insert($employee);
            }
        }
    }
}
