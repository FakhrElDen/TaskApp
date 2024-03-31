@extends('dashboard.dashboardLayout')
@section('header')

    <div class="contentWrapper__right__heading contentWrapper__right__heading__contentBlog">
        <h1 class="color-black cap-case">Terms & Conditions</h1>
    </div>

    <div class="contentWrapper__right__ctrls text-right">
        <ul class="list-unstyled list-inline">
            <li>
                <a href="{{env('APP_URL')}}/listingCondition" class="cap-case color-black">Terms & Conditions</a>
            </li>
            <li>
                <a href="{{env('APP_URL')}}/createCondition" class="cap-case color-blue">add Terms & Conditions</a>
            </li>
            <li>
                <a href="{{env('APP_URL')}}/adminLogout" class="upper-case color-black">log out</a>
            </li>
        </ul>
    </div>

@stop
@section('content')

    <section class="contentWrapper__cover"><!--Start contentWrapper__cover-->

        <div class="contentWrapper__cover__blogging">
            <h4 class="cap-case color-blue">add condition</h4>
        </div>
        <p style="color:red"> @error('condition') {{$message}} @enderror </p>
        <form action="{{env('APP_URL')}}/storeCondition" method="POST">
            {{ @csrf_field() }}
            <textarea class="contentWrapper__cover__blogEdit editable" name="condition"></textarea>
            <div class="contentWrapper__content__form__ctrls text-center" style="margin-left: 0">
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
    </section><!--End contentWrapper__cover-->

@stop
