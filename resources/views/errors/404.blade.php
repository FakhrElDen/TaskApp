@extends('website.websiteLayout')  
@section('webContent')
    <!--========== Start found404 ==========-->
    <section class="found404">
        <div class="container"><!--Start Container-->
            <div class="row"><!--Start row-->

                <div class="col-md-6 col-xs-12 hidden-sm hidden-xs"></div>

                <div class="col-md-6 col-xs-12">
                    <div class="notFound">
                        <h3 class="notFound__heading color-black cap-case"> 404 not found </h3>
                        <p>
                            The requested URL your are looking for: <strong>/cdifnesdfs</strong> Please check your requested URL or click on the button below to take you back.
                        </p>
                        <a href="{{env('APP_URL')}}" class="homeCatalouge__find cap-case color-white text-center bg-blue">
                            take me back
                            <img src="{{env('APP_URL')}}/imgs/icons/right-w-a.png" alt="">
                        </a>
                    </div>
                </div>

            </div><!--End row-->
        </div><!--End Container-->

    </section>
    <!--========== End found404 ==========-->
@stop
