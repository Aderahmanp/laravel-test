<?php


namespace App\Http\Controllers\Api;

use App\employee;
use App\startup;
use Illuminate\Http\Request;

class TestApiController
{
    public function employee()
    {
        $employees = Employee::with('startup')->get();

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

    public function startup()
    {
        $startup = Startup::with('employees')->get();
        if (count($startup) !== 0) {
            $response = [
                "data" => $startup
            ];
            return response()->json($response, 200);
        } else {
            $response = [
                "data" => $startup
            ];

            return response()->json($response, 400);
        } 
    }

    public function employeeDetail(Request $request)
    {
            $username = $request->input('username');

            $employee = Employee::where('username', $username)->first();
            if ($employee !== null) {
                $response = [
                    "data" => $employee
                ];
                return response()->json($response, 200);
            } else {
                $response = [
                    "data" => $employee
                ];
                return response()->json($response, 400);
            }
    }

    public function employeePost(Request $request)
    {
        echo '<pre>';
        var_dump($request->all());
        echo '</pre>';
        die();
    }

}
