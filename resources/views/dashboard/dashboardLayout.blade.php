<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>sleeker - dashboard</title>
        <!--=============== Bootstrap css ===============-->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!--=============== fontAwesome css ===============-->
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- Owl carousel style sheet -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <!-- Owl carousel themes default -->
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        <!-- Medium editor css file   -->
        <link href="{{ asset('css/editor-style.css') }}" rel="stylesheet">   

        <!--=============== style css ===============-->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet"> 
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
        <link rel="icon" href="{{env('APP_URL')}}/imgs/sleeker_logo.jpeg" type="image/jpeg" sizes="16x16">

        

    </head>
    <body>

        <!--========== Start contentWrapper ==========-->
        <section class="contentWrapper">
            
            <div class="contentWrapper__menu bg-yellow">
                <div class="contentWrapper__menu__logo">
                    <img src="{{env('APP_URL')}}/imgs/logo.png" alt="logo">
                </div>

                <ul class="list-unstyled">
                    <!-- <li>
                        <a href="http://" class="cap-case"> <i class="fa fa-envelope fa-fw"></i> users </a>
                    </li> -->
                    <li>
                        <a href="{{env('APP_URL')}}/listingSliders" class="cap-case"> <i class="fa fa-envelope fa-fw"></i> sliders </a>
                    </li>
                    <li>
                        <a href="{{env('APP_URL')}}/listingCatalogue" class="cap-case"> <i class="fa fa-envelope fa-fw"></i> catalouge </a>
                    </li>
                    <li>
                        <a href="{{env('APP_URL')}}/listingBlogs" class="cap-case"> <i class="fa fa-envelope fa-fw"></i> blog </a>
                    </li>
                    <li>
                        <a href="{{env('APP_URL')}}/listingFaq" class="upper-case"> <i class="fa fa-envelope fa-fw"></i> faq </a>
                    </li>
                    <li>
                        <a href="{{env('APP_URL')}}/listingPrivacy" class="cap-case"> <i class="fa fa-envelope fa-fw"></i> Privacy & Policies </a>
                    </li>
                    <li>
                        <a href="{{env('APP_URL')}}/listingCondition" class="cap-case"> <i class="fa fa-envelope fa-fw"></i> Terms & Conditions </a>
                    </li>
                    <li>
                        <a href="{{env('APP_URL')}}/listingSquad" class="cap-case"> <i class="fa fa-envelope fa-fw"></i> squad </a>
                    </li>
                    <li>
                        <a href="{{env('APP_URL')}}/listingPlan" class="cap-case"> <i class="fa fa-envelope fa-fw"></i> plans </a>
                    </li>
                    <!-- <li>
                        <a href="{{env('APP_URL')}}/listingRequest" class="cap-case"> <i class="fa fa-envelope fa-fw"></i> Request </a>
                    </li> -->
                </ul>
            </div>

            <div class="contentWrapper__right">

                <div class="contentWrapper__right__head">
                    @yield('header')
                </div>

                <section class="contentWrapper__cover"><!--Start contentWrapper__cover-->
                    @yield('content')
                </section><!--End contentWrapper__cover-->

            </div>

        </section>
        <!--========== End contentWrapper ==========-->

        
        <!--========== javascript function for text input in adding plan ==========-->
        <script type="text/javascript">
            function EnableDisableTextBox($key) {
                var chkYes = document.getElementById("chkYes"+$key);
                var txtPassportNumber = document.getElementById("txtPassportNumber"+$key);
                txtPassportNumber.disabled = chkYes.checked ? false : true;
                if (!txtPassportNumber.disabled) {
                    txtPassportNumber.focus();
                }
            }

            function deleteItem($id){
                console.log($id);
            }
        </script>
 
     
        <!--========== jQuery library ==========-->
        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        <!--========== bootstrap js ==========-->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- Editor JS -->
        <script src="{{ asset('js/editor-js.js') }}"></script>

        <!--========== custom js ==========-->
        <script src="{{ asset('js/custom.js') }}"></script>

    </body>
</html>