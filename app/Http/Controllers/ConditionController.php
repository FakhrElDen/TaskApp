<?php

namespace App\Http\Controllers;

use App\Models\Condition;
use Illuminate\Http\Request;

class ConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objCondition = new Condition();
        $condition = $objCondition->listingCondition();
        return view('dashboard.condition.condition', compact('condition'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.condition.addCondition');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'condition' => 'required',
        ]);

        $input = $request->all();
        $objCondition = new Condition();
        $Condition = $objCondition->createCondition($input);
        return redirect(env('APP_URL') . '/listingCondition');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $objCondition = new Condition();
        $condition = $objCondition->viewCondition();
        return view('website.condition', compact('condition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objCondition = new Condition();
        $condition = $objCondition->editCondition($id);
        return view('dashboard.Condition.editCondition', compact('condition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'condition' => 'required',
        ]);

        $input = $request->all();
        $objCondition = new Condition();
        $Condition = $objCondition->updateCondition($input, $id);
        return redirect(env('APP_URL') . '/listingCondition');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objCondition = new Condition();
        $Condition = $objCondition->deleteCondition($id);
        return redirect(env('APP_URL') . '/listingCondition');
    }
}
