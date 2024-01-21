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
        $orderData=$request->all();
        dd($orderData);
       /* $order =new Order();
        $order->id=$orderData['id'];
        $order->status=$orderData['status'];
         $order->table_id=$orderData['table_id'];
         dd($order);
        //$order->save();
        //Employee()->Order()->create($order);
        return response()->json(['success'],201);*/

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
