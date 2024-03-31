@extends('website.websiteLayout')  
@section('webContent')
    <!--========== Start internHero ==========-->
    <header class="hero internship" style="background-image: url('imgs/carrers/carrers.png')">
        <div class="container"><!--Start Container-->
            
            <article class="hero__article internship__article">
                <h1 class="hero__article__heading cap-case color-black">internShip</h1>
                <p class="hero__article__p internship__article__p cap-case color-black">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut.
                </p>
            </article>

        </div><!--End Container-->
    </header>
    <!--========== End internHero ==========-->

    <!--========== Start internship__core ==========-->
    <section class="internship__core">
        <div class="container"><!--Start Container-->

            <div class="internship__core__head">
                <h3 class="cap-case internship__core__head__heading">ready for a challenge</h3>
                <p class="internship__core__head__p">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut.</p>
            </div>

            <div class="internship__core__form">
                <form action="">
                    <div class="internship__core__form__inputs">
                        <label class="upper-case">your full name</label>
                        <input type="text" name="">
                    </div>

                    <div class="internship__core__form__inputs">
                        <label class="upper-case">your email</label>
                        <input type="email" name="">
                    </div>
                
                    <div class="internship__core__form__inputs">
                        <label class="upper-case">your phone NO.</label>
                        <input type="text" name="">
                    </div>

                    <div class="internship__core__form__inputs">
                        <label class="upper-case">what is your university?</label>
                        <input type="text" name="">
                    </div>

                    <div class="internship__core__form__inputs">
                        <label class="upper-case">why you want to join sleeker</label>
                        <input type="text" name="">
                    </div>

                    <div class="internship__core__form__inputs">
                        <label class="upper-case">upload image</label>
                        <input type="file" class="ms" name="">
                        <span class="instead__file"></span>
                        <button type="button" class="web_btn_file">
                            <i class="fa fa-paperclip fa-fw"></i>
                        </button>
                    </div>

                    <div class="internship__core__form__ctrls">
                        <button type="button" class="bg-red">
                            <i class="fa fa-times fa-fw"></i>
                            Cancel
                        </button>
                        <button type="submit" class="bg-blue">
                            Send
                            <i class="fa fa-paper-plane fa-fw"></i>
                        </button>
                    </div>
                </form>
            </div>

        </div><!--End Container-->
    </section>
    <!--========== End internship__core ==========-->
@stop