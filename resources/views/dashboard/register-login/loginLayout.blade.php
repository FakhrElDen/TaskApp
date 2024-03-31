<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sleeker - Admin</title>
        <!--=============== Bootstrap css ===============-->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!--=============== fontAwesome css ===============-->
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- Owl carousel style sheet -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <!-- Owl carousel themes default -->
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        <!--=============== style css ===============-->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet"> 
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
        <link href="//db.onlinewebfonts.com/c/9ab8abd11c40ee5c8d1905f9c9cb9ac8?family=Futura" rel="stylesheet" type="text/css"/>
        <!--=============== bootstrap rtl css ===============-->

        <link rel="icon" href="{{env('App_Media_URL')}}/imgs/logo.png" type="image/gif" sizes="16x16">
    </head> 
    <body>

        <section class="mainLogining">
            <div class="mainLogining__img" style="background-image: url('{{env('App_Media_URL')}}/imgs/intern/bg-header.jpg');"></div>

            <div class="mainLogining__form">
                <div class="mainLogining__form__wrap">

                    @yield('form')
                    
                </div>
            </div>
        </section>

        <!--========== jQuery library ==========-->
        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        <!--========== bootstrap js ==========-->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- Owl Carousel Slider -->
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <!--========== custom js ==========-->
        <script src="{{ asset('js/custom.js') }}"></script>
    </body>
</html>

