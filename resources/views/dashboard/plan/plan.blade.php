@extends('dashboard.dashboardLayout')
@section('header')
    <div class="contentWrapper__right__heading">
        <h1 class="color-black cap-case">plans</h1>
    </div>

    <div class="contentWrapper__right__ctrls text-right">
        <ul class="list-unstyled list-inline">
            <li>
                <a href="{{env('APP_URL')}}/listingPlan" class="cap-case color-blue">plans</a>
            </li>
            <li>
                <a href="{{env('APP_URL')}}/listingPackage" class="cap-case color-black">packages</a>
            </li>
            <li>
                <a href="{{env('APP_URL')}}/listingBenefit" class="cap-case color-black">benefits</a>
            </li>
            <!-- <li>
                <a href="#" class="cap-case color-black">add plan</a>
            </li> -->
            <li>
                <a href="{{env('APP_URL')}}/adminLogout" class="upper-case color-black">log out</a>
            </li>
        </ul>
    </div>
@stop
@section('content')
    <section class="contentWrapper__cover"><!--Start contentWrapper__cover-->

    <div class="contentWrapper__content"><!--Start contentWrapper__content-->
        <div class="contentWrapper__content__form">

            <table class="pack__table">
                <tbody>
                    @forelse($packages as $key=>$package)
                        <tr>
                            <td>
                                <span class="color-blue cap-case"> plan {{ $key+1 }} </span>
                            </td>
                            <td>
                                <span class="color-black cap-case"> {{ $package->name }} </span>
                            </td>
                            <td class="text-right">
                                <a href="{{env('APP_URL')}}/editPlan/{{$package->id}}">
                                    <button class="upper-case color-black">edit</button>
                                </a>
                                <span class="pack__table__separat"></span>
                                <a href="{{env('APP_URL')}}/deletePlan/{{ $package->id }}">
                                    <button onclick="return confirm('Are you sure?')" class="upper-case color-red">delete</button>
                                </a>
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
                                        <a href="{{env('APP_URL')}}/deletePlan/{{ $package->id }}">
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
                        <h2>Add Packages First.<br>THERE IS NO DATA YET ..</h2>
                    @endforelse

                </tbody>
            </table>

        </div>
    </div><!--End contentWrapper__content-->

    </section><!--End contentWrapper__cover-->
@stop