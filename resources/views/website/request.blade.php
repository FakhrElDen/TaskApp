@extends('website.websiteLayout')  
@section('webContent')
    <!--========== Start Request header general ==========-->        
    <section class="bannerRequestG bannerRequestYW bannerRequestTab bg-yellow text-center">
        <h1 class="cap-case color-black">request your website</h1>
        <div class="request__p text-left d-none tab-d-block mob-d-block">
            <p>We care about you and your time so we give a <strong class="color-red font-bold">20%</strong> discount for the online website request, hope you enjoy it</p>
        </div>
    </section>
    <!--========== End Request header general ==========-->        
    
    <!--========== Start Request Container ==========-->        
    <section class="request__container">

        <div class="request__p text-center tab-d-none mob-d-none">
            <p>We care about you and your time so we give a <strong class="color-red">20%</strong> discount for the online website request, hope you enjoy it</p>
        </div>

        <div class="request__form">

       <!-- <div class="request__form__head">
            <h5 class="cap-case">Choose your style</h5>
             <ul class="list-unstyled list-inline btn-11">
                <li class="request__form__head__hover"></li>
                <li class="cap-case bg-blue text-center" data-form=".tailored"><span>Tailored</span></li>
                <li class="cap-case text-center" data-form=".custom"><span>Custom</span></li>
            </ul> 
             <nav class="btn-11">
                <a href="#;" class="bg-blue color-white" data-form=".tailored"> <span>Tailored</span> </a>
                <a href="#;" data-form=".custom"> <span>Custom</span> </a>
            </nav> 
        </div> -->

            <div class="request__form__core">

                <form class="tailored" action="{{env('APP_URL')}}/sendRequest" method="POST">
                    {{ @csrf_field() }}
                    <div class="request__form__input">
                        <label class="cap-case">category</label>
                        <i class="fa fa-chevron-down fa-fw color-gray bg-white"></i>
                        <select name="category">
                            @foreach($catalogues as $catalogue)
                                @foreach($catalogue as $value)
                                    <option value="{{ $value }}" class="cap-case">{{ $value }}</option>
                                @endforeach
                            @endforeach
                        </select>
                    </div>

                    <div class="request__form__input" style="display:none;">
                        <label class="cap-case">website style   </label>
                        <input type="text" value="tailored" name="style" >
                    </div>

                    <div class="request__form__input">
                        <label class="cap-case">full name   </label>
                        <input type="text" name="name" required>
                    </div>
                    <div class="request__form__input">
                        <div class="request__form__input__note">
                            <i class="fa fa-question fa-fw"></i>
                            <p>
                                Swimming hundreds of feet bene ocean’s surface in many parts of feet bene ocean’s surface in many
                            </p>
                        </div>
                        <label class="cap-case">email</label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="request__form__input">
                        <div class="request__form__input__note">
                            <i class="fa fa-question fa-fw"></i>
                            <p>
                                Swimming hundreds of feet bene ocean’s surface in many parts of feet bene ocean’s surface in many
                            </p>
                        </div>
                        <label class="cap-case">phone no.</label>
                        <input type="text" name="phone" required>
                    </div>
                    <div class="request__form__input">
                        <label class="cap-case">your message</label>
                        <textarea name="message"></textarea>
                    </div>

                    <div class="request__form__input has__check">
                        <input type="checkbox" name="" required>
                        <p class="cap-case checkbox__p">
                            Yes, I understand and agree to the <b>Sleeker Terms of Service</b>, including the <b>Privacy Policy</b>
                        </p>
                    </div>

                    <div class="g-recaptcha" data-sitekey="6LcfR9AaAAAAANa0roAhgF4ysBpbRxsqYTmH1LLD"></div>

                    <div class="request__form__ctrls">
                        <button type="submit" class="bg-blue cap-case color-write text-center mainLogining__form__core__btn">
                            send your request
                            <i class="fa fa-paper-plane fa-fw"></i>
                        </button>
                        <!-- <button class="cap-case color-red text-center"> cancel </button> -->
                    </div>
                    
                </form>

                <form class="custom d-none" action="{{env('APP_URL')}}/sendRequest" method="POST">
                    {{ @csrf_field() }}
                    <div class="request__form__input">
                        <label class="cap-case">category</label>
                        <i class="fa fa-chevron-down fa-fw color-gray bg-white"></i>
                        <select>
                            <option value="" class="cap-case">1</option>
                            <option value="" class="cap-case">2</option>
                            <option value="" class="cap-case">3</option>
                        </select>
                    </div>

                    <div class="request__form__input" style="display:none;">
                        <label class="cap-case">website style   </label>
                        <input type="text" value="custom" name="style">
                    </div>

                    <div class="request__form__input">
                        <label class="cap-case">full name</label>
                        <input type="text" name="">
                    </div>
                    <div class="request__form__input">
                        <div class="request__form__input__note">
                            <i class="fa fa-question fa-fw"></i>
                            <p>
                                Swimming hundreds of feet bene ocean’s surface in many parts of feet bene ocean’s surface in many
                            </p>
                        </div>
                        <label class="cap-case">email</label>
                        <input type="email" name="">
                    </div>
                    <div class="request__form__input">
                        <div class="request__form__input__note">
                            <i class="fa fa-question fa-fw"></i>
                            <p>
                                Swimming hundreds of feet bene ocean’s surface in many parts of feet bene ocean’s surface in many
                            </p>
                        </div>
                        <label class="cap-case">phone no.</label>
                        <input type="text" name="">
                    </div>
                    <div class="request__form__input">
                        <label class="cap-case">your message</label>
                        <textarea name=""></textarea>
                    </div>

                    <div class="request__form__input has__check">
                        <input type="checkbox" name="">
                        <p class="cap-case checkbox__p">
                            Yes, I understand and agree to the <b>Sleeker Terms of Service</b>, including the <b>Privacy Policy</b>
                        </p>
                    </div>

                    <div class="request__form__ctrls">
                        <button type="submit" class="bg-blue cap-case color-write text-center mainLogining__form__core__btn">
                            send your request
                            <i class="fa fa-paper-plane fa-fw"></i>
                        </button>
                        <button class="cap-case color-red text-center"> cancel </button>
                    </div>
                </form>

            </div>

            <div class="request__form__tailored"></div>
        
        </div>

    </section>
    <!--========== End Request Container ==========-->        
@stop