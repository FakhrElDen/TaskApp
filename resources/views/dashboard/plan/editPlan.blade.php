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

        <div class="contentWrapper__cover__breads">
            <div>
                <a href="{{env('APP_URL')}}/editPlan/{{ $package->id }}" class="cap-case color-black">{{ $package->name }}</a>
                <span></span>
            </div>

            <div class="contentWrapper__cover__breads__ctrls text-right">
                <!-- <button class="upper-case color-black">edit</button>
                <span class="pack__table__separat"></span> -->
                <!-- <button class="upper-case color-red">delete</button> -->
            </div>
        </div>

        <div class="contentWrapper__contentSquad1"><!--Start contentWrapper__content__squadAdd-->
            
            <div class="contentWrapper__content__benefits1">
                <form action="{{env('APP_URL')}}/storePlan" method="POST">
                    {{ @csrf_field() }}
                    <input type="hidden" name="package_id" value="{{ $package->id }}">
                    <table>
                        <tbody>
                            @forelse($benefits as $key => $benefit)
                                <input type="hidden" name="benefit_id[{{$key}}]" value="{{ $benefit->id }}" require>
                                <tr>
                                    <td>
                                        <h4 class="color-black cap-case">{{ $benefit->name }}</h4>
                                    </td>
                            
                                    <td>
                                        <label>
                                            <p style="color:red"> @error('value') {{$message}} @enderror </p>
                                            <input type="radio" value="tick" name="value[{{$key}}]" id="" require>

                                            <span class="cap-case">tick sign</span>
                                        </label>
                                    </td>
                                
                                    <td>
                                        <label>
                                            <p style="color:red"> @error('value') {{$message}} @enderror </p>
                                            <input type="radio" value="dash" name="value[{{$key}}]" id="" require>
                                            <span class="cap-case">dash sign</span>
                                        </label>
                                    </td>
                                    <td>
                                        <input type="radio" id="chkYes{{$key}}" name="value[{{$key}}]" onclick="EnableDisableTextBox({{$key}})" />
                                        <p style="color:red"> @error('value') {{$message}} @enderror </p>
                                        <input disabled="disabled" id="txtPassportNumber{{$key}}" type="text" name="value[{{$key}}]" id="" class="form-control" placeholder="Details">
                                    </td>
                                </tr>
                            @empty
                                <h2>Add Benefits First.<br>THERE IS NO DATA YET ..</h2>
                            @endforelse
                        </tbody>
                    </table>
                    <hr>
        
                    <div class="contentWrapper__content__form__ctrls">
                        <button class="cap-case color-white bg-red text-left">
                            <span class="pull-left">X</span>
                            <span class="pull-right">cancel</span>
                        </button>
        
                        <button class="cap-case color-white bg-blue text-right">
                            <span class="pull-right">+</span>
                            <span class="pull-left">Create</span>
                        </button>
                    </div>

                </form>
            </div>


        </div><!--End contentWrapper__content__squadAdd-->

    </section><!--End contentWrapper__cover-->
@stop