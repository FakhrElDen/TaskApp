<?php

namespace App\Http\Controllers;

use App\Models\Privacy;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objPrivacy = new Privacy();
        $privacy = $objPrivacy->listingPrivacy();

        return view('dashboard.privacy.privacy', compact('privacy'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.privacy.addPrivacy');
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
            'privacy' => 'required',
        ]);

        $input = $request->all();
        $objPrivacy = new Privacy();
        $objPrivacy->createPrivacy($input);

        return redirect(env('APP_URL') . '/listingPrivacy');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $objPrivacy = new Privacy();
        $privacy = $objPrivacy->viewPrivacy();
        return view('website.privacy', compact('privacy'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objPrivacy = new Privacy();
        $privacy = $objPrivacy->editPrivacy($id);

        return view('dashboard.privacy.editPrivacy', compact('privacy'));
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
            'privacy' => 'required',
        ]);

        $input = $request->all();
        $objPrivacy = new Privacy();
        $objPrivacy->updatePrivacy($input, $id);

        return redirect(env('APP_URL') . '/listingPrivacy');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objPrivacy = new Privacy();
        $objPrivacy->deletePrivacy($id);

        return redirect(env('APP_URL') . '/listingPrivacy');
    }
}
