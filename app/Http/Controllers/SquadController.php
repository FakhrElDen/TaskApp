<?php

namespace App\Http\Controllers;

use App\Models\Squad;
use Illuminate\Http\Request;

class SquadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objSquad = new Squad();
        $squads = $objSquad->listingSquad();

        return view('dashboard.squad.squad', compact('squads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.squad.addSquad');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'     => 'required|mimes:png,jpg',
            'name'      => 'required|max:255',
            'position'  => 'required|max:255',
        ]);

        $input = $request->all();
        $objSquad = new Squad();
        $objSquad->createSquad($input);

        return redirect(env('APP_URL') . '/listingSquad');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $objSquad = new Squad();
        $squads = $objSquad->listingSquad();

        return view('website.squad', compact('squads'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objSquad = new Squad();
        $squad = $objSquad->viewSquad($id);

        return view('dashboard.squad.editSquad', compact('squad'));
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
        $request->validate([
            'image'     => 'mimes:png,jpg',
            'name'      => 'required|max:255',
            'position'  => 'required|max:255',
        ]);

        $input = $request->all();
        $objSquad = new Squad();
        $objSquad->updateSquad($input, $id);

        return redirect(env('APP_URL') . '/listingSquad');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objSquad = new Squad();
        $objSquad->deleteSquad($id);

        return redirect(env('APP_URL') . '/listingSquad');
    }
}
