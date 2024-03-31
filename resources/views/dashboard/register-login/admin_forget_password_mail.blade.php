    
    
    <!--========== Start Request Container ==========-->        
    <section class="request__container requestCon__container">

        <div class="request__p text-center request__acomp__p">
            <p>
                Hello: <strong>{{ $data['name'] }}</strong>
            </p>
            <p>
                We just sent an email to the address: <strong>{{ $data['email'] }}</strong>
            </p>
            <hr>
            <span>press reset password to set a new password</span>
        </div>

        <div class="request__form request__acomp__form request__acomp__form__con"> 
            <div class="request__form__core">
                <a href="{{env('APP_URL')}}/resetPassword/{{ $data['id'] }}">
                    <button type="submit" class="bg-blue color-write cap-case mainLogining__form__core__btn">
                        reset password
                    </button>
                </a>
            </div>
        </div>

    </section>
    <!--========== End Request Container ==========-->        
