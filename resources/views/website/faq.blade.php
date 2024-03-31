@extends('website.websiteLayout')  
@section('webContent')
    <!--========== Start faq2__banner ==========-->        
    <section class="faq2__banner faq2__banner__2 bg-yellow text-center">
        <div>
            <h1 class="cap-case color-blue">how can we help ?</h1>
            <form action="">
                <input type="text" name="" placeholder="what is your issue?">
                <button class="bg-blue color-white">
                    <i class="fa fa-question fa-fw"></i>
                </button>
            </form>
        </div>
    </section>
    <!--========== End faq2__banner ==========-->        
        
    <!--========== Start faq2__questions ==========-->        
    <section class="faq2__questions">

        <div class="container"><!--Start Container-->
            <div class="row"><!--Start row-->
            @foreach($faqs as $faq)
                <div class="faq2__questions__core">
                
                    <div class="faq2__questions__core__item">
                        <h3 class="cap-case faq2__questions__core__item__head color-blue">
                            <span class="text-left">{{ $faq->question }}</span>
                            <i class="fa fa-chevron-down fa-fw text-right color-blue active"></i>
                        </h3>
                        <div class="faq2__questions__core__item__body">
                            <h5>{{ $faq->question }}</h5>
                            <p>
                                {!! $faq->answer  !!}
                            </p>
                        </div>
                    </div>
        
                </div>
            @endforeach
            </div><!--End row-->
        </div><!--End Container-->

    </section>
    <!--========== End faq2__questions ==========-->        
@stop