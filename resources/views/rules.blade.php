
@extends('master')

@section('content')
 <!--Main layout-->
 <main class="pt-5 mx-lg-5">
  <div class="container-fluid mt-5">

   <!-- News jumbotron -->
   <div class="jumbotron text-center hoverable p-4">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 offset-md-1 mx-3 my-3">

        <!-- Featured image -->
        <div class="view overlay">
         <lottie-player
    src="https://assets5.lottiefiles.com/packages/lf20_hAAjiz.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay >
</lottie-player>
       <a>
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-md-7 text-md-left ml-3 mt-3">

    <!-- Excerpt -->
    <a href="#!" class="blue-text">
      <h3 class="h3 pb-1"><i class="fas fa-book-open pr-1"></i> Rules</h3>
    </a>

    <h4 class="h4 mb-4">Rules for claiming the prize:</h4>

    <p class="font-weight-normal">1-The information provided during the registration process has to be correct and accurate.</p>
    
    <p class="font-weight-normal">2-The student attaining the maximum marks will be awarded with the prize.</p>
      <p class="font-weight-normal">3-The prize distributed will be in form of goodies or coupons and it cannot be coverted into cash equivalent.</p>
      <p class="font-weight-normal">4-Only students of any college are allowed to participate and not anyone from school or any other working organization.</p>

      <p class="font-weight-normal">5-You cannot play the quiz twice by using other email id or by any other way.If found you will be automatically disqualified.</p>

      <p class="font-weight-normal">6-At last the decision of the conducting authority will be final.</p>

      



   {{--  <p class="font-weight-normal">by <a><strong>Tarun Shekher</strong></a>, 12/04/2020</p>
 --}}
    {{-- @if(Auth::check())

    <h2>{{Auth::user()->uname}}</h2>
    @endif  --}}

    <a href="/table" class="btn blue-gradient">View Rankings</a>

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

</div>
<!-- News jumbotron -->

</div>
</main>
<!--Main layout-->

  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>


@stop





