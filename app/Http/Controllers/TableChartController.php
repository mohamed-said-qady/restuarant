<?php

namespace App\Http\Controllers;

use App\Models\restaurant_api\TableChart;
use Illuminate\Http\Request;

class TableChartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function print(Request $request)
    {

        $tableChart = new TableChart();
        $tableChart->TableChartImage= $request->TableChartImage;
        $tableChart->save();
        return response()->json([$success='العملية تمت بنجاح',200]);
        

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
    public function show(TableChart $tableChart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TableChart $tableChart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TableChart $tableChart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TableChart $tableChart)
    {
        //
    }
}
