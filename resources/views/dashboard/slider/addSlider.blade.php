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
                <a href="{{env('APP_URL')}}/createSlider" class="cap-case color-blue">upload image</a>
            </li>
            <li>
                <a href="{{env('APP_URL')}}/adminLogout" class="upper-case color-black">log out</a>
            </li>
        </ul>
    </div>

@stop
@section('content')
    <p style="color:red"> @error('image') {{$message}} @enderror </p>

    <div class="contentWrapper__content"><!--Start contentWrapper__content-->
        <div class="contentWrapper__content__form">

            <form enctype="multipart/form-data" action="{{env('APP_URL')}}/storeSlider" method="POST">
                {{ @csrf_field() }}
                <div class="contentWrapper__content__form__div">
                    <h4 class="contentWrapper__content__form__div__heading cap-case color-blue">desktop slider - 1920px</h4>
                    <label class="cap-case"> choose images </label>
                    <div class="contentWrapper__content__form__file">
                        <input type="file" name="image" class="content__file" multiple>
                        <span class="file__result"></span>
                        <button class="file__btn color-white"><i class="fa fa-plus fa-fw"></i></button>
                    </div>
                    
                    <div class="contentWrapper__content__form__file">
                        <input type="hidden" class="content__file" value="1920px" name="size">
                    </div>
                    
                
                </div>
                <div class="contentWrapper__content__form__ctrls">
                    <button class="cap-case color-white bg-red text-left">
                        <span class="pull-left">X</span>
                        <span class="pull-right">cancel</span>
                    </button>

                    <button class="cap-case color-white bg-blue text-right">
                        <span class="pull-right">+</span>
                        <span class="pull-left">create</span>
                    </button>
                </div>
            </form>

        </div>                     
    </div><!--End contentWrapper__content-->

    <div class="contentWrapper__content"><!--Start contentWrapper__content-->
        <div class="contentWrapper__content__form">

            <form enctype="multipart/form-data" action="{{env('APP_URL')}}/storeSlider" method="POST">
                {{ @csrf_field() }}
                <div class="contentWrapper__content__form__div">
                    <h4 class="contentWrapper__content__form__div__heading cap-case color-blue">desktop slider - 1366px</h4>
                    <label class="cap-case"> choose images </label>
                    <div class="contentWrapper__content__form__file">
                        <input type="file" name="image" class="content__file" multiple>
                        <span class="file__result"></span>
                        <button class="file__btn color-white"><i class="fa fa-plus fa-fw"></i></button>
                    </div>

                    <div class="contentWrapper__content__form__file">
                        <input type="hidden" class="content__file" value="1366px" name="size">
                    </div>

                </div>
                <div class="contentWrapper__content__form__ctrls">
                    <button class="cap-case color-white bg-red text-left">
                        <span class="pull-left">X</span>
                        <span class="pull-right">cancel</span>
                    </button>

                    <button class="cap-case color-white bg-blue text-right">
                        <span class="pull-right">+</span>
                        <span class="pull-left">create</span>
                    </button>
                </div>
            </form>

        </div>
                        
    </div><!--End contentWrapper__content-->
                    
    <div class="contentWrapper__content"><!--Start contentWrapper__content-->
        <div class="contentWrapper__content__form">

            <form enctype="multipart/form-data" action="{{env('APP_URL')}}/storeSlider" method="POST">
                {{ @csrf_field() }}
                <div class="contentWrapper__content__form__div">
                    <h4 class="contentWrapper__content__form__div__heading cap-case color-blue">tablet slider - 1024px</h4>
                    <label class="cap-case"> choose images </label>
                    <div class="contentWrapper__content__form__file">
                        <input type="file" class="content__file" multiple name="image">
                        <span class="file__result"></span>
                        <button class="file__btn color-white"><i class="fa fa-plus fa-fw"></i></button>
                    </div>

                    <div class="contentWrapper__content__form__file">
                        <input type="hidden" class="content__file" value="tablet" name="size">
                    </div>

                </div>
                <div class="contentWrapper__content__form__ctrls">
                    <button class="cap-case color-white bg-red text-left">
                        <span class="pull-left">X</span>
                        <span class="pull-right">cancel</span>
                    </button>

                    <button class="cap-case color-white bg-blue text-right">
                        <span class="pull-right">+</span>
                        <span class="pull-left">create</span>
                    </button>
                </div>
            </form>

        </div>
        
    </div><!--End contentWrapper__content-->

    <div class="contentWrapper__content"><!--Start contentWrapper__content-->
        <div class="contentWrapper__content__form">

            <form enctype="multipart/form-data" action="{{env('APP_URL')}}/storeSlider" method="POST">
                {{ @csrf_field() }}
                <div class="contentWrapper__content__form__div">
                    <h4 class="contentWrapper__content__form__div__heading cap-case color-blue">mobile slider - 1024px</h4>
                    <label class="cap-case"> choose images </label>
                    <div class="contentWrapper__content__form__file">
                        <input type="file" class="content__file" multiple require name="image">
                        <span class="file__result"></span>
                        <button class="file__btn color-white"><i class="fa fa-plus fa-fw"></i></button>
                    </div>
                    
                    <div class="contentWrapper__content__form__file">
                        <input type="hidden" class="content__file" value="mobile" name="size">
                    </div>

                </div>
                <div class="contentWrapper__content__form__ctrls">
                    <button class="cap-case color-white bg-red text-left">
                        <span class="pull-left">X</span>
                        <span class="pull-right">cancel</span>
                    </button>

                    <button class="cap-case color-white bg-blue text-right">
                        <span class="pull-right">+</span>
                        <span class="pull-left">create</span>
                    </button>
                </div>
            </form>

        </div>
        
    </div><!--End contentWrapper__content-->

@stop