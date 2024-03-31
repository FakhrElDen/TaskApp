<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>sleeker</title>
        <!--=============== Bootstrap css ===============-->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!--=============== fontAwesome css ===============-->
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- Medium editor css file   -->
        <link href="{{ asset('css/editor-style.css') }}" rel="stylesheet"> 
        <!-- Owl carousel style sheet -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <!-- Owl carousel themes default -->
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        
        <!-- google recaptcha -->
        <script src="https://www.google.com/recaptcha/api.js"></script>
        
        <!-- tidio live chat support -->
        <script src="//code.tidio.co/acj0sc1hfiuruqnzccrboygu6eefzmrz.js" async></script>

        <link rel="stylesheet" href="{{  URL::asset('css/slick-carousel.css') }}">
        <!-- Owl carousel themes default -->
        <link rel="stylesheet" href="{{ URL::asset('css/slick-theme.css') }}">     

        <!--=============== style css ===============-->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet"> 
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
        <link rel="icon" href="{{env('App_Media_URL')}}/imgs/sleeker_logo.jpeg" type="image/jpeg" sizes="16x16">
    </head>
    <body>
        <!--========== Start nav ==========-->
        <div class="generalNav__mob lg-d-none lab-d-none">
            <div class="generalNav__mob__logo">
                <a href="{{env('APP_URL')}}">
                    <img src="{{env('App_Media_URL')}}/imgs/sm_logo.png" alt="logo">           
                </a>   
            </div>
            <div id="navBtnOpen" class="generalNav__mob__btn">
                <button>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>

        <nav class="generalNav">
            
            <div class="container">
                
                <ul class="generalNav__left list-unstyled list-inline ">
                    <li>
                        <a href="{{env('APP_URL')}}" class="upper-case color-white bg-black text-center d-block">
                            <img src="{{env('APP_URL')}}/imgs/logo.png" alt="logo">           
                        </a>
                    </li>
                    <li><a href="{{env('APP_URL')}}/about" class="upper-case color-black"> about </a></li>
                    <li><a href="{{env('APP_URL')}}/catalogue" class="upper-case color-black"> catalouge </a></li>
                    <li><a href="{{env('APP_URL')}}/plan" class="upper-case color-black"> plans </a></li>
                    <li class='hidden visible-sm visible-xs'><a href="{{env('APP_URL')}}/request" class="upper-case color-pink request--link"> Request </a></li>
                </ul>

                <ul class="generalNav__right list-unstyled list-inline text-right">
                    <li class="hidden-sm hidden-xs"><a href="{{env('APP_URL')}}/request" class="upper-case color-black text-center"> request </a></li>
                    
                    <li><a href="{{env('APP_URL')}}/workingOn" class="cap-case color-black"> login </a></li>
                </ul>
                
            </div>
        </nav>
        <!--========== End nav ==========-->
       
        <!--========== start content ==========-->
        @yield('webContent')
        <!--========== End content ==========-->
        
        <!--========== Start footer ==========-->
        <footer class="generalFooter">
            
            <div class="generalFooter__top bg-yellow">
                <div class="container"><!--Start Container-->
                    <p class="generalFooter__top__p upper-case color-blue">for you by <span class="color-black">sleeker</span></p>
                </div><!--End Container-->
            </div>

            <div class="generalFooter__bottom bg-white">
                <div class="container"><!--Start Container-->
                    <div class="row"><!--Start row-->

                        <div class="col-md-2 col-sm-4 col-xs-12">
                            <div class="generalFooter__bottom__block">
                                <h4 class="cap-case color-black">
                                    product
                                    <i class="fa fa-chevron-down fa-fw"></i>
                                </h4>
                                <ul class="list-unstyled">
                                    <li><a href="{{env('APP_URL')}}/catalogue" class="cap-case"> catalouge </a></li>
                                    <li><a href="{{env('APP_URL')}}/workingOn" class="cap-case"> explore </a></li>
                                    <li><a href="{{env('APP_URL')}}/workingOn" class="cap-case"> feature </a></li>
                                    <li><a href="{{env('APP_URL')}}/workingOn" class="cap-case"> website builder </a></li>
                                    <li><a href="{{env('APP_URL')}}/catalogue" class="cap-case"> my sites </a></li>
                                    <li><a href="{{env('APP_URL')}}/plan" class="cap-case"> premium plans </a></li>
                                    <li><a href="{{env('APP_URL')}}/workingOn" class="cap-case"> sleeker <span class="upper-case">seo</span> </a></li>
                                    <li><a href="{{env('APP_URL')}}/workingOn" class="cap-case"> logo maker </a></li>
                                    <li><a href="{{env('APP_URL')}}/blog" class="cap-case"> start a blog </a></li>
                                    <li><a href="{{env('APP_URL')}}/catalogue" class="cap-case"> online store </a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-2 col-sm-4 col-xs-12">
                            <div class="generalFooter__bottom__block">
                                <h4 class="cap-case color-black">
                                    apperance
                                    <i class="fa fa-chevron-down fa-fw"></i>
                                </h4>
                                <ul class="list-unstyled">
                                    <li><a href="{{env('APP_URL')}}/blog" class="cap-case"> sleeker blog </a></li>
                                    <li><a href="https://www.facebook.com/Sleeker.co/" class="cap-case"> facebook </a></li>
                                    <li><a href="#" class="cap-case"> twitter </a></li>
                                    <li><a href="#" class="cap-case"> pintrest </a></li>
                                    <li><a href="#" class="cap-case"> youtube </a></li>
                                    <li><a href="https://www.linkedin.com/company/sleeker" class="cap-case"> linkedin </a></li>
                                    <li><a href="https://instagram.com/sleeker.co?utm_medium=copy_link" class="cap-case"> instagram </a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-2 col-sm-4 col-xs-12 lg-d-block lab-d-none">
                            <div class="generalFooter__bottom__block">
                                <h4 class="cap-case color-black">
                                    circles
                                    <i class="fa fa-chevron-down fa-fw"></i>
                                </h4>
                                <ul class="list-unstyled">
                                    <li><a href="{{env('APP_URL')}}/workingOn" class="cap-case"> interns </a></li>
                                    <li><a href="{{env('APP_URL')}}/workingOn" class="cap-case"> educational </a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-2 col-sm-4 col-xs-12">
                            <div class="generalFooter__bottom__block">
                                <h4 class="cap-case color-black">
                                    the company
                                    <i class="fa fa-chevron-down fa-fw"></i>
                                </h4>
                                <ul class="list-unstyled">
                                    <li><a href="{{env('APP_URL')}}/about" class="cap-case"> about sleeker </a></li>
                                    <li><a href="{{env('APP_URL')}}/squad" class="cap-case"> Squad </a></li>
                                    <li><a href="{{env('APP_URL')}}/workingOn" class="cap-case"> sleeker jobs </a></li>
                                    <li><a href="{{env('APP_URL')}}/workingOn" class="cap-case"> design assets </a></li>
                                    <li><a href="{{env('APP_URL')}}/condition" class="cap-case"> terms of use </a></li>
                                    <li><a href="{{env('APP_URL')}}/privacy" class="cap-case"> privacy policy </a></li>
                                    <li><a href="{{env('APP_URL')}}/workingOn" class="cap-case"> updates & releases </a></li>
                                    <li><a href="{{env('APP_URL')}}/contactUs" class="cap-case"> contact us </a></li>
                                    <li><a href="{{env('APP_URL')}}/workingOn" class="cap-case"> sitemap </a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-2 col-sm-4 col-xs-12">
                            <div class="generalFooter__bottom__block">
                                <h4 class="cap-case color-black">
                                    support
                                    <i class="fa fa-chevron-down fa-fw"></i>
                                </h4>
                                <ul class="list-unstyled">
                                    <li><a href="{{env('APP_URL')}}/workingOn" class="cap-case"> support </a></li>
                                         <li><a href="{{env('APP_URL')}}/howItWorks" class="cap-case"> how it works </a></li>
                                    <li><a href="{{env('APP_URL')}}/contactUs" class="cap-case"> contact us </a></li>
                                    <li><a href="{{env('APP_URL')}}/faq" class="upper-case"> faq </a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-2 col-sm-4 col-xs-12 hidden-sm hidden-xs">
                            <div class="generalFooter__bottom__block">
                                <h4 class="generalFooter__bottom__block__logo upper-case text-center color-white bg-black">
                                    <img src="{{env('APP_URL')}}/imgs/logo.png" alt="">
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea erat, sed diam voluptua.
                                </p>
                                <ul class="list-unstyled list-inline">
                                    <li><a href="https://www.facebook.com/Sleeker.co/"> <i class="fa fa-facebook fa-fw"></i> </a></li>
                                    <li><a href="#"> <i class="fa fa-twitter fa-fw"></i> </a></li>
                                    <li><a href="https://instagram.com/sleeker.co?utm_medium=copy_link"> <i class="fa fa-instagram fa-fw"></i> </a></li>
                                    <li><a href="#"> <i class="fa fa-youtube fa-fw"></i> </a></li>
                                    <li><a href="https://www.linkedin.com/company/sleeker"> <i class="fa fa-linkedin fa-fw"></i> </a></li>
                                    <li><a href="https://www.behance.net/sleekerco"> <i class="fa fa-behance fa-fw"></i> </a></li>
                                    <li><a href="#"> <i class="fa fa-dribbble fa-fw"></i> </a></li>
                                </ul>
                            </div>
                        </div>

                    </div><!--End row-->
                </div><!--End Container-->
            </div>

        </footer>
        <!--========== End footer ==========-->

        <!--========== Start copyrights ==========-->
        <section class="copyrights text-center ">
            <p>SLEEKER ©  {{ now()->year }}</p>
        </section>
        <!--========== End copyrights ==========-->
     
        <!--========== jQuery library ==========-->
        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        <!--========== bootstrap js ==========-->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- Editor JS -->
        <script src="{{ asset('js/editor-js.js') }}"></script>

        <script src="{{ asset('js/slick-js.js') }}"></script>
        
        <!--========== custom js ==========-->
        <script src="{{ asset('js/custom.js') }}"></script>

    </body>
</html>