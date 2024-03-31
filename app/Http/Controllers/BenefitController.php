<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use Illuminate\Http\Request;

class BenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objBenefit = new Benefit();
        $benefits = $objBenefit->listingBenefit();
        return view('dashboard.benefit.benefit', compact('benefits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name'   => 'required|max:255',
        ]);

        $input = $request->all();
        $objBenefit = new Benefit();
        $benefit = $objBenefit->createBenefit($input);
        return redirect(env('APP_URL') . '/listingBenefit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $objBenefit = new Benefit();
        $benefits = $objBenefit->listingBenefit();
        return view('website.benefit', compact('benefits'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objBenefit = new Benefit();
        $benefit = $objBenefit->viewBenefit($id);
        $benefits = $objBenefit->listingBenefit();
        return view('dashboard.benefit.editBenefit', compact('benefit', 'benefits'));
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
            'name'   => 'required|max:255',
        ]);
        $input = $request->all();
        $objBenefit = new Benefit();
        $benefit = $objBenefit->updateBenefit($input, $id);
        return redirect(env('APP_URL') . '/listingBenefit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objBenefit = new Benefit();
        $benefit = $objBenefit->deleteBenefit($id);
        return redirect(env('APP_URL') . '/listingBenefit');
    }
}
