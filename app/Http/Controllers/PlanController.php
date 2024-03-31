<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use App\Models\Package;
use Illuminate\Http\Request;

class PlanController extends Controller
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
        $objBenefit = new Benefit();
        $benefits = $objBenefit->listingBenefit();
        
        return view('dashboard.plan.plan', compact('packages', 'benefits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $objPackage = new Package();
        $package = $objPackage->getPackageWithBenefit($id);
        $objBenefit = new Benefit();
        $benefits = $objBenefit->listingBenefit();

        return view('dashboard.plan.addPlan', compact('package', 'benefits'));
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
            "value"    => "required",
        ]);

        $input = $request->all();
        $package = Package::find($input['package_id']);
        $package->benefits()->sync(collect($input['benefit_id'])->mapWithKeys(function ($item, $index) use ($input) {
            return [
                $item => ['value' => $input['value'][$index]]
            ];
        }));

        return redirect(env('APP_URL') . '/listingPlan');
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

        $objBenefit = new Benefit();
        $benefits = $objBenefit->listingBenefit();

        return view('website.plan', compact('packages', 'benefits'));
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
        $objBenefit = new Benefit();
        $benefits = $objBenefit->listingBenefit();

        return view('dashboard.plan.editPlan', compact('package', 'benefits'));
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
        //
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

        return redirect(env('APP_URL') . '/listingPlan');
    }
}
