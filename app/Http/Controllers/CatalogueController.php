<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Catalogue;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objCatalogue = new Catalogue();
        $catalogues = $objCatalogue->listingCatalogues();
        return view('dashboard.catalogue.catalogue', compact('catalogues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $objPackage = new Package();
        $packages = $objPackage->listingPackage();

        return view('dashboard.catalogue.addCatalogue', compact('packages'));
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
            'name'              => 'required|max:255',
            'label'             => 'required|max:255',
            'description'       => 'required',
            'language'          => 'required|max:255',
            'catalogue_link'    => 'required|max:255',
            'for'               => 'required|max:255',
            'color'             => 'required|max:255',
            'package_id'        => 'required',
            'desktop_image'     => 'required|mimes:png,jpg',
            'tablet_image'      => 'required|mimes:png,jpg',
            'mobile_image'      => 'required|mimes:png,jpg',
        ]);

        $input = $request->all();
        $objCatalogue = new Catalogue();
        $catalogue = $objCatalogue->createCatalogue($input);
        return redirect(env('APP_URL') . '/listingCatalogue');
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
        $packages = $objPackage->listingPackagesCatalogue();
        return view('website.catalogue', compact('packages'));
    }

    public function view($id)
    {
        $objCatalogue = new Catalogue();
        $catalogue = $objCatalogue->showCatalogue($id);
        return view('website.catalogue_details', compact('catalogue'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objCatalogue = new Catalogue();
        $catalogue = $objCatalogue->viewCatalogue($id);

        $objPackage = new Package();
        $packages = $objPackage->listingPackage();

        return view('dashboard.catalogue.editCatalogue', compact('catalogue', 'packages'));
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
            'name'              => 'max:255',
            'label'             => 'max:255',
            'language'          => 'max:255',
            'catalogue_link'    => 'required|max:255',
            'for'               => 'max:255',
            'color'             => 'max:255',
            'desktop_image'     => 'mimes:png,jpg',
            'tablet_image'      => 'mimes:png,jpg',
            'mobile_image'      => 'mimes:png,jpg',
        ]);
        $input = $request->all();
        $objCatalogue = new Catalogue();
        $catalogue = $objCatalogue->updateCatalogue($input, $id);
        return redirect(env('APP_URL') . '/listingCatalogue');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objCatalogue = new Catalogue();
        $catalogue = $objCatalogue->deleteCatalogue($id);
        return redirect(env('APP_URL') . '/listingCatalogue');
    }
}
