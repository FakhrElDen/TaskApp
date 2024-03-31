@extends('website.websiteLayout')  
@section('webContent')
    
    <!--========== Start blog ==========-->
    <section class="blog">
        <div class="container"><!--Start Container-->

            <div class="blog__hero">
                <div class="row"><!--Start row-->
                    
                    <div class="col-md-8 col-xs-12">
                        <a style="color: white;" href="{{env('APP_URL')}}/blogDetails/{{ $lastblog->id }}">
                            <figure class="blog__hero__block__first blog__hero__block">
                                <img src="{{$lastblog->image }}" alt="" loading="lazy">
                                <div class="blog__hero__block__overlay">
                                    <figcaption class="color-white">{{$lastblog->title }}</figcaption>
                                    <p class="color-white">{!! Str::limit($lastblog->body, 100) !!}</p>
                                    <span class="color-white">{{ $lastblog->tag }} / {{ \Carbon\Carbon::parse($lastblog->created_at)->format('d M, Y') }}</span>
                                </div>
                            </figure>
                        </a>
                    </div>
                    
                    <div class="col-md-4 col-xs-12 blog__small__blocks">
                        @foreach($latestblogs as $blog)
                        <a href="{{env('APP_URL')}}/blogDetails/{{ $blog->id }}">
                            <figure class="blog__hero__block blog__hero__block__tab">
                                <img src="{{ $blog->image}}" alt="" loading="lazy">
                                <div class="blog__hero__block__overlay">
                                    <figcaption class="color-white">{{$blog->title }}</figcaption>
                                    <span class="color-white">{{ $blog->tag }}  /  {{ \Carbon\Carbon::parse($blog->created_at)->format('d M, Y')}}</span>
                                </div>
                            </figure>
                        </a>
                        @endforeach
                    </div>

                </div><!--End row-->
            </div>

        </div><!--End Container-->
        
        <h2 class="blog__blocks__main__heading color-red container">What is new here</h2>
        <br>
        <br>
        
        <div style="background: #FBFBFB ;">
            <div class="container"><!--Start Container-->
                <div class="blog__blocks">
                    
                    <div class="row"><!--Start row-->
                        @foreach($blogs as $blog)
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <a href="{{env('APP_URL')}}/blogDetails/{{ $blog->id }}">
                                <figure class="blog__blocks__blog">
                                    <img src="{{ $blog->image }}" alt="blog image" loading="lazy">
                                    <div class="blog__blocks__blog__body">
                                        <figcaption class="color-red">{{ $blog->title }}</figcaption>
                                        <p class="cap-case">{!! Str::limit($blog->body, 150) !!}</p>                     
                                        <span>{{ $blog->tag }} / {{ \Carbon\Carbon::parse($blog->created_at)->format('d M, Y')}}</span>
                                    </div>
                                </figure>
                            </a>
                        </div>
                        @endforeach
                    </div><!--End row-->

                    <!-- <a href="#" class="small__btn upper-case text-center color-white bg-red"> load more </a> -->
                </div>
            </div><!--End Container-->
        </div>

    </section>
    <!--========== End blog ==========-->
@stop