@extends('dashboard.dashboardLayout')
@section('header')

    <div class="contentWrapper__right__heading contentWrapper__right__heading__contentBlog">
        <h1 class="color-black upper-case">faq</h1>
    </div>

    <div class="contentWrapper__right__ctrls text-right">
        <ul class="list-unstyled list-inline">
            <li>
                <a href="{{env('APP_URL')}}/listingFaq" class="upper-case color-black">faq</a>
            </li>
            <li>
                <a href="{{env('APP_URL')}}/createFaq" class="cap-case color-blue">add FAQ</a>
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
            <h4 class="cap-case color-blue">add FAQ</h4>
        </div>

        <form action="{{env('APP_URL')}}/storeFaq" method="POST">
        {{ @csrf_field() }}
            <div class="contentWrapper__content__form__div">
            <p style="color:red"> @error('question') {{$message}} @enderror </p>
                <label class="cap-case"> FAQ Question </label>
                <input type="text" name="question" class="form-control">
            </div>

            <div class="contentWrapper__content__form__div">
            <p style="color:red"> @error('answer') {{$message}} @enderror </p>
                <label>FAQ Answer</label>
                <textarea class="contentWrapper__cover__blogEdit editable" name="answer" cols="30" rows="10"></textarea>
            </div>

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