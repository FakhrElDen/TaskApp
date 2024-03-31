@extends('dashboard.dashboardLayout')
@section('header')

    <div class="contentWrapper__right__heading contentWrapper__right__heading__contentBlog">
        <h1 class="color-black cap-case">blog</h1>
    </div>

    <div class="contentWrapper__right__ctrls text-right">
        <ul class="list-unstyled list-inline">
            <li>
                <a href="{{env('APP_URL')}}/listingBlogs" class="cap-case color-black">blogs</a>
            </li>
            <li>
                <a href="{{env('APP_URL')}}/createBlog" class="cap-case color-blue">add blog post</a>
            </li>
            <li>
                <a href="{{env('APP_URL')}}/adminLogout" class="upper-case color-black">log out</a>
            </li>
        </ul>
    </div>

@stop
@section('content')

    <div class="contentWrapper__cover__blogging">
        <h4 class="cap-case color-blue">Add Blog</h4>
    </div>

    <form enctype="multipart/form-data" action="{{env('APP_URL')}}/storeBlog" method="POST">
        {{ @csrf_field() }}
        <div class="contentWrapper__content__form__div">
        <p style="color:red"> @error('image') {{$message}} @enderror </p>
            <label class="cap-case"> Image </label>
            <div class="contentWrapper__content__form__file">
                <input type="file" name="image" class="content__file" multiple>
                <span class="file__result"></span>
                <button class="file__btn color-white"><i class="fa fa-plus fa-fw"></i></button>
            </div>
        </div>

        <div class="contentWrapper__content__form__div">
        <p style="color:red"> @error('tag') {{$message}} @enderror </p>
            <label class="cap-case"> For </label>
            <input type="text" name="tag" class="form-control">
        </div>

        <div class="contentWrapper__content__form__div">
        <p style="color:red"> @error('title') {{$message}} @enderror </p>
            <label class="cap-case"> Blog title </label>
            <input type="text" name="title" class="form-control">
        </div>
        
        <p style="color:red"> @error('body') {{$message}} @enderror </p>
        <label class="cap-case"> Blog body </label>
        <textarea class="contentWrapper__cover__blogEdit editable" name="body" cols="30" rows="10"></textarea>

        <div class="contentWrapper__content__form__ctrls text-center" style="margin-left: 0">
            <a href="{{ URL::previous() }}">
                <button type="button" class="cap-case color-white bg-red text-left">
                    <span class="pull-left">X</span>
                    <span class="pull-right">Cancel</span>
                </button>
            </a>

            <button class="cap-case color-white bg-blue text-right">
                <span class="pull-right">+</span>
                <span class="pull-left">create</span>
            </button>
        </div> 
    </form>

@stop