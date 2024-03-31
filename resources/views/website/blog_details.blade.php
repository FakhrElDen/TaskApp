@extends('website.websiteLayout')  
@section('webContent')
    
    <!--========== Start blogDetails ==========-->
    <section class="blogDetails">
        <div class="container"><!--Start Container-->

            <figure class="blogDetails__hero">
                <img src="{{ $blog->image }}" alt="" loading="lazy" class="blogDetails__hero__img">
                <figcaption class="blogDetails__hero__info">
                    <ul class="list-unstyled list-inline">
                        <li><span class="upper-case">{{ \Carbon\Carbon::parse($blog->created_at)->format('d M, Y')}}</span></li>
                        <li>
                            <span> <i class="fa fa-eye fa-fw"></i></span>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/Sleeker.co/"><i class="fa fa-facebook fa-fw"></i></a>
                            <a href="https://instagram.com/sleeker.co?utm_medium=copy_link"><i class="fa fa-instagram fa-fw"></i></a>
                            <a href="https://www.linkedin.com/company/sleeker"><i class="fa fa-linkedin fa-fw"></i></a>
                            <a href="#"><i class="fa fa-youtube-play fa-fw"></i></a>
                        </li>
                        <li><span class="cap-case">{{ $blog->tag }}</span></li>
                    </ul>
                </figcaption>
            </figure>

            <div class="blogDetails__core">
                <div class="row"><!--Start row-->
                    
                    <div class="col-md-9 col-xs-12">
                        <div class="blogDetails__core__left">
                            <h3 class="blogDetails__core__left_heading color-black ">{{ $blog->title }}</h3>
                            <p>
                                {!! $blog->body !!}
                            </p>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-12">
                        <div class="blogDetails__core__right">
                            <h4 class="blogDetails__core__right__heading upper-case color-black">RELATED ARTICLES</h4>
                            @foreach($relatedBlogs as $blog)
                            <div class="blogDetails__core__right__block">
                                <a style="color: black;" href="{{env('APP_URL')}}/blogDetails/{{ $blog->id }}">
                                    <img src="{{ $blog->image }}" alt="" loading="lazy">
                                    <div class="blogDetails__core__right__block__body">
                                        <h3 class="blogDetails__core__right__block__body__heading">{{ $blog->title }}</h3>
                                        <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y')}}</span>
                                        <p>{{ $blog->tag }}</p>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div><!--End row-->
            </div>
        
        </div><!--End Container-->
    </section>
    <!--========== End blogDetails ==========-->
@stop