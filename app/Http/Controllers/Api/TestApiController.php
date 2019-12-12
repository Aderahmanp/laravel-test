<?php


namespace App\Http\Controllers\Api;

use App\employee;

class TestApiController
{
    public function employee()
    {
        $employees = Employee::with('startup')->get();

        $response = [
            "status" => "success",
            "data" => $employees
        ];

        return response()->json($response, 200);
    }

}
