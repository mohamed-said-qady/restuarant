<?php

namespace App\Http\Controllers;

use App\Models\restaurant_api\Order;
use Illuminate\Http\Request;
use App\Models\restaurant_api\Bill;
use App\Models\restaurant_api\Table;
use App\Models\restaurant_api\Meal;

class OrderController extends Controller
{

    public function addMeal(Request $request)
    {
         $order =Order::findOrFail($request->id);
         if(!$order){
            return response()->json(['error'=>'order not exist',404]);
         }
        /* $mealId=$request->input('mealId');
         $meal=Meal::find($mealId);*/
         /*if(!$meal){
            return response()->json(['error'=>'the meal not exist'],404);
         }*/

         $meal=$order->meals()->create();
         dd($meal);
         return response()->json(['success'=>'Meal added to order successfully ',201]);

    }

   
    public function removeMeal($id)
    {
        $order = Order::find($id);

        if (!$order) {
            return response()->json(['error' => 'Invalid order ID'], 404);
        }
        
        //$mealId = $request->input('mealId');
        //$meal = Meal::find($mealId);
        
        if (!$meal) {
            return response()->json(['error' => 'Invalid meal ID'], 404);
        }
        
        $order->meals()->detach($meal->id);
        
        return response()->json(['message' => 'Meal removed from order successfully'], 200);        
        
    }
    public function setStatus()
    {
        
    }
   
}
