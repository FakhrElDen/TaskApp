@extends('website.websiteLayout')  
@section('webContent')

    <!--========== Start found404 ==========-->
    <section class="found404 workingon">
        <div class="container"><!--Start Container-->
            <div class="row"><!--Start row-->

                <div class="col-md-6 col-xs-12">
                    <div class="notFound">
                        <h3 class="notFound__heading color-black cap-case"> still working on </h3>
                        <p>
                            We are trying to build the most useable services that will meet your expectation for along
                        </p>
                        <a href="{{env('APP_URL')}}" class="homeCatalouge__find cap-case color-white text-center bg-blue">
                            go back home
                            <img src="imgs/icons/right-w-a.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-xs-12 hidden-sm hidden-xs"></div>

            </div><!--End row-->
        </div><!--End Container-->

    </section>
    <!--========== End found404 ==========-->
    
@stop