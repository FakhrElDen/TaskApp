<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Slider;
use App\Mail\RequestMail;
use App\Models\Catalogue;
use Illuminate\Http\Request;
use App\Mail\ContactUstoUser;
use App\Mail\ContactUstoAdmin;
use App\Mail\RequestMailtoUser;
use Illuminate\Support\Facades\Mail;

class WebSiteController extends Controller
{
    public function index()
    {
        $objFaq = new Faq();
        $faqs = $objFaq->listingFaq();

        $objSlider = new Slider();
        $sliders = $objSlider->listingSliders();

        $objCatalogue = new Catalogue();
        $catalogues = $objCatalogue->listingCatalogues();

        return view('website.index', compact('sliders', 'faqs', 'catalogues'));
    }

    public function about()
    {
        return view('website.about');
    }

    public function workingOn()
    {
        return view('website.working_on');
    }

    public function howItWorks()
    {
        return view('website.how_it_works');
    }

    public function internship()
    {
        return view('website.internship');
    }

    public function career()
    {
        return view('website.career');
    }

    public function notFound()
    {
        return view('website.404');
    }

    public function contactUs()
    {
        return view('website.contact_us');
    }

    public function sendContactUs(Request $request)
    {
        $input = $request->all();

        $data = array(
            'name'      =>  $input['name'],
            'email'     =>  $input['email'],
            'message'   =>  $input['message'],
        );

        $mailtoAdmin = Mail::to(env('MAIL_FROM_CONTACT_ADDRESS'))->send(new ContactUstoAdmin($data));
        $mailtoUser = Mail::to($input['email'])->send(new ContactUstoUser($data));

        return view('website.contact_us_confirmation', compact('data'));
    }

    public function request()
    {
        $objCatalogue = new Catalogue();
        $catalogues = $objCatalogue->catalogueCategories();

        return view('website.request', compact('catalogues'));
    }

    public function sendRequest(Request $request)
    {
        $input = $request->all();

        $data = array(
            'name'      =>  $input['name'],
            'email'     =>   $input['email'],
            'phone'     =>   $input['phone'],
            'message'   =>   $input['message'],
            'style'     =>   $input['style'],
            'category'  =>   $input['category'],
        );

        $mailtoAdmin = Mail::to(env('MAIL_FROM_REQUEST_ADDRESS'))->send(new RequestMail($data));
        $mailtoUser = Mail::to($input['email'])->send(new RequestMailtoUser($data));

        return view('website.request_confirmation', compact('data'));
    }
}
