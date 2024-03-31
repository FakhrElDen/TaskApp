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
                <a href="{{env('APP_URL')}}/listingPackage" class="cap-case color-blue">packages</a>
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

    <div class="contentWrapper__content"><!--Start contentWrapper__content-->
        <div class="contentWrapper__content__form">

            <form action="{{env('APP_URL')}}/updatePackage/{{ $package->id }}" method="POST">
                {{ @csrf_field() }}
                <h4 class="contentWrapper__content__form__div__heading cap-case color-blue">Package Name</h4>
                <div class="contentWrapper__content__form__div">
                    <p style="color:red"> @error('name') {{$message}} @enderror </p>
                    <label class="cap-case"> Package name </label>
                    <input type="text" value="{{ $package->name }}" name="name" id="" class="form-control">
                </div>
                <div class="contentWrapper__content__form__ctrls">
                    <button class="cap-case color-white bg-red text-left">
                        <span class="pull-left">X</span>
                        <span class="pull-right">cancel</span>
                    </button>
    
                    <button class="cap-case color-white bg-blue text-right">
                        <span class="pull-right">+</span>
                        <span class="pull-left">Update</span>
                    </button>
                </div>
            </form>


        </div>
    </div><!--End contentWrapper__content-->

    <div class="contentWrapper__content"><!--Start contentWrapper__content-->
        <div class="contentWrapper__content__form">

            <table class="pack__table">
                <tbody>
                    @foreach($packages as $key=>$package)
                    <tr>
                        <td>
                            <span class="color-blue cap-case"> package {{ $key+1 }} </span>
                        </td>
                        <td>
                            <span class="color-black cap-case"> {{ $package->name }} </span>
                        </td>
                        <td class="text-right">
                            <a href="{{env('APP_URL')}}/editPackage/{{$package->id}}">
                                <button class="upper-case color-black">edit</button>
                            </a>
                            <span class="pack__table__separat"></span>
                            <button id="bigMessage" class="upper-case color-red">delete</button>
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
                                    <a href="{{env('APP_URL')}}/deletePackage/{{ $package->id }}">
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

                </tbody>
            </table>

        </div>
    </div><!--End contentWrapper__content-->

@stop