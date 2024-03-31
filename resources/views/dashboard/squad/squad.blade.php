@extends('dashboard.dashboardLayout')
@section('header')

    <div class="contentWrapper__right__heading">
        <h1 class="color-black cap-case">squad</h1>
    </div>

    <div class="contentWrapper__right__ctrls text-right">
        <ul class="list-unstyled list-inline">
            <li>
                <a href="{{env('APP_URL')}}/listingSquad" class="cap-case color-blue">squad</a>
            </li>
            <li>
                <a href="{{env('APP_URL')}}/createSquad" class="cap-case color-black">add to squad</a>
            </li>
            <li>
                <a href="{{env('APP_URL')}}/adminLogout" class="upper-case color-black">log out</a>
            </li>
        </ul>
    </div>

@stop
@section('content')

    <div class="contentWrapper__contentSquad1"><!--Start contentWrapper__content__squadAdd-->
                            
        <div class="contentWrapper__content__squadAdd__item">
            <table>
                <tbody>
                    @forelse($squads as $squad)
                        <tr>
                            <td>
                                <span class="cap-case">squad name</span>
                                <h4 class="color-black cap-case">{{ $squad->name }}</h4>
                            </td>
                            <td>
                                <span class="cap-case">date added</span>
                                <h4 class="color-black cap-case">{{ $squad->created_at }}</h4>
                            </td>
                            <td>
                                <span class="cap-case">squad position</span>
                                <h4 class="color-black cap-case">{{ $squad->position }}</h4>
                            </td>
                            <td>
                                <span class="cap-case">squad image</span>
                                <img src="{{ $squad->image }}" alt="">
                            </td>
                            <td class="text-right">
                                <span class="cap-case">action</span>
                                <ul class="list-unstyled list-inline">
                                <li><a href="{{env('APP_URL')}}/editSquad/{{ $squad->id }}"><button><i class="fa fa-edit fa-fw fa-lg"></i></button></a></li>
                                <li><a href="{{env('APP_URL')}}/deleteSquad/{{ $squad->id }}"><button onclick="return confirm('Are you sure?')"><i class="fa fa-trash fa-fw fa-lg"></i></button></a></li>
                                </ul>
                            </td>
                        </tr>
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
                                        <a >
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
                </tbody>
            </table>

        </div>

    </div><!--End contentWrapper__content__squadAdd-->

@stop