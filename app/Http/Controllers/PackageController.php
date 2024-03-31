<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objPackage = new Package();
        $packages = $objPackage->listingPackage();
        return view('dashboard.package.package', compact('packages'));
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
        $request->validate([
            'name'   => 'required|max:255',
        ]);

        $input = $request->all();
        $objPackage = new Package();
        $objPackage->createPackage($input);

        return redirect(env('APP_URL') . '/listingPackage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $objPackage = new Package();
        $packages = $objPackage->listingPackage();
        return view('website.package', compact('packages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objPackage = new Package();
        $package = $objPackage->viewPackage($id);
        $packages = $objPackage->listingPackage();
        return view('dashboard.package.editPackage', compact('package', 'packages'));
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
            'name'   => 'required|max:255',
        ]);

        $input = $request->all();
        $objPackage = new Package();
        $objPackage->updatePackage($input, $id);

        return redirect(env('APP_URL') . '/listingPackage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objPackage = new Package();
        $objPackage->deletePackage($id);

        return redirect(env('APP_URL') . '/listingPackage');
    }
}
