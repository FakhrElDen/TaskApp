@extends('dashboard.dashboardLayout')
@section('header')
    <div class="contentWrapper__right__heading">
        <h1 class="color-black cap-case">plans</h1>
    </div>

    <div class="contentWrapper__right__ctrls text-right">
        <ul class="list-unstyled list-inline">
            <li>
                <a href="{{env('APP_URL')}}/listingPlan" class="cap-case color-black">plans</a>
            </li>
            <li>
                <a href="{{env('APP_URL')}}/listingPackage" class="cap-case color-black">packages</a>
            </li>
            <li>
                <a href="{{env('APP_URL')}}/listingBenefit" class="cap-case color-blue">benefits</a>
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

    <div class="contentWrapper__content"><!--Start contentWrapper__content-->
        <div class="contentWrapper__content__form">

            <form action="{{env('APP_URL')}}/storeBenefit" method="POST">
                {{ @csrf_field() }}
                <h4 class="contentWrapper__content__form__div__heading cap-case color-blue">Benefit Name</h4>
                <div class="contentWrapper__content__form__div">
                <p style="color:red"> @error('name') {{$message}} @enderror </p>
                    <label class="cap-case"> Benefit name </label>
                    <input type="text" name="name" id="" class="form-control" placeholder="">
                </div>
                <div class="contentWrapper__content__form__checks">
                    <label>
                        <input type="checkbox" name="demand" id=""> <span>On demand label</span>
                    </label>
                </div>
                <div class="contentWrapper__content__form__ctrls">
                    <!-- <button class="cap-case color-white bg-red text-left">
                        <span class="pull-left">X</span>
                        <span class="pull-right">cancel</span>
                    </button> -->
    
                    <button class="cap-case color-white bg-blue text-right">
                        <span class="pull-right">+</span>
                        <span class="pull-left">Create</span>
                    </button>
                </div>
            </form>


        </div>
    </div><!--End contentWrapper__content-->

    <div class="contentWrapper__content"><!--Start contentWrapper__content-->
        <div class="contentWrapper__content__form">

            <table class="pack__table">
                <tbody>
                    @forelse($benefits as $key=>$benefit)
                        <tr>
                            <td>
                                <span class="color-blue cap-case"> benefit {{ $key+1 }} </span>
                            </td>
                            <td>
                                <span class="color-black cap-case"> {{ $benefit->name }} </span>
                                @if($benefit->demand == "on")
                                    <p>demand</p>
                                @endif
                            </td>
                            <td class="text-right">
                                <a href="{{env('APP_URL')}}/editBenefit/{{$benefit->id}}">
                                    <button class="upper-case color-black">edit</button>
                                </a>
                                <span class="pack__table__separat"></span>
                                <a href="{{env('APP_URL')}}/deleteBenefit/{{$benefit->id}}">
                                    <button class="upper-case color-red" onclick="return confirm('Are you sure?')">delete</button>
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
                                        <a href="{{env('APP_URL')}}/deleteBenefit/{{ $benefit->id }}">
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
    </div><!--End contentWrapper__content-->

@stop