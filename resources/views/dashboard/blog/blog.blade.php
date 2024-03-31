@extends('dashboard.dashboardLayout')
@section('header')

    <div class="contentWrapper__right__heading contentWrapper__right__heading__contentBlog">
        <h1 class="color-black cap-case">blog</h1>
    </div>

    <div class="contentWrapper__right__ctrls text-right">
        <ul class="list-unstyled list-inline">
            <li>
                <a href="{{env('APP_URL')}}/listingBlogs" class="cap-case color-blue">blogs</a>
            </li>
            <li>
                <a href="{{env('APP_URL')}}/createBlog" class="cap-case color-black">add blog post</a>
            </li>
            <li>
                <a href="{{env('APP_URL')}}/adminLogout" class="upper-case color-black">log out</a>
            </li>
        </ul>
    </div>

@stop
@section('content')

    <section class="contentWrapper__cover"><!--Start contentWrapper__cover-->

    <div class="moderationProjects__projects__request moderationProjects__projects__request__content">
        
        <div class="moderationProjects__projects__request__item moderationProjects__projects__request__item__contentBlog">
            <table>
                @forelse($blogs as $blog)
                    <thead>
                        <tr>
                            <td>
                                <h5 class="cap-case">theme name</h5>
                                <h4 class="cap-case">{{ $blog->title }}</h4>
                            </td>
                            <td>
                                <h5 class="cap-case">date added</h5>
                                <h4 class="cap-case">{{ $blog->created_at }}</h4>
                            </td>
                            <!-- <td>
                                <h5 class="cap-case">category</h5>
                                <h4 class="cap-case">wedding planner</h4>
                            </td> -->
                            <td>
                                <h5 class="cap-case">for</h5>
                                <h4 class="cap-case">{{ $blog->tag }}</h4>
                            </td>
                            <!-- <td>
                                <h5 class="cap-case">package</h5>
                                <h4 class="cap-case">business</h4>
                            </td> -->
                            <td>
                                <div class="moderationProjects__projects__request__item__ctrls">
                                    <h5 class="cap-case">action</h5>
                                    <a href="{{env('APP_URL')}}/editBlog/{{ $blog->id }}"><button><i class="fa fa-edit fa-fw fa-lg"></i></button></a>
                                    <a href="{{env('APP_URL')}}/deleteBlog/{{ $blog->id }}"><button onclick="return confirm('Are you sure?')"><i class="fa fa-trash fa-fw fa-lg"></i></button></a>
                                </div>
                            </td>
                            <td class="text-right">
                                <button>
                                    <i class="fa fa-angle-double-down fa-fw"></i>
                                </button>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="7">
                                <img style="width: 500px;" src="{{ $blog->image }}" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="7">
                                <p>
                                    {!! $blog->body !!}
                                </p>
                            </td>
                        </tr>
                    </tbody>
                    <!-- Notification  --> 
                    <section id="mainMessage" class="confirm">
                        <div class="confirm__core">
                            <div>
                                <h1 class="cap-case color-black text-center">are you sure</h1>
                                <div class="confirm__core__btns">
                                    <button id="closeAlert" class="bg-red color-white">
                                        <i class="fa fa-times fa-fw"></i>
                                        <span>Cancel</span>
                                    </button>
                                    <a href="{{env('APP_URL')}}/deleteBlog/{{ $blog->id }}">
                                    <button class="bg-green color-white">
                                        <span style="color:white;">Yes</span>
                                        <i class="fa fa-check fa-fw"></i>
                                    </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End of notification -->
                @empty
                    <h2>THERE IS NO DATA YET .. </h2>
                @endforelse
            </table>
        </div>

    </div>

    </section><!--End contentWrapper__cover-->
@stop