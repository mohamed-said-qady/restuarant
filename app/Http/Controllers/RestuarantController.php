<?php

namespace App\Http\Controllers;

use App\Models\restaurant_api\Restuarant;
use Illuminate\Http\Request;
class RestuarantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function addBranch(Request $request)
    {
        $restuarant=new Restuarant();
        $restuarant->name = $request->name; 
        $restaurant->save();
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
    public function show(Restuarant $restuarant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restuarant $restuarant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Restuarant $restuarant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restuarant $restuarant)
    {
        //
    }
}
