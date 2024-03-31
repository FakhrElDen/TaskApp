@extends('dashboard.dashboardLayout')
@section('header')

    <div class="contentWrapper__right__heading">
        <h1 class="color-black cap-case">slider images</h1>
    </div>

    <div class="contentWrapper__right__ctrls text-right">
        <ul class="list-unstyled list-inline">
            <li>
                <a href="{{env('APP_URL')}}/listingSliders" class="cap-case color-black">images</a>
            </li>
            <li>
                <a href="{{env('APP_URL')}}/createSlider" class="cap-case color-black">upload image</a>
            </li>
            <li>
                <a href="{{env('APP_URL')}}/adminLogout" class="upper-case color-black">log out</a>
            </li>
        </ul>
    </div>
@stop
@section('content')
    <section class="contentWrapper__cover"><!--Start contentWrapper__cover-->
        <div class="contentWrapper__content"><!--Start contentWrapper__content-->
            <p style="color:red"> @error('image') {{$message}} @enderror </p>
            <h4 class="contentWrapper__content__form__div__heading cap-case color-blue">tablet slider - 1024px</h4>
            @foreach($sliders as $slider)
                <div class="contentWrapper__content__form">

                    <form enctype="multipart/form-data" action="{{env('APP_URL')}}/updateSlider/{{ $slider->id }}" method="POST">
                        {{ @csrf_field() }}
                        <div class="contentWrapper__content__form__div">
                            <label class="cap-case"> choose images </label>
                            <div class="contentWrapper__content__form__file">
                                <input type="file" name="image" class="content__file" multiple>
                                <span class="file__result">{{ $slider->image }}</span>
                                <button class="file__btn color-white"><i class="fa fa-plus fa-fw"></i></button>
                            </div>
                        </div>

                        <div class="contentWrapper__content__form__ctrls">
                            <a href="{{env('APP_URL')}}/deleteSlider/{{ $slider->id }}">
                                <button onclick="return confirm('Are you sure?')" type="button" class="cap-case color-white bg-red text-left">
                                    <span class="pull-left">X</span>
                                    <span class="pull-right">Delete</span>
                                </button>
                            </a>

                            <button class="cap-case color-white bg-blue text-right">
                                <span class="pull-right">+</span>
                                <span class="pull-left">Update</span>
                            </button>
                        </div>
                    </form>

                </div>
                <!-- Notification  --> 
                <section id="mainMessage" class="confirm">
                    <div class="confirm__core">
                        <div>
                            <h1 class="cap-case color-black text-center">are you sure</h1>
                            <div class="confirm__core__btns">
                                <button id="closeAlert" class="bg-red color-white">
                                    <i class="fa fa-times fa-fw"></i>
                                    <span>Cancel</span>
                                </button>
                                <a href="{{env('APP_URL')}}/deleteSlider/{{ $slider->id }}">
                                <button class="bg-green color-white">
                                    <span style="color:white;">Yes</span>
                                    <i class="fa fa-check fa-fw"></i>
                                </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End of notification -->
            @endforeach  
        </div><!--End contentWrapper__content-->
    </section><!--End contentWrapper__cover-->
@stop