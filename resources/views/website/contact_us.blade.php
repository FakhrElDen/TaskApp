@extends('website.websiteLayout')  
@section('webContent')
    <!--========== Start Request header general ==========-->        
    <section class="bannerRequestG bannerRequestGMob bannerRequestTab bg-yellow text-center">
        <h1 class="cap-case color-black">Feel Free To Contact</h1>
    </section>
    <!--========== End Request header general ==========-->        

    <!--========== Start Request Container ==========-->        
    <section class="request__container contactus__container contactus__container__tab">

        <div class="request__form joinus__register__form">

            <div class="request__form__core">

                <form action="{{env('APP_URL')}}/sendContactUs" method="POST" class="tailored">
                    {{ @csrf_field() }}
                    <div class="request__form__input">
                        <label class="cap-case">name</label>
                        <input type="text" name="name" required>
                    </div>
                    <div class="request__form__input">
                        <label class="cap-case">email</label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="request__form__input">
                        <label class="cap-case">message</label>
                        <textarea name="message" id="" required></textarea>
                    </div>
                    
                    <div class="g-recaptcha" data-sitekey="6LcJR9AaAAAAAGOXV8e0IcDXat0Dkk9iWIDwYe-3"></div>

                    <div class="form__ctrls__double text-center">
                        <button class="cap-case bg-red color-white text-right">
                            <i class="fa fa-times fa-fw"></i>
                            cancel
                        </button>
                        <button class="cap-case bg-blue color-white text-left">
                            send
                            <i class="fa fa-paper-plane fa-fw"></i>
                        </button>
                    </div>
                </form>

            </div>
        
        </div>

    </section>
    <!--========== End Request Container ==========-->             
@stop