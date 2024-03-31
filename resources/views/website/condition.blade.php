@extends('website.websiteLayout')  
@section('webContent')
      <!--========== Start privacy ==========-->
      <section class="privacy">
            <div class="container"><!--Start Container-->

                <h1 class="privacy__mainhead cap-case text-center">
                    Terms & Conditions<hr>
                </h1>
                
                <article class="privacy__article">    
                 {!! $condition->condition !!}
                </article>

            </div><!--End Container-->
        </section>
        <!--========== End privacy ==========-->      
@stop