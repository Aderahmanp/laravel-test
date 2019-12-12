<?php

namespace App\Http\Controllers;

use App\Employee;

class TestController extends Controller
{
    public function index()
    {
        $employees = Employee::with('startup')->get();

        return view('test', compact('employees'));
    }
}

