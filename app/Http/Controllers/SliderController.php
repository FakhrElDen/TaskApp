<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objSlider = new Slider();
        $sliders = $objSlider->listingSliders();
        $desktopSliders = $objSlider->listingDesktopSliders();
        $tabletSliders = $objSlider->listingTabletSliders();
        $mobileSliders = $objSlider->listingMobileSliders();

        return view('dashboard.slider.slider', compact('sliders', 'desktopSliders', 'tabletSliders', 'mobileSliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.slider.addSlider');
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
            'image' => 'required|mimes:png,jpg',
        ]);

        $input = $request->all();
        $objSlider = new Slider();
        $objSlider->createSlider($input);

        return redirect(env('APP_URL') . '/listingSliders');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editDesktop()
    {
        $objSlider = new Slider();
        $sliders = $objSlider->listingSliders();

        return view('dashboard.slider.editDesktop', compact('sliders'));
    }

    public function editDesktopSlider()
    {
        $objSlider = new Slider();
        $sliders = $objSlider->listingDesktopSliders();

        return view('dashboard.slider.editDesktopSlider', compact('sliders'));
    }

    public function editTabletSlider()
    {
        $objSlider = new Slider();
        $sliders = $objSlider->listingTabletSliders();

        return view('dashboard.slider.editTabletSlider', compact('sliders'));
    }

    public function editMobileSlider()
    {
        $objSlider = new Slider();
        $sliders = $objSlider->listingMobileSliders();

        return view('dashboard.slider.editMobileSlider', compact('sliders'));
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
            'image' => 'required|mimes:png,jpg',
        ]);

        $input = $request->all();
        $objSlider = new Slider();
        $objSlider->updateSlider($input, $id);

        return redirect(env('APP_URL') . '/listingSliders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objSlider = new Slider();
        $objSlider->deleteSlider($id);

        return redirect(env('APP_URL') . '/listingSliders');
    }
}
