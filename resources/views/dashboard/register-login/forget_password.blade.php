@extends('dashboard.register-login.loginLayout')
@section('form')
    <div class="mainLogining__form__head">
        <h1 class="cap-case text-center">forgot my password</h1>
        <p class="cap-case text-center">
            we will send you a link to your email
        </p>
    </div>

    @if($successMessage)
        <p style="color:green">{{ $successMessage }}</p>
    @endif

    <form class="mainLogining__form__core" action="{{env('APP_URL')}}/adminForgetPassword" method="POST">
        {{ @csrf_field() }}
        <div class="">
            <label class="cap-case">email</label>
            <p style="color:red"> @error('email') {{$message}} @enderror </p>
            @if($emailMessage)
                <p style="color:red">{{ $emailMessage }}</p>
            @endif
            <input type="email" name="email" class="" placeholder="example@email.com">
        </div>
        
        <button type="submit" class="bg-blue color-write mainLogining__form__core__btn">
            send <i class="fa fa-paper-plane fa-fw"></i>
        </button>
    </form>
@stop