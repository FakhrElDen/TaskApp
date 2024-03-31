@extends('website.websiteLayout')  
@section('webContent')
   <!--========== Start internHero ==========--> 
    <header class="hero heroCat bg-white">
        <div class="container"><!--Start Container-->
            
            <article class="hero__article">
                <h1 class="hero__article__heading cap-case color-black">website now is art</h1>
                <p class="hero__article__p cap-case color-black">
                    for you and for your business, whatever you are doing you will find what will meet your needs and values
                </p>
            </article>

            <h4 class="gero__cat__hid__heading cap-case">filter by</h4>

        </div><!--End Container-->
    </header>
    <!--========== End internHero ==========-->
    
    <!--========== Start catalouge ==========-->
    <section class="catalouge">
        <div class="container"><!--Start Container-->
            <nav class="catalouge__ctrls"><!--Start catalouge__ctrls-->
                <ul class="list-unstyled">
                    <li><span class="catalouge__ctrls__nav cap-case">filter by</span></li>
                    @foreach($packages as $key=>$package)
                        <li><span class="catalouge__ctrls__nav cap-case mouse-pointer @if($key == 0) catalouge__ctrls-active @endif" data-category=".cat__{{ $package->name }}" >{{ $package->name }}</span></li>
                    @endforeach    
                </ul>
            </nav><!--End catalouge__ctrls-->
            
            <div class="catalouge__wrap"><!--Start catalouge__wrap-->
                @foreach($packages as $key => $package)
                    <div class="cat__{{$package['name']}}">
                        <div class="row"><!--Start row-->
                            @foreach($package->catalogues as $personalCatalogue)
                                <div class="col-sm-6 col-xs-12">
                                    <figure class="catalouge__block">
                                        <div class="catalouge__block-label">{{ $personalCatalogue->label }}</div>
                                        <div class="catalouge__block__img" style="background-image: url('{{env('App_Media_URL')}}/{{ $personalCatalogue->desktop_image }}')">
                                            <div class="catalouge__block__img__overlay bg-white d-none"> coming soon </div>
                                        </div>
                                        <h3 class="catalouge__block__heading cap-case color-black">{{ $personalCatalogue->name }}</h3>
                                        <p class="catalouge__block__p">
                                        {!! Str::limit($personalCatalogue->description, 125) !!}
                                        </p>
                                        <a href="{{env('APP_URL')}}/catalogueDetails/{{ $personalCatalogue->id }}" class="catalouge__block__a general__link cap-case text-left">
                                            start now
                                            <img src="imgs/black-arrow.png" alt="right arrow">
                                            <img src="imgs/red-arrow.png" alt="right arrow">
                                        </a>
                                    </figure>
                                </div>
                            @endforeach 
                        </div><!--End row-->                        
                    </div>
                @endforeach            
            </div><!--End catalouge__wrap-->

        </div><!--End Container-->

        <!-- <button class="mobile__btn cat_more__btn d-block text-center color-white bg-blue cap-case">load more</button> -->
    </section>
    <!--========== End catalouge ==========-->
@stop
