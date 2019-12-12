<?php

namespace App\Http\Controllers;

use App\Startup;
use App\Employee;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        $startup = Startup::with('employees')->get();
        // $employee = Employee::with('startup')->get();

        // foreach ($startup as $t) {
        
        //    dd($t->employees);
        // }
       
        // dd($startup);

        // foreach ($employee as $t) {
        
        //     dump($t->startup);
        //  }
        
        //  dd($employee)

        return view ('test', compact ('startup'));

       

    }
}

