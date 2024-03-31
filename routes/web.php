<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//dashboard

//Login
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@login');
Route::get('/adminLogout', 'App\Http\Controllers\DashboardController@adminLogout');
Route::post('/adminLogin', 'App\Http\Controllers\DashboardController@adminLogin');
Route::get('/forgetPassword', 'App\Http\Controllers\DashboardController@forgetPassword');
Route::post('/adminForgetPassword', 'App\Http\Controllers\DashboardController@adminForgetPassword');
Route::get('/resetPassword/{user_id}', 'App\Http\Controllers\DashboardController@resetPassword');
Route::post('/adminResetPassword', 'App\Http\Controllers\DashboardController@adminResetPassword');

Route::group(['middleware' => ['dashboard']], function(){

    //blog
    Route::get('/listingBlogs', 'App\Http\Controllers\BlogController@index');
    Route::get('/editBlog/{blog_id}', 'App\Http\Controllers\BlogController@edit');
    Route::get('/createBlog', 'App\Http\Controllers\BlogController@create');
    Route::post('/updateBlog/{blog_id}', 'App\Http\Controllers\BlogController@update');
    Route::post('/storeBlog', 'App\Http\Controllers\BlogController@store');
    Route::get('/deleteBlog/{blog_id}', 'App\Http\Controllers\BlogController@destroy');
    
    //squad
    Route::get('/listingSquad', 'App\Http\Controllers\SquadController@index');
    Route::get('/editSquad/{squad_id}', 'App\Http\Controllers\SquadController@edit');
    Route::post('/updateSquad/{squad_id}', 'App\Http\Controllers\SquadController@update');
    Route::get('/createSquad', 'App\Http\Controllers\SquadController@create');
    Route::post('/storeSquad', 'App\Http\Controllers\SquadController@store');
    Route::get('/deleteSquad/{squad_id}', 'App\Http\Controllers\SquadController@destroy');
    
    //FAQ
    Route::get('/listingFaq', 'App\Http\Controllers\FaqController@index');
    Route::get('/editFaq/{faq_id}', 'App\Http\Controllers\FaqController@edit');
    Route::get('/createFaq', 'App\Http\Controllers\FaqController@create');
    Route::post('/storeFaq', 'App\Http\Controllers\FaqController@store');
    Route::post('/updateFaq/{faq_id}', 'App\Http\Controllers\FaqController@update');
    Route::get('/deleteFaq/{faq_id}', 'App\Http\Controllers\FaqController@destroy');
    
    //slider
    Route::get('/listingSliders', 'App\Http\Controllers\SliderController@index');
    Route::get('/createSlider', 'App\Http\Controllers\SliderController@create');
    Route::post('/storeSlider', 'App\Http\Controllers\SliderController@store');
    Route::get('/editTabletSlider', 'App\Http\Controllers\SliderController@editTabletSlider');
    Route::get('/editMobileSlider', 'App\Http\Controllers\SliderController@editMobileSlider');
    Route::get('/editDesktopSlider', 'App\Http\Controllers\SliderController@editDesktopSlider');
    Route::get('/editDesktop', 'App\Http\Controllers\SliderController@editDesktop');
    Route::post('/updateSlider/{slider_id}', 'App\Http\Controllers\SliderController@update');
    Route::get('/deleteSlider/{slider_id}', 'App\Http\Controllers\SliderController@destroy');
    
    //catalogue
    Route::get('/listingCatalogue', 'App\Http\Controllers\CatalogueController@index');
    Route::get('/createCatalogue', 'App\Http\Controllers\CatalogueController@create');
    Route::post('/storeCatalogue', 'App\Http\Controllers\CatalogueController@store');
    Route::get('/editCatalogue/{catalogue_id}', 'App\Http\Controllers\CatalogueController@edit');
    Route::post('/updateCatalogue/{catalogue_id}', 'App\Http\Controllers\CatalogueController@update');
    Route::get('/deleteCatalogue/{catalogue_id}', 'App\Http\Controllers\CatalogueController@destroy');
    
    // Privacy 
    Route::get('/listingPrivacy', 'App\Http\Controllers\PrivacyController@index');
    Route::get('/createPrivacy', 'App\Http\Controllers\PrivacyController@create');
    Route::post('/storePrivacy', 'App\Http\Controllers\PrivacyController@store');
    Route::get('/editPrivacy/{Privacy_id}', 'App\Http\Controllers\PrivacyController@edit');
    Route::post('/updatePrivacy/{Privacy_id}', 'App\Http\Controllers\PrivacyController@update');
    Route::get('/deletePrivacy/{Privacy_id}', 'App\Http\Controllers\PrivacyController@destroy');
    
    // Condition
    Route::get('/listingCondition', 'App\Http\Controllers\ConditionController@index');
    Route::get('/createCondition', 'App\Http\Controllers\ConditionController@create');
    Route::post('/storeCondition', 'App\Http\Controllers\ConditionController@store');
    Route::get('/editCondition/{condition_id}', 'App\Http\Controllers\ConditionController@edit');
    Route::post('/updateCondition/{condition_id}', 'App\Http\Controllers\ConditionController@update');
    Route::get('/deleteCondition/{condition_id}', 'App\Http\Controllers\ConditionController@destroy');
    
    // Package
    Route::get('/listingPackage', 'App\Http\Controllers\PackageController@index');
    Route::get('/createPackage', 'App\Http\Controllers\PackageController@create');
    Route::post('/storePackage', 'App\Http\Controllers\PackageController@store');
    Route::get('/editPackage/{package_id}', 'App\Http\Controllers\PackageController@edit');
    Route::post('/updatePackage/{package_id}', 'App\Http\Controllers\PackageController@update');
    Route::get('/deletePackage/{package_id}', 'App\Http\Controllers\PackageController@destroy');
    
    // Benefit
    Route::get('/listingBenefit', 'App\Http\Controllers\BenefitController@index');
    Route::get('/createBenefit', 'App\Http\Controllers\BenefitController@create');
    Route::post('/storeBenefit', 'App\Http\Controllers\BenefitController@store');
    Route::get('/editBenefit/{benefit_id}', 'App\Http\Controllers\BenefitController@edit');
    Route::post('/updateBenefit/{benefit_id}', 'App\Http\Controllers\BenefitController@update');
    Route::get('/deleteBenefit/{benefit_id}', 'App\Http\Controllers\BenefitController@destroy');
    
    // Plan
    Route::get('/listingPlan', 'App\Http\Controllers\PlanController@index');
    Route::get('/createPlan', 'App\Http\Controllers\PlanController@create');
    Route::post('/storePlan', 'App\Http\Controllers\PlanController@store');
    Route::get('/editPlan/{plan_id}', 'App\Http\Controllers\PlanController@edit');
    Route::post('/updatePlan/{plan_id}', 'App\Http\Controllers\PlanController@update');
    Route::get('/deletePlan/{plan_id}', 'App\Http\Controllers\PlanController@destroy');

});
//---------------------------------------------------------------------------------------------

