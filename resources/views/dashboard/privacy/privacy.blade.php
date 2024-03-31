@extends('dashboard.dashboardLayout')
@section('header')
    <div class="contentWrapper__right__heading contentWrapper__right__heading__contentBlog">
        <h1 class="color-black cap-case">Privacy & Conditions</h1>
    </div>

    <div class="contentWrapper__right__ctrls text-right">
        <ul class="list-unstyled list-inline">
            <li>
                <a href="{{env('APP_URL')}}/listingPrivacy" class="cap-case color-blue">privacy & condition</a>
            </li>
            <li>
                <a href="{{env('APP_URL')}}/createPrivacy" class="cap-case color-black">add privacy & condition</a>
            </li>
            <li>
                <a href="{{env('APP_URL')}}/adminLogout" class="upper-case color-black">log out</a>
            </li>
        </ul>
    </div>
@stop
@section('content')

    <section class="contentWrapper__cover"><!--Start contentWrapper__cover-->

        <div class="contentWrapper__content">

            <div class="contentWrapper__cover__breads">
                @if($privacy)
                    <div class="contentWrapper__cover__breads__ctrls text-right">
                        <a href="{{env('APP_URL')}}/editPrivacy/{{ $privacy->id }}">
                            <button class="upper-case color-black">edit</button>
                        </a>
                        <span class="pack__table__separat"></span>
                        <a href="{{env('APP_URL')}}/deletePrivacy/{{ $privacy->id }}">
                            <button onclick="return confirm('Are you sure?')" class="upper-case color-red">delete</button>
                        </a>
                    </div>
                @else
                    <h2>THERE IS NO DATA YET .. </h2>
                @endif
            </div>
            @if($privacy)
                <article class="privacy__article editable">    
                    {!! $privacy->privacy !!}
                </article>
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
                                <a href="{{env('APP_URL')}}/deletePrivacy/{{ $privacy->id }}">
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
            @endif

        </div>
    </section><!--End contentWrapper__cover-->

@stop
