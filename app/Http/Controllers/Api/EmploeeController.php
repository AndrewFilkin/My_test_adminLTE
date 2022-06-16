<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Emploee;

class EmploeeController extends Controller
{
    public function getEmployee()
    {
        return response()->json(Emploee::all(), 200);
    }

    public function getEmployeeById($id)
    {

        $employees = Emploee::find($id);
        if (is_null($employees)) {
            return response()->json(['messages' => 'null'], 404);
        } else {
            return response()->json($employees);
        }

        return response()->json(Emploee::find($id), 200);
    }

    public function addEmployee(Request $request)
    {
        $employee = Emploee::create($request->all());
        return response($employee, 201);
    }

    public function updateEmployee(Request $request, $id)
    {
        $employee = Emploee::find($id);
        if (is_null($employee)) {
            return response()->json(['messages' => 'null'], 404);
        }
        $employee->update($request->all());
        return response($employee, 200);
    }

    public function destroyEmployee (Request $request, $id) {
        $employee = Emploee::find($id);
        if (is_null($employee)) {
            return response()->json(['messages' => 'null'], 404);
        }
        $employee->delete();
        return response()->json(null, 204);
    }

}
