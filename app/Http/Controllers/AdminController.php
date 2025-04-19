<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        // This method returns the view for creating a new student
        return view('admin.students.create');
    }
}
