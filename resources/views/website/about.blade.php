@extends('website.websiteLayout')  
@section('webContent')
    <section class="intern__wraper"><!--Start intern__wraper-->
        
        <!--========== Start hero ==========-->
        <header class="hero hero__tab" style="background-image: url('imgs/intern/bg-header.jpg')"></header>
        <!--========== End hero ==========-->
        
        <!--========== Start internReality ==========-->
        <div class="internReality internReality__home">
            <div class="container"><!--Start Container-->
                <div class="row"><!--Start row-->

                    <div class="col-sm-6 col-xs-12">
                        <article class="internReality__info">
                            <h1 class="internReality__info__heading cap-case color-red">reality is always the best to know us</h1>
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
                            <a href="{{env('APP_URL')}}/contactUs" class="small__btn cap-case text-center color-white bg-red"> contact now </a>
                        </article>
                    </div>

                </div><!--End row-->
            </div><!--End Container-->
        </div>
        <!--========== End internReality ==========-->
        
        <!--========== Start banner ==========-->
        <section class="generalBanner bg-blue">
            <div class="container">
                <span class="cap-case color-white tab-d-none">we build a</span>
                <h2 class="upper-case color-white m-left-9">benefit for you</h2>
            </div>
        </section>
        <!--========== End banner ==========-->
        
        <!--========== Start internArticles ==========-->
        <section class="internArticles">
            <div class="container"><!--Start Container-->
                <div class="row"><!--Start row-->

                    <div class="col-sm-6 col-xs-12">
                        <article class="internArticles__atricle">
                            <span class="internArticles__atricle__nu">01</span>
                            <h3 class="general__heading cap-case color-black">does it real make different</h3>
                            <p class="internArticles__atricle__p">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.  </p>
                        </article>
                        <article class="internArticles__atricle">
                            <span class="internArticles__atricle__nu">03</span>
                            <h3 class="general__heading cap-case color-black">does it real make different</h3>
                            <p class="internArticles__atricle__p">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            </p>
                        </article>
                    </div>

                    <div class="col-sm-6 col-xs-12">
                        <article class="internArticles__atricle">
                            <span class="internArticles__atricle__nu">02</span>
                            <h3 class="general__heading cap-case color-black">grow your business with steps</h3>
                            <p class="internArticles__atricle__p">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            </p>
                        </article>
                        <article class="internArticles__atricle">
                            <span class="internArticles__atricle__nu">04</span>
                            <h3 class="general__heading cap-case color-black">what makes the big different</h3>
                            <p class="internArticles__atricle__p">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                            </p>
                        </article>
                    </div>
                    
                </div><!--End row-->
            </div><!--End Container-->
        </section>
        <!--========== End internArticles ==========-->

        <!--========== Start hero ==========-->
        <header class="hero hero__tab" style="background-image: url('imgs/intern/intern-bottom.jpg')"></header>
        <!--========== End hero ==========-->

        <!--========== Start banner ==========-->
        <section class="generalBanner bg-red">
            <div class="container">
                <span class="cap-case color-black  tab-d-none">we build for you a</span>
                <h2 class="upper-case color-black">values we provide</h2>
            </div>
        </section>
        <!--========== End banner ==========-->

        <!--========== Start internArticles ==========-->
        <section class="internArticles">
            <div class="container"><!--Start Container-->
                <div class="row"><!--Start row-->

                    <div class="col-sm-6 col-xs-12">
                        <article class="internArticles__atricle">
                            <h3 class="general__heading cap-case color-red">does it real make different</h3>
                            <p class="internArticles__atricle__p">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea erat, sed diam voluptua.
                            </p>
                            <p class="internArticles__atricle__p">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea erat, sed diam voluptua.
                            </p>
                        </article>
                        <article class="internArticles__atricle">
                            <h3 class="general__heading cap-case color-red">does it real make different</h3>
                            <p class="internArticles__atricle__p">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            </p>
                        </article>
                    </div>

                    <div class="col-sm-6 col-xs-12">
                        <article class="internArticles__atricle">
                            <h3 class="general__heading cap-case color-red">grow your business with steps</h3>
                            <p class="internArticles__atricle__p">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            </p>
                        </article>
                        <article class="internArticles__atricle">
                            <h3 class="general__heading cap-case color-red">what makes the big different</h3>
                            <p class="internArticles__atricle__p">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                            </p>
                        </article>
                    </div>
                    
                </div><!--End row-->
            </div><!--End Container-->
        </section>
        <!--========== End internArticles ==========-->
        

    </section><!--End intern__wraper-->
@stop