//website
Route::get('/', 'App\Http\Controllers\WebSiteController@index');
Route::get('/about', 'App\Http\Controllers\WebSiteController@about');
Route::get('/workingOn', 'App\Http\Controllers\WebSiteController@workingOn');
Route::get('/howItWorks', 'App\Http\Controllers\WebSiteController@howItWorks');
Route::get('/internship', 'App\Http\Controllers\WebSiteController@internship');
Route::get('/career', 'App\Http\Controllers\WebSiteController@career');
Route::get('/request', 'App\Http\Controllers\WebSiteController@request');
Route::post('/sendRequest', 'App\Http\Controllers\WebSiteController@sendRequest');
Route::get('/contactUs', 'App\Http\Controllers\WebSiteController@contactUs');
Route::post('/sendContactUs', 'App\Http\Controllers\WebSiteController@sendContactUs');
Route::get('/squad', 'App\Http\Controllers\SquadController@show');
Route::get('/faq', 'App\Http\Controllers\FaqController@show');
Route::get('/blog', 'App\Http\Controllers\BlogController@show');
Route::get('/blogDetails/{blog_id}', 'App\Http\Controllers\BlogController@view');
Route::get('/privacy', 'App\Http\Controllers\PrivacyController@show');
Route::get('/condition', 'App\Http\Controllers\ConditionController@show');
Route::get('/catalogue', 'App\Http\Controllers\CatalogueController@show');
Route::get('/catalogueDetails/{catalogue_id}', 'App\Http\Controllers\CatalogueController@view');
Route::get('/plan', 'App\Http\Controllers\PlanController@show');

