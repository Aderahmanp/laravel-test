<?php


namespace App\Http\Controllers\Api;

use App\employee;

class TestApiController
{
    public function employee()
    {
        $employees = Employee::where('id',100)->with('startup')->get();

        if (count($employees) !== 0) {
            $response = [
                "data" => $employees
            ];

            return response()->json($response, 200);
        } else {
            $response = [
                "data" => $employees
            ];

            return response()->json($response,400);
        }

    }

}
