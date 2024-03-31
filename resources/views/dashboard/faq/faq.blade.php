@extends('dashboard.dashboardLayout')
@section('header')

    <div class="contentWrapper__right__heading contentWrapper__right__heading__contentBlog">
        <h1 class="color-black upper-case">faq</h1>
    </div>

    <div class="contentWrapper__right__ctrls text-right">
        <ul class="list-unstyled list-inline">
            <li>
                <a href="{{env('APP_URL')}}/listingFaq" class="upper-case color-blue">faq</a>
            </li>
            <li>
                <a href="{{env('APP_URL')}}/createFaq" class="cap-case color-black">add FAQ</a>
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

        <!-- <div class="contentWrapper__cover__breads contentWrapper__cover__breads__faq">
            <div>
                <a class="upper-case color-blue">faq</a>
            </div>
        </div> -->

        <div class="moderationProjects__projects__request moderationProjects__projects__request__content">
            
            <div class="moderationProjects__projects__request__item moderationProjects__projects__faq">
                @forelse($faqs as $faq)
                    <table>
                        <thead>
                        
                            <tr>
                                <td>
                                    <h4 class="cap-case color-blue">{{ $faq->question }}</h4>
                                </td>
                                <td>
                                    <div class="contentWrapper__cover__breads__ctrls text-right">
                                        <a href="{{env('APP_URL')}}/editFaq/{{ $faq->id }}">
                                            <button class="upper-case color-black">edit</button>
                                        </a>
                                        <span class="pack__table__separat"></span>
                                        <a href="{{env('APP_URL')}}/deleteFaq/{{ $faq->id }}">
                                            <button onclick="return confirm('Are you sure?')" class="upper-case color-red">delete</button>
                                        </a>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <button>
                                        <i class="fa fa-angle-double-down fa-fw"></i>
                                    </button>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="3">
                                    <h3>{{ $faq->question }}</h3>
                                    <p>
                                    {!! $faq->answer !!}    
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
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
                                    <a href="{{env('APP_URL')}}/deleteFaq/{{ $faq->id }}">
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

                @empty
                    <h2>THERE IS NO DATA YET .. </h2>
                @endforelse
            </div>

        </div>

    </div>

</section><!--End contentWrapper__cover-->
@stop