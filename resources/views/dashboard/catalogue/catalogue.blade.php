@extends('dashboard.dashboardLayout')
@section('header')

    <div class="contentWrapper__right__heading">
        <h1 class="color-black cap-case">Catalogue</h1>
    </div>

    <div class="contentWrapper__right__ctrls text-right">
        <ul class="list-unstyled list-inline">
            <li>
                <a href="{{env('APP_URL')}}/listingCatalogue" class="cap-case color-blue">catalogue</a>
            </li>
            <li>
                <a href="{{env('APP_URL')}}/createCatalogue" class="cap-case color-black">upload catalogue</a>
            </li>
            <li>
                <a href="{{env('APP_URL')}}/adminLogout" class="upper-case color-black">log out</a>
            </li>
        </ul>
    </div>

@stop
@section('content')

    <div class="moderationProjects__projects__request moderationProjects__projects__request__content">
        @forelse($catalogues as $catalogue)         
            <div class="moderationProjects__projects__request__item">
                <table>
                    <thead>
                        <tr>
                            <td>
                                <h5 class="cap-case">theme name</h5>
                                <h4 class="cap-case">{{ $catalogue-> name }}</h4>
                            </td>
                            <td>
                                <h5 class="cap-case">theme label</h5>
                                <h4 class="cap-case">{{ $catalogue-> label }}</h4>
                            </td>
                            <td>
                                <h5 class="cap-case">theme description</h5>
                                <h4 class="cap-case">{!! Str::limit($catalogue->description, 50) !!}</h4>
                            </td>
                            <td>
                                <h5 class="cap-case">theme language</h5>
                                <h4 class="cap-case">{{ $catalogue-> language }}</h4>
                            </td>
                            <td>
                                <h5 class="cap-case">theme color</h5>
                                <h4 class="cap-case">{!! $catalogue-> color !!}</h4>
                            </td>
                            <td>
                                <h5 class="cap-case">for</h5>
                                <h4 class="cap-case">{{ $catalogue-> for }}</h4>
                            </td>
                            <td>
                                <h5 class="cap-case">discount</h5>
                                <h4 class="cap-case">{{ $catalogue-> discount }}</h4>
                            </td>
                            <td>
                                <h5 class="cap-case">Responsive</h5>
                                <h4 class="cap-case">{{ $catalogue-> responsive_switch }}</h4>
                            </td>
                            <td>
                                <h5 class="cap-case">date added</h5>
                                <h4 class="cap-case">{{ \Carbon\Carbon::parse($catalogue->created_at)->format('d M, Y') }}</h4>
                            </td>
                            <td>
                                <h5 class="cap-case">package</h5>
                                <h4 class="cap-case">{{ $catalogue->package->name }}</h4>
                            </td>
                            <td>
                                <div class="moderationProjects__projects__request__item__ctrls">
                                    <h5 class="cap-case">action</h5>
                                    <a href="{{env('APP_URL')}}/editCatalogue/{{ $catalogue->id }}">
                                        <button><i class="fa fa-edit fa-fw fa-lg"></i></button>
                                    </a>
                                    <a href="{{env('APP_URL')}}/deleteCatalogue/{{ $catalogue->id }}">
                                        <button onclick="return confirm('Are you sure?')"><i class="fa fa-trash fa-fw fa-lg"></i></button>
                                    </a>
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
                        <tr class="moderationProjects__projects__request__content__imgs">
                            <td>
                                <img src="{{ $catalogue->desktop_image }}" alt="">
                            </td>
                            <td>
                                <img src="{{ $catalogue->tablet_image }}" alt="">
                            </td>
                            <td>
                                <img src="{{ $catalogue->mobile_image }}" alt="">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
                            <a href="{{env('APP_URL')}}/deleteCatalogue/{{ $catalogue->id }}">
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
    </div>

@stop