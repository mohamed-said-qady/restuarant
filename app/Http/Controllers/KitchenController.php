<?php

namespace App\Http\Controllers;

use App\Models\restaurant_api\Kitchen;
use Illuminate\Http\Request;
use App\Models\restaurant_api\Employee;

class KitchenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function assignChef(Request $request)
    {
        // استلام معرّف الموظف من الطلب
        $employeeId = $request->input('employee_id');

        // العثور على الموظف باستخدام المعرّف
        $employee = Employee::find($employeeId);

        if ($employee) {
            // قم بإجراء الإجراء المطلوب على النموذج
            // يمكنك إضافة رمزك هنا
            $employee->role ='chef' ;

            return response()->json(['message' => 'تم تعيين الشيف بنجاح']);
        } else {
            return response()->json(['message' => 'لم يتم العثور على الموظف']);
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kitchen $kitchen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kitchen $kitchen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kitchen $kitchen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kitchen $kitchen)
    {
        //
    }
}
