@extends('dashboard.dashboardLayout')
@section('header')

    <div class="contentWrapper__right__heading">
        <h1 class="color-black cap-case">squad</h1>
    </div>

    <div class="contentWrapper__right__ctrls text-right">
        <ul class="list-unstyled list-inline">
            <li>
                <a href="{{env('APP_URL')}}/listingSquad" class="cap-case color-black">squad</a>
            </li>
            <li>
                <a href="{{env('APP_URL')}}/createSquad" class="cap-case color-blue">add to squad</a>
            </li>
            <li>
                <a href="{{env('APP_URL')}}/adminLogout" class="upper-case color-black">log out</a>
            </li>
        </ul>
    </div>

@stop
@section('content')
    <div class="contentWrapper__content"><!--Start contentWrapper__content-->
        <div class="contentWrapper__content__form">

            <form enctype="multipart/form-data" action="{{env('APP_URL')}}/storeSquad" method="POST">
                {{ @csrf_field() }}
                <div class="contentWrapper__content__form__div">
                    <p style="color:red"> @error('name') {{$message}} @enderror </p>
                    <h4 class="contentWrapper__content__form__div__heading cap-case color-blue">Squad Name</h4>
                    <label class="cap-case"> name </label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="contentWrapper__content__form__div">
                    <p style="color:red"> @error('position') {{$message}} @enderror </p>
                    <h4 class="contentWrapper__content__form__div__heading cap-case color-blue">Squad position</h4>
                    <label class="cap-case"> Description </label>
                    <input type="text" name="position" class="form-control">
                </div>

                <div class="contentWrapper__content__form__div">
                    <p style="color:red"> @error('image') {{$message}} @enderror </p>
                    <h4 class="contentWrapper__content__form__div__heading cap-case color-blue">Squad image</h4>
                    <label class="cap-case"> image </label>
                    <div class="contentWrapper__content__form__file">
                        <input type="file" name="image" class="content__file" multiple>
                        <span class="file__result"></span>
                        <button class="file__btn color-white"><i class="fa fa-plus fa-fw"></i></button>
                    </div>
                </div>

                <br>

                <div class="contentWrapper__content__form__ctrls text-right">
                    <a href="{{ URL::previous() }}">
                        <button type="button" class="cap-case color-white bg-red text-left">
                            <span class="pull-left">X</span>
                            <span class="pull-right">Cancel</span>
                        </button>
                    </a>

                    <button class="cap-case color-white bg-blue text-right">
                        <span class="pull-right">+</span>
                        <span class="pull-left">Create</span>
                    </button>
                </div>
            </form>

        </div>
                        
    </div><!--End contentWrapper__content-->

@stop