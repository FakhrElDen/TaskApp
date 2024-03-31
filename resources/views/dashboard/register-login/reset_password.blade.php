@extends('dashboard.register-login.loginLayout')
@section('form')
   <div class="mainLogining__form__head">
        <h1 class="cap-case text-center">Reset Your Password</h1>
        <p class="cap-case text-center">
            please fill the password forum
        </p>
    </div>

    <form  action="{{env('APP_URL')}}/adminResetPassword" method="POST" class="mainLogining__form__core">
        {{ @csrf_field() }}
        <div class="">
        <input type="hidden" name="id" value="{{$userId}}">
            <label class="cap-case">new password</label>
            <p style="color:red"> @error('password') {{$message}} @enderror </p>
            <input type="password" name="password" placeholder="**********">
            <button class="mainLogining__form__core__eye">
                <i class="fa fa-eye fa-fw"></i>
            </button>
        </div>
        <div class="">
            <label class="cap-case">confirm password</label>
            <p style="color:red"> @error('confirm_password') {{$message}} @enderror </p>
            <input type="password" name="confirm_password" placeholder="**********">
            <button class="mainLogining__form__core__eye">
                <i class="fa fa-eye fa-fw"></i>
            </button>
        </div>

        <button type="submit" class="bg-blue color-write mainLogining__form__core__btn">
            Create
            <img class="mainLogining__form__btn__right" src="{{env('App_Media_URL')}}/imgs/icons/right-w-a.png" alt="right arrow">
        </button>
    </form>
@stop