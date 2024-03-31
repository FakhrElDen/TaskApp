@extends('website.websiteLayout')  
@section('webContent')
    <!--========== Start privacy ==========-->
    <section class="privacy">
        <div class="container"><!--Start Container-->

            <h1 class="privacy__mainhead cap-case text-center">
                privacy & policies
                <hr>
            </h1>
            
            <article class="privacy__article">    
                {!! $privacy->privacy !!}
            </article>

        </div><!--End Container-->
    </section>
    <!--========== End privacy ==========-->      
@stop