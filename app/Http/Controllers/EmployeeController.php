<?php

namespace App\Http\Controllers;

use App\Models\restaurant_api\Employee;
use Illuminate\Http\Request;
use App\Models\restaurant_api\Order;
use App\Models\restaurant_api\Reservation;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function takeOrder(Request $request)
    {
        $this->Order()->save($request);
    }

   
    public function createOrder(Request $request)
    {
        

    }

    /**
     * Store a newly created resource in storage.
     */
    public function createReservation(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function addEmployee(Employee $employee)
    {
        //
    }

    
}
