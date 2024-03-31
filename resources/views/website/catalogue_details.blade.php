@extends('website.websiteLayout')  
@section('webContent')

    <!--========== Start catDetails ==========-->
    <section class="catDetails">
        <div class="container"><!--Start Container-->
            <div class="row"><!--Start row-->
            
                <div class="col-md-6 col-xs-12">
                    
                    <div class="catDetails__wrapInfo">
                        <div class="catDetails__info">
                            @if($catalogue->discount)
                            <span class="catDetails__info__badge bg-red color-white upper-case">{{ $catalogue->discount }} % off</span>
                            @endif
                            <h1 class="catDetails__info__head color-black cap-case">{{ $catalogue->name }}</h1>
                            @if($catalogue->responsive_switch)
                            <span class="catDetails__info__split"></span>
                            <span class="catDetails__info__respn">
                                <img src="{{env('APP_URL')}}/imgs/res-img.png" alt="">
                            </span>
                            @endif
                        </div>

                        <div class="catDetails__info__body">
                            <h3 class="catDetails__info__body__head cap-case">theme culture</h3>
                            
                            <p class="catDetails__p text one">
                            {{ $catalogue->description }}
                            </p>
                            
                            <h3 class="catDetails__info__body__head cap-case">for</h3>
                            
                            <ul class="catDetails__info__body__badges list-unstyled list-inline">           
                                @foreach($catalogue->for as $category)
                                <li class="cap-case">{{$category}}</li>
                                @endforeach
                            </ul>

                            <h3 class="catDetails__info__body__head cap-case">language</h3>
                            <p class="cap-case catDetails__p"> {{ $catalogue->language }}</p>

                            <h3 class="catDetails__info__body__head cap-case">color available</h3>
                            <ul class="catDetails__info__body__colors list-unstyled list-inline">
                                @foreach($catalogue->color as $color)
                                <li style="background-color:{{ $color }};"></li>
                                @endforeach
                            </ul>

                            <a href="{{env('APP_URL')}}/request" class="catDetails__info__body__link general__link upper-case text-left">
                                request now
                                <img src="{{env('APP_URL')}}/imgs/red-arrow.png" alt="right arrow">
                                <img src="{{env('APP_URL')}}/imgs/red-arrow.png" alt="right arrow">
                            </a>

                        </div>
                    </div>

                </div>
                
                <div class="col-md-6 col-xs-12">
                    <div class="catDetails__imgs">
                        <img src="{{ $catalogue->desktop_image }}" alt="" loading="lazy">
                        <img src="{{ $catalogue->tablet_image }}" alt="" loading="lazy">
                        <img src="{{ $catalogue->mobile_image }}" alt="" loading="lazy">
                    </div>
                </div>
            
            </div><!--End row-->
        </div><!--End Container-->

    </section>
    <!--========== End catDetails ==========-->
@stop