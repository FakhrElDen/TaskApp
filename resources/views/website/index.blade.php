@extends('website.websiteLayout')  
@section('webContent')
    <!--========== Start homeHero ==========-->
    <section class="homeHero bg-yellow">
        <div class="homeHero__info text-center">
            <h3 class="homeHero__info__slogan upper-case">it's here for you</h3>
            <h1 class="homeHero__info__heading cap-case">Website</h1>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut.</p>
            <a href="{{env('APP_URL')}}/catalogue" class="big__btn upper-case text-center color-white bg-blue"> start now </a>
        </div>

        <div class="homeHero__slider d-none">
            <div class="homeHero__slider__owl owl-carousel owl-theme">

                <div class="item homeHero__slider__owl__block">
                    <img src="imgs/blog/blog.jpg" alt="" loading="lazy" class="bg-yellow">
                    <h3 class="homeHero__slider__owl__block__slogan">Enjoy your healthy food</h3>
                    <h2 class="homeHero__slider__owl__block__heading">with 2 easy steps</h2>
                    <a href="#" class="small__btn cap-case text-center color-white bg-green"> order now </a>
                </div>

                <div class="item homeHero__slider__owl__block">
                    <img src="imgs/blog/blog.jpg" alt="" loading="lazy" class="bg-yellow">
                    <h3 class="homeHero__slider__owl__block__slogan">Enjoy your healthy food</h3>
                    <h2 class="homeHero__slider__owl__block__heading">with 2 easy steps</h2>
                    <a href="#" class="small__btn cap-case text-center color-white bg-green"> order now </a>
                </div>

                <div class="item homeHero__slider__owl__block">
                    <img src="imgs/blog/blog.jpg" alt="" loading="lazy" class="bg-yellow">
                    <h3 class="homeHero__slider__owl__block__slogan">Enjoy your healthy food</h3>
                    <h2 class="homeHero__slider__owl__block__heading">with 2 easy steps</h2>
                    <a href="#" class="small__btn cap-case text-center color-white bg-green"> order now </a>
                </div>

                <div class="item homeHero__slider__owl__block">
                    <img src="imgs/blog/blog.jpg" alt="" loading="lazy" class="bg-yellow">
                    <h3 class="homeHero__slider__owl__block__slogan">Enjoy your healthy food</h3>
                    <h2 class="homeHero__slider__owl__block__heading">with 2 easy steps</h2>
                    <a href="#" class="small__btn cap-case text-center color-white bg-green"> order now </a>
                </div>

                <div class="item homeHero__slider__owl__block">
                    <img src="imgs/blog/blog.jpg" alt="" loading="lazy" class="bg-yellow">
                    <h3 class="homeHero__slider__owl__block__slogan">Enjoy your healthy food</h3>
                    <h2 class="homeHero__slider__owl__block__heading">with 2 easy steps</h2>
                    <a href="#" class="small__btn cap-case text-center color-white bg-green"> order now </a>
                </div>

                <div class="item homeHero__slider__owl__block">
                    <img src="imgs/blog/blog.jpg" alt="" loading="lazy" class="bg-yellow">
                    <h3 class="homeHero__slider__owl__block__slogan">Enjoy your healthy food</h3>
                    <h2 class="homeHero__slider__owl__block__heading">with 2 easy steps</h2>
                    <a href="#" class="small__btn cap-case text-center color-white bg-green"> order now </a>
                </div>

            </div>
        </div>

        <div class="homeHero__slider">
            
            <!--===============================================================================================================================-->
            
            <!--===============================================================================================================================-->

        </div>

    </section>

    <!--========== End homeHero ==========-->
    <section class="homeMainSlider">

        <div class="slick-slider">
        @foreach($sliders as $slider)
            <div>
                <!--for Desktop-->
                <img src="{{ $slider->image}}" class="hidden-sm hidden-xs" alt="">
                
                <!--for Tablet-->
                <img src="{{ $slider->image}}" class="hidden-xlg hidden-lg hidden-md hidden-xs" alt="">
                
                <!--for Mobile-->
                <img src="{{ $slider->image}}" class="hidden-xlg hidden-lg hidden-md hidden-sm" alt="">
            </div>
        @endforeach
        </div>

        <div class="homeMainSlider__ctrls">
            <button id="homeMainSliderCtrlsPrev">
                <img src="imgs/left-arrow.png" alt="">
            </button>
            <button id="homeMainSliderCtrlsNext">
                <img src="imgs/left-arrow.png" alt="" style="transform: rotate(180deg)">
            </button>
        </div>

    </section>

    <!--========== Start internReality ==========-->
    <div class="internReality internReality__lg home__best">
        <div class="container"><!--Start Container-->
            <div class="row"><!--Start row-->

                <div class="col-sm-6 col-xs-12">
                    <article class="internReality__info">
                        <h1 class="internReality__info__heading cap-case color-green">What is the best choice for you</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea erat, sed diam voluptua.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua Stet clita kasd gubergren, no sea erat, sed diam voluptua.
                        </p>
                    </article>
                </div>
                
                <div class="col-sm-6 col-xs-12">
                    <article class="internReality__contact">
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore justo duo.
                        </p>
                        <a href="{{env('APP_URL')}}/catalogue" class="small__btn cap-case text-center color-white bg-green"> start now </a>
                    </article>
                </div>

            </div><!--End row-->
        </div><!--End Container-->
    </div>
    <!--========== End internReality ==========-->

    <!--========== Start generalBanner ==========-->
    <section class="generalBanner generalBanner__res bg-red tab-d-none">
        <div class="container"><!--Start Container-->
            <div class="row"><!--Start row-->

                <div class="col-md-6 col-xs-12">
                    <span class="cap-case color-black">we build for you a</span>
                    <h2 class="upper-case color-black">website</h2>
                </div>
                
                <div class="col-md-6 col-xs-12">
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore justo duo.
                    </p>
                </div>

            </div><!--End row-->
        </div><!--End Container-->
    </section>
    <!--========== End generalBanner ==========-->
    
    <!--========== Start homeWould ==========-->
    <section class="homeWould tab-d-none">
        <div class="container">
            <article class="homeWould__info">
                <h2 class="homeWould__info__heading color-blue cap-case">whu you would build website with us</h2>
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea erat, sed diam voluptua.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea erat, sed diam voluptua.
                </p>
                <h2 class="homeWould__info__small_heading color-blue cap-case">Does it real make different</h2>
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum
                </p>
                <a href="{{env('APP_URL')}}/request" class="small__btn cap-case text-center color-white bg-red"> request now </a>
            </article>
        </div>
    </section>
    <!--========== End homeWould ==========-->
    
    <!--========== Start generalBanner ==========-->
    <section class="generalBanner generalBanner__res bg-green tab-d-none">
        <div class="container">
            <span class="cap-case color-black m-left-add_9">we build for you a</span>
            <h2 class="upper-case color-black">benefit for you</h2>
        </div>
    </section>
    <!--========== End generalBanner ==========-->

    <!--========== Start homeArticles ==========-->
    <section class="homeArticles internArticles tab-d-none">
        <div class="container"><!--Start Container-->
            <div class="row"><!--Start row-->

                <div class="col-md-6 col-xs-12">
                    <article class="internArticles__atricle">
                        <h3 class="general__heading cap-case color-green">does it real make different</h3>
                        <p class="internArticles__atricle__p">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea erat, sed diam voluptua.
                        </p>
                        <p class="internArticles__atricle__p">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea erat, sed diam voluptua.
                        </p>
                    </article>
                    <article class="internArticles__atricle">
                        <h3 class="general__heading cap-case color-green">what makes the big different</h3>
                        <p class="internArticles__atricle__p">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                        </p>
                    </article>
                </div>

                <div class="col-md-6 col-xs-12">
                    <article class="internArticles__atricle">
                        <h3 class="general__heading cap-case color-green">Grow your business with steps</h3>
                        <p class="internArticles__atricle__p">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                        </p>
                    </article>
                    <article class="internArticles__atricle">
                        <h3 class="general__heading cap-case color-green">what makes the big different</h3>
                        <p class="internArticles__atricle__p">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                        </p>
                    </article>
                    <article class="internArticles__atricle">
                        <h3 class="general__heading cap-case color-green">what makes the big different</h3>
                        <p class="internArticles__atricle__p">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                        </p>
                    </article>
                </div>
                
            </div><!--End row-->
        </div><!--End Container-->
    </section>
    <!--========== End homeArticles ==========-->

    <!--========== Start generalBanner ==========-->
    <section class="generalBanner bg-blue">
        <div class="container">
            <h2 class="upper-case color-white">values for you</h2>
        </div>
    </section>
    <!--========== End generalBanner ==========-->
    
    <!--========== Start homeReal ==========-->
    <section class="homeReal">
        <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                
                <div class="item active homeReal__item bg-yellow style="background: url()">
                    <div class="row">
                        
                        <div class="col-md-6 col-xs-12">
                            <div class="homeReal__item__img">
                                <!-- <img src="imgs/home/home-real.png" alt="" loading="lazy"> -->
                            </div>
                        </div>
                        
                        <div class="col-md-5 col-xs-12">
                            <div class="homeReal__item__info bg-white">
                                <div>
                                    <span class="homeReal__item__info__count">2. <hr class="homeReal__item__info__count__hr"></span>
                                    <h3 class="homeReal__item__info_heading cap-case color-blue">Does it real make different</h3>
                                    <p class="homeReal__item__info__p">
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea erat, sed diam voluptua.
                                    </p>
                                </div>
                                <div>
                                    <p class="homeReal__item__info__p">
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea erat, sed diam voluptua.
                                    </p>
                                    <a href="{{env('APP_URL')}}/request" class="homeReal__item__info__a small__btn cap-case text-center color-white bg-blue"> request now </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1 col-xs-12 tab-d-none mob-d-none"></div>
                    </div>
                </div>

                <div class="item homeReal__item bg-red style="background: url()">
                    <div class="row">
                        
                        <div class="col-md-6 col-xs-12">
                            <div class="homeReal__item__img">
                            </div>
                        </div>
                        
                        <div class="col-md-5 col-xs-12">
                            <div class="homeReal__item__info bg-white">
                                <div>
                                    <span class="homeReal__item__info__count">2. <hr class="homeReal__item__info__count__hr"></span>
                                    <h3 class="homeReal__item__info_heading cap-case color-blue">Does it real make different</h3>
                                    <p class="homeReal__item__info__p">
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea erat, sed diam voluptua.
                                    </p>
                                </div>
                                <div>
                                    <p class="homeReal__item__info__p">
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea erat, sed diam voluptua.
                                    </p>
                                    <a href="{{env('APP_URL')}}/request" class="homeReal__item__info__a small__btn cap-case text-center color-white bg-blue"> request now </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1 col-xs-12 tab-d-none mob-d-none"></div>
                    </div>
                </div>
            
            </div>
            
            <a class="carousel-control right tab-d-none mob-d-none" href="#carousel" data-slide="next">
                <img src="imgs/black-arrow.png" alt="slider right arrow">
            </a>
        </div>
    
        <img src="imgs/black-arrow.png" class="homereal__arrow lg-d-none lab-d-none" alt="">
    </section>
    <!--========== End homeReal ==========-->

    <!--========== Start generalBanner ==========-->
    <section class="generalBanner generalBanner__tab bg-black">
        <div class="container">
            <h2 class="upper-case color-white">start your business</h2>
        </div>
    </section>
    <!--========== End generalBanner ==========-->

    <!--========== Start homeCatalouge ==========--> 
    <section class="homeCatalouge">
        <div class="container"><!--Start Container-->
            <div class="row"><!--Start row-->
                @foreach($catalogues as $catalogue)
                    <div class="col-sm-6 col-xs-12">
                        <figure class="catalouge__block homeCatalouge__block">
                            <div class="catalouge__block-label">{{$catalogue->label}}</div>
                            <img src="{{$catalogue->desktop_image}}" alt="" loading="lazy" class="homeCatalouge__block__img">
                            <h3 class="catalouge__block__heading cap-case color-black">{{$catalogue->name}}</h3>
                            <p class="catalouge__block__p">
                            {{ Str::limit($catalogue->description, 100) }}
                            </p>
                            <a href="{{env('APP_URL')}}/catalogueDetails/{{ $catalogue->id }}" class="catalouge__block__a general__link cap-case text-left">
                                start now
                                <img src="imgs/black-arrow.png" alt="right arrow">
                                <img src="imgs/red-arrow.png" alt="right arrow">
                            </a>
                        </figure>
                    </div>
                @endforeach
                <!-- <div class="col-sm-6 col-xs-12">
                    <figure class="catalouge__block homeCatalouge__block">
                        <img src="imgs/blog/blog.jpg" alt="" loading="lazy" class="homeCatalouge__block__img">
                        <h3 class="catalouge__block__heading cap-case color-black">Enjoy building your store</h3>
                        <p class="catalouge__block__p">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                        </p>
                        <a href="cat-details.html" class="catalouge__block__a general__link cap-case text-left">
                            start now
                            <img src="imgs/black-arrow.png" alt="right arrow">
                            <img src="imgs/red-arrow.png" alt="right arrow">
                        </a>
                    </figure>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <figure class="catalouge__block homeCatalouge__block">
                        <img src="imgs/blog/blog.jpg" alt="" loading="lazy" class="homeCatalouge__block__img">
                        <h3 class="catalouge__block__heading cap-case color-black">Enjoy building your store</h3>
                        <p class="catalouge__block__p">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                        </p>
                        <a href="cat-details.html" class="catalouge__block__a general__link cap-case text-left">
                            start now
                            <img src="imgs/black-arrow.png" alt="right arrow">
                            <img src="imgs/red-arrow.png" alt="right arrow">
                        </a>
                    </figure>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <figure class="catalouge__block homeCatalouge__block">
                        <img src="imgs/blog/blog.jpg" alt="" loading="lazy" class="homeCatalouge__block__img">
                        <h3 class="catalouge__block__heading cap-case color-black">Enjoy building your store</h3>
                        <p class="catalouge__block__p">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                        </p>
                        <a href="cat-details.html" class="catalouge__block__a general__link cap-case text-left">
                            start now 
                            <img src="imgs/black-arrow.png" alt="right arrow">
                            <img src="imgs/red-arrow.png" alt="right arrow">
                        </a>
                    </figure>
                </div> -->

            </div><!--End row-->

            <!-- <a href="http://" class="homeCatalouge__find cap-case color-white text-center bg-blue">find more</a> -->

        </div><!--End Container-->
    </section>
    <!--========== End homeCatalouge ==========-->

    <!--========== Start homeFaq ==========-->
    <section class="homeFaq tab-d-none">
        <div class="homeFaq__top">
            <div class="container">
                <h2 class="homeFaq__heading upper-case">faq</h2>
            </div>
        </div>
        <div class="container"><!--Start Container-->
            <div class="row"><!--Start row-->
                @foreach($faqs as $faq)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="domainArticles__block">
                        <h3 class="domainArticles__block__heading cap-case color-red">{{ $faq->question }}</h3>
                        <p class="domainArticles__block__p">
                        {!! Str::limit($faq->answer, 600) !!}
                        </p>
                    </article>
                </div>
                @endforeach
            </div><!--End row-->
        </div><!--End Container-->
    </section>
    <!--========== End homeFaq ==========-->
@stop