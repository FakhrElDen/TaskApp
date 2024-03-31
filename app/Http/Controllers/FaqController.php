<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objFaq = new Faq();
        $faqs = $objFaq->listingFaq();
        return view('dashboard.faq.faq', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.faq.addFaq');
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
            'question'   => 'required',
            'answer'     => 'required',
        ]);

        $input = $request->all();
        $objFaq = new Faq();
        $faq = $objFaq->createFaq($input);
        return redirect(env('APP_URL') . '/listingFaq');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $objFaq = new Faq();
        $faqs = $objFaq->listingFaq();
        return view('website.faq', compact('faqs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objFaq = new Faq();
        $faq = $objFaq->viewFaq($id);
        return view('dashboard.faq.editFaq', compact('faq'));
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
            'question'   => 'required',
            'answer'     => 'required',
        ]);

        $input = $request->all();
        $objFaq = new Faq();
        $faq = $objFaq->updateFaq($input, $id);
        return redirect(env('APP_URL') . '/listingFaq');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objFaq = new Faq();
        $faq = $objFaq->deleteFaq($id);
        return redirect(env('APP_URL') . '/listingFaq');
    }
}
