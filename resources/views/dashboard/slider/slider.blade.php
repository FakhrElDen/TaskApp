@extends('dashboard.dashboardLayout')
@section('header')
    <div class="contentWrapper__right__heading">
        <h1 class="color-black cap-case">Slider</h1>
    </div>

    <div class="contentWrapper__right__ctrls text-right">
        <ul class="list-unstyled list-inline">
            <li>
                <a href="{{env('APP_URL')}}/listingSliders" class="cap-case color-blue">images</a>
            </li>
            <li>
                <a href="{{env('APP_URL')}}/createSlider" class="cap-case color-black">upload images</a>
            </li>
            <li>
                <a href="{{env('APP_URL')}}/adminLogout" class="upper-case color-black">log out</a>
            </li>
        </ul>
    </div>
@stop
@section('content')
    <div class="contentWrapper__content"><!--Start contentWrapper__content-->
        <div class="contentWrapper__content__users">

            <div class="contentWrapper__content__users__item">
                <div class="visible">
                    <h4 class="cap-case color-blue">desktop slider - 1920px</h4>
                    <br>
                    <ul class="contentWrapper__content__users__item__images list-unstyled list-inline">
                    @if($sliders)
                        @foreach($sliders as $slider)
                            <li class="active mouse-pointer">
                                <img src="{{ $slider->image }}" alt="">
                            </li>
                        @endforeach         
                    </ul>
                    <label></label>
                    <label>
                        <span class="cap-case color-black">image name:</span>
                        <span id="contentWrapperContentUsersImagesResult"></span>
                    </label>
                    @else
                        <h2>THERE IS NO DATA YET .. </h2>
                    @endif
                </div>
                <div>
                    <ul class="list-unstyled list-inline pull-right content-btn-ctrls">
                        <a href="{{env('APP_URL')}}/editDesktop">
                            <li><button class="upper-case color-black">edit</button></li>
                        </a>
                    </ul>
                </div>
            </div>
            
            <br>
            
            <div class="contentWrapper__content__users__item">
                <div class="visible">
                    <h4 class="cap-case color-blue">Desktop Slider - 1366px</h4>
                    <br>
                    <ul class="contentWrapper__content__users__item__images list-unstyled list-inline">
                    @foreach($desktopSliders as $slider)
                        <li class="active mouse-pointer">
                            <img src="{{ $slider->image }}" alt="">
                        </li>
                    @endforeach
                    </ul>
                    <label></label>
                    <label>
                        <span class="cap-case color-black">image name:</span>
                        <span id="contentWrapperContentUsersImagesResult"></span>
                    </label>
                </div>
                <div>
                    <ul class="list-unstyled list-inline pull-right content-btn-ctrls">
                        <a href="{{env('APP_URL')}}/editDesktopSlider">
                            <li><button class="upper-case color-black">edit</button></li>
                        </a>
                    </ul>
                </div>
            </div>
            
            <br>
            
            <div class="contentWrapper__content__users__item">
                <div class="visible">
                    <h4 class="cap-case color-blue">Tablet Slider - 1024px</h4>
                    <br>
                    <ul class="contentWrapper__content__users__item__images list-unstyled list-inline">
                        @foreach($tabletSliders as $slider)
                        <li class="active mouse-pointer">
                            <img src="{{ $slider->image }}" alt="">
                        </li>
                        @endforeach
                    </ul>
                    <label></label>
                    <label>
                        <span class="cap-case color-black">image name:</span>
                        <span id="contentWrapperContentUsersImagesResult"></span>
                    </label>
                </div>
                <div>
                    <ul class="list-unstyled list-inline pull-right content-btn-ctrls">
                        <a href="{{env('APP_URL')}}/editTabletSlider">
                            <li><button class="upper-case color-black">edit</button></li>
                        </a>
                    </ul>
                </div>
            </div>
            
            <br>
            
            <div class="contentWrapper__content__users__item">
                <div class="visible">
                    <h4 class="cap-case color-blue">Mobile Slider - 1024px</h4>
                    <br>
                    <ul class="contentWrapper__content__users__item__images list-unstyled list-inline">
                        @foreach($mobileSliders as $slider)
                        <li class="active mouse-pointer">
                            <img src="{{ $slider->image }}" alt="">
                        </li>
                        @endforeach
                    </ul>
                    <label></label>
                    <label>
                        <span class="cap-case color-black">image name:</span>
                        <span id="contentWrapperContentUsersImagesResult"></span>
                    </label>
                </div>
                <div>
                    <ul class="list-unstyled list-inline pull-right content-btn-ctrls">
                        <a href="{{env('APP_URL')}}/editMobileSlider">
                            <li><button class="upper-case color-black">edit</button></li>
                        </a>
                    </ul>
                </div>
            </div>

        </div>
    </div><!--End contentWrapper__content-->
@stop