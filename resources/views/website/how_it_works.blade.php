@extends('website.websiteLayout')  
@section('webContent')

    
    <!--========== Start hero ==========-->
    <header class="hero heroHowWorks" style="background-image: url('imgs/intern/bg-header.jpg')">
        <div class="container"><!--Start Container-->
        
            <article class="hero__article">
                <h1 class="hero__article__heading cap-case color-black">how it works</h1>
                <p class="hero__article__p cap-case color-black">
                    for you and for your business, whatever you are doing you will find what will meet your needs and values
                </p>
            </article>

            <i class="fa fa-arrow-circle-down fa-fw  d-none mob-d-block"></i>

        </div>
    </header>
    <!--========== End hero ==========-->
    
    <!--========== Start howWorks ==========-->
    <section class="howWorks">
        <div class="container"><!--Start Container-->

            <div class="row">

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="howWorks__article text-center">
                        <span>01</span>
                        <h2 class="cap-case color-red">Request your template</h2>
                        <p class="text-center">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut.</p>
                    </article>
                </div>
                
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="howWorks__article text-center">
                        <span>02</span>
                        <h2 class="cap-case color-red">Let us crafted for you</h2>
                        <p class="text-center">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut.</p>
                    </article>
                </div>

                <div class="col-md-4 col-xs-12">
                    <article class="howWorks__article text-center">
                        <span>03</span>
                        <h2 class="cap-case color-red">Deliverd at time for you</h2>
                        <p class="text-center">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut.</p>
                    </article>
                </div>

            </div>

            <div class="howWorks__info text-center">
                <hr>
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea erat, sed diam voluptua.
                </p>
                <a href="{{env('APP_URL')}}/contactUs" class="small__btn cap-case text-center color-white bg-red"> contact us </a>
            </div>

        </div><!--End Container-->
    </section>
    <!--========== End howWorks ==========-->
    
@stop