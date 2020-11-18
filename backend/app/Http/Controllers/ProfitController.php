<?php

namespace App\Http\Controllers;

use App\Models\Profit;
use Illuminate\Http\Request;

class ProfitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Profit::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profit = Profit::create($request->all());
        
        return response()->json($profit, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profit  $profit
     * @return \Illuminate\Http\Response
     */
    public function show(Profit $profit)
    {
        return Profit::find($profit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profit  $profit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profit $profit)
    {
        $profit->update($request->all());

        return response()->json($profit, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profit  $profit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profit $profit)
    {
        $profit->delete();

        return response()->json(null, 204);
    }
}
