<?php

namespace App\Http\Controllers;

use App\Models\RecurringExpenses;
use Illuminate\Http\Request;
use App\Http\Resources\RecurringExpensesResource;

class RecurringExpensesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RecurringExpensesResource::collection(RecurringExpenses::with('category')->paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $RecurringExpense = RecurringExpenses::create(
            $request->all()
        );        
        return response()->json($RecurringExpense, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RecurringExpenses  $recurringExpenses
     * @return \Illuminate\Http\Response
     */
    public function show(RecurringExpenses $recurringExpenses)
    {
        return new RecurringExpensesResource($recurringExpenses);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RecurringExpenses  $recurringExpenses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RecurringExpenses $recurringExpenses)
    {
        $recurringExpenses->update($request->all());
        return response()->json($recurringExpenses, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RecurringExpenses  $recurringExpenses
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecurringExpenses $recurringExpenses)
    {
        $recurringExpenses->delete();
        return response()->json(null, 204);
    }
}
