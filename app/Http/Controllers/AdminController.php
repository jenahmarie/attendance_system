<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showAdminPage()
    {
        return view('admin.adminpage');
    }

    public function allEmployeesPage()
    {
        return view('admin.allemployees');
    }
}
