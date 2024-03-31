@extends('dashboard.register-login.loginLayout')
@section('form')
    <div class="mainLogining__form__head">
        <h1 class="cap-case text-center">sleeker dashboard</h1>
        <p class="cap-case text-center">
            We Care For Our Daily basses Jobs And Our Customers Needs
        </p>
    </div>

    <form action="{{env('APP_URL')}}/adminLogin" method="POST" class="mainLogining__form__core">
        {{ @csrf_field() }}
        <div class="">
            <label class="cap-case">email</label>
            <p style="color:red"> @error('email') {{$message}} @enderror </p>
            @if($emailMessage)
            <p style="color:red">  {{ $emailMessage }} </p>
            @endif
            <input type="email" name="email" placeholder="example@email.com">
        </div>
        <div class="">
            <label class="cap-case">password</label>
            <p style="color:red"> @error('password') {{$message}} @enderror </p>
            @if($passwordMessage)
            <p style="color:red">  {{ $passwordMessage }} </p>
            @endif
            <input type="password" name="password" placeholder="**********">
            <button class="mainLogining__form__core__eye">
                <i class="fa fa-eye fa-fw"></i>
            </button>
            <a href="{{env('APP_URL')}}/forgetPassword" class="mainLogining__form__core__forgot">forgot password</a>  
        </div>

        <button type="submit" class="bg-blue color-write text-center mainLogining__form__core__btn">
            Sign in
            <img class="mainLogining__form__btn__right" src="imgs/icons/right-w-a.png" alt="right arrow">
        </button>
    </form>
@stop