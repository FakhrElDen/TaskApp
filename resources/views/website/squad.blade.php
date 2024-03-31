@extends('website.websiteLayout')  
@section('webContent')
    <!--========== Start internHero ==========-->
    <header class="hero hero__squad" style="background-image: url('imgs/blog/blog.jpg')">
        <div class="container"><!--Start Container-->
            
            <article class="hero__article internship__article">
                <h1 class="hero__article__heading cap-case color-black">our squad</h1>
                <p class="hero__article__p internship__article__p cap-case color-black">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut.
                </p>
            </article>

        </div><!--End Container-->
    </header>
    <!--========== End internHero ==========-->
    
    <!--========== Start squad ==========-->
    <section class="squad">
    @if($squads)
        <div class="container"><!--Start Container-->
        
            <div class="row"><!--Start row-->
            @foreach($squads as $squad)
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="squad__member">
                        <img src="{{ $squad->image }}" alt="" loading="lazy">
                        <div class="squad__member__info text-center">
                            <h3 class="squad__member__info__heading cap-case">{{ $squad->name }}</h3>
                            <hr>
                            <p>{{ $squad->position }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            </div><!--End row-->
            
        </div><!--End Container-->
        @else
            <h1>THERE IS NO DATA YET .. </h1>
        @endIf   
    </section>
    <!--========== End squad ==========-->
    
    <!--========== Start squad__info ==========-->
    <section class="squad__info text-center">
        <h2 class="squad__info__heading cap-case">Our love and dedication to all our squad</h2>
        <p>
            But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.
        </p>
    </section>
    <!--========== End squad__info ==========-->
@stop