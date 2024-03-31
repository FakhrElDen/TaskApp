@extends('dashboard.dashboardLayout')
@section('header')

    <div class="contentWrapper__right__heading">
        <h1 class="color-black cap-case">Catalogue Images</h1>
    </div>

    <div class="contentWrapper__right__ctrls text-right">
        <ul class="list-unstyled list-inline">
            <li>
                <a href="{{env('APP_URL')}}/listingCatalogue" class="cap-case color-black">Catalogue</a>
            </li>
            <li>
                <a href="{{env('APP_URL')}}/createCatalogue" class="cap-case color-blue">Upload Catalogue</a>
            </li>
            <li>
                <a href="{{env('APP_URL')}}/adminLogout" class="upper-case color-black">log out</a>
            </li>
        </ul>
    </div>

@stop
@section('content')

    <section class="contentWrapper__cover"><!--Start contentWrapper__cover-->

        <div class="contentWrapper__content"><!--Start contentWrapper__content-->
            <div class="contentWrapper__content__form">

                <form enctype="multipart/form-data" action="{{env('APP_URL')}}/storeCatalogue" method="POST">
                    {{ @csrf_field() }}

                    <div class="contentWrapper__content__form__div">
                        <p style="color:red"> @error('name') {{$message}} @enderror </p>
                        <h4 class="contentWrapper__content__form__div__heading cap-case color-blue">Theme Name</h4>
                        <label class="cap-case"> Theme Name </label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="contentWrapper__content__form__div">
                        <p style="color:red"> @error('label') {{$message}} @enderror </p>
                        <h4 class="contentWrapper__content__form__div__heading cap-case color-blue">Theme Label</h4>
                        <label class="cap-case"> Label </label>
                        <input type="text" name="label" class="form-control">
                    </div>

                    <div class="contentWrapper__content__form__div">
                        <p style="color:red"> @error('description') {{$message}} @enderror </p>
                        <h4 class="contentWrapper__content__form__div__heading cap-case color-blue">Theme Culture</h4>
                        <label class="cap-case"> Description </label>
                        <input type="text" name="description" class="form-control">
                    </div>

                    
                    <div class="contentWrapper__content__form__div">
                        <p style="color:red"> @error('language') {{$message}} @enderror </p>
                        <h4 class="contentWrapper__content__form__div__heading cap-case color-blue">Theme Language</h4>
                        <label class="cap-case"> Language </label>
                        <input type="text" name="language" class="form-control">
                    </div>

                    <div class="contentWrapper__content__form__div">
                        <p style="color:red"> @error('catalogue_link') {{$message}} @enderror </p>
                        <h4 class="contentWrapper__content__form__div__heading cap-case color-blue">Theme Link</h4>
                        <label class="cap-case"> Link </label>
                        <input type="text" name="catalogue_link" class="form-control">
                    </div>

                    <div class="contentWrapper__content__form__div">
                        <p style="color:red"> @error('for') {{$message}} @enderror </p>
                        <h4 class="contentWrapper__content__form__div__heading cap-case color-blue">for</h4>
                        <label class="cap-case"> Category </label>
                        <input type="text" name="for" class="form-control">
                    </div>

                    <div class="contentWrapper__content__form__div">
                        <p style="color:red"> @error('color') {{$message}} @enderror </p>
                        <h4 class="contentWrapper__content__form__div__heading cap-case color-blue">color</h4>
                        <label class="cap-case"> Color HEX </label>
                        <div class="contentWrapper__content__form__file">
                            <input type="text" name="color" class="form-control">
                        </div>
                    </div>

                    <div class="contentWrapper__content__form__div">
                        <p style="color:red"> @error('discount') {{$message}} @enderror </p>
                        <h4 class="contentWrapper__content__form__div__heading cap-case color-blue">Theme Discount</h4>
                        <label class="cap-case"> Discount </label>
                        <input type="number" name="discount" class="form-control">
                    </div>

                    <div class="contentWrapper__content__form__div">
                        <p style="color:red"> @error('responsive_switch') {{$message}} @enderror </p>
                        <h4 class="contentWrapper__content__form__div__heading cap-case color-blue">Theme Responsive</h4>
                        <label class="cap-case"> Responsive </label>
                        <input type="checkbox" name="responsive_switch" class="form-control">
                    </div>

                    
                    <div class="contentWrapper__content__form__div">
                        <p style="color:red"> @error('package_id') {{$message}} @enderror </p>
                        <h4 class="contentWrapper__content__form__div__heading cap-case color-blue">Theme Package</h4>
                        <label class="cap-case"> Package </label>
                        <select name="package_id">
                            @forelse($packages as $package)
                                <option value="{{ $package->id }}">{{ $package->name }}</option>
                                <!-- <option value="business">Business</option>
                                <option value="personal">Personal</option> -->
                            @empty
                                <option value="">No Packages to Show</option>
                            @endforelse
                        </select>
                    </div>

                    <div class="contentWrapper__content__form__div">
                        <p style="color:red"> @error('desktop_image') {{$message}} @enderror </p>
                        <h4 class="contentWrapper__content__form__div__heading cap-case color-blue">Desktop Catalogue- 1920px</h4>
                        <label class="cap-case"> Choose Image </label>
                        <div class="contentWrapper__content__form__file">
                            <input type="file" name="desktop_image" class="content__file" multiple>
                            <span class="file__result"></span>
                            <button class="file__btn color-white"><i class="fa fa-plus fa-fw"></i></button>
                        </div>
                    </div>

                    <div class="contentWrapper__content__form__div">
                        <p style="color:red"> @error('tablet_image') {{$message}} @enderror </p>
                        <h4 class="contentWrapper__content__form__div__heading cap-case color-blue">tablet Catalogue- 1024px</h4>
                        <label class="cap-case"> Choose Image </label>
                        <div class="contentWrapper__content__form__file">
                            <input type="file" name="tablet_image" class="content__file" multiple>
                            <span class="file__result"></span>
                            <button class="file__btn color-white"><i class="fa fa-plus fa-fw"></i></button>
                        </div>
                    </div>

                    <div class="contentWrapper__content__form__div">
                        <p style="color:red"> @error('mobile_image') {{$message}} @enderror </p>
                        <h4 class="contentWrapper__content__form__div__heading cap-case color-blue">mobile Catalogue- 1024px</h4>
                        <label class="cap-case"> Choose Image </label>
                        <div class="contentWrapper__content__form__file">
                            <input type="file" name="mobile_image" class="content__file" multiple>
                            <span class="file__result"></span>
                            <button class="file__btn color-white"><i class="fa fa-plus fa-fw"></i></button>
                        </div>
                    </div>

                    <br>
                    <br>
                    <br>

                    <div class="contentWrapper__content__form__ctrls text-right">
                        <a href="{{ URL::previous() }}">
                            <button type="button" class="cap-case color-white bg-red text-left">
                                <span class="pull-left">X</span>
                                <span class="pull-right">cancel</span>
                            </button>
                        </a>

                        <button class="cap-case color-white bg-blue text-right">
                            <span class="pull-right">+</span>
                            <span class="pull-left">create</span>
                        </button>
                    </div>
                </form>

            </div>
            
        </div><!--End contentWrapper__content-->

    </section><!--End contentWrapper__cover-->
@stop