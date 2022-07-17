<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EmploeeCollection;
use App\Http\Resources\EmploeeResource;
use Illuminate\Http\Request;
use App\Models\Emploee;
use Illuminate\Support\Facades\Cache;

class EmploeeController extends Controller
{
    public function getEmployee()
    {
//        return response()->json(Emploee::all(), 200);
//        return new EmploeeCollection(Emploee::all());
//        return new EmploeeCollection(Emploee::paginate(1));
//        return new EmploeeCollection(Emploee::paginate(1));
        return new EmploeeCollection(Cache::remember('employeeAll', 60 * 60 * 24, function () {
            return Emploee::paginate(1);
        }));
    }

    public function getEmployeeById($id)
    {

        $employees = Emploee::find($id);
        if (is_null($employees)) {
            return response()->json(['messages' => 'null'], 404);
        } else {
//            return new EmploeeResource($employees);
            return new EmploeeResource(Cache::remember('employee', 60 * 60 * 24, function () use ($id) {
                return Emploee::find($id);
            }));


        }

//        return new EmploeeResource(response()->json(Emploee::find($id), 200));

//        return response()->json(Emploee::find($id), 200);
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

    public function destroyEmployee(Request $request, $id)
    {
        $employee = Emploee::find($id);
        if (is_null($employee)) {
            return response()->json(['messages' => 'null'], 404);
        }
        $employee->delete();
        return response()->json(null, 204);
    }

}
