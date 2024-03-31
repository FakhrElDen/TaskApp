@extends('website.websiteLayout')  
@section('webContent')

    <!--========== Start Request header general ==========-->        
    <section class="bannerRequestG bannerReqCon bannerRequestTab bg-yellow text-center">
        <h1 class="cap-case color-black">Mission Accomplished</h1>
    </section>
    <!--========== End Request header general ==========-->        
    
    <!--========== Start Request Container ==========-->        
    <section class="request__container requestCon__container">

        <div class="request__p text-center request__acomp__p">
            <p>
                We just sent an email to the address: <strong>{{ $data['email'] }}</strong> Please check your email and enjoy our <strong class="color-red">promo codes</strong> for more discounts.
            </p>
            <hr>
            <span>One of our agent will contact you within the next 72 hours</span>
        </div>

        <div class="request__form request__acomp__form request__acomp__form__con"> 
            <div class="request__form__core">
                <a href="{{env('APP_URL')}}">
                    <button type="submit" class="bg-blue color-write cap-case mainLogining__form__core__btn">
                        go back home
                        <img class="mainLogining__form__btn__right" src="{{env('APP_URL')}}/imgs/icons/right-w-a.png" alt="right arrow" style="right: auto; left: 22px; transform: rotate(180deg)">
                    </button>
                </a>
            </div>
        </div>

    </section>
    <!--========== End Request Container ==========-->        
@stop