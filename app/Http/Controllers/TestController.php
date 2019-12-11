<?php

namespace App\Http\Controllers;

use App\Startup;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        $employee = Startup::all();
    }
}
