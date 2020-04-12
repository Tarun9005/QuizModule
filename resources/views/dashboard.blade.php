
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
         src="https://assets8.lottiefiles.com/packages/lf20_taDv2I.json"  background="transparent"  speed="1"  style="width: 300px; height: 350px;"  loop controls autoplay >
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

    <h4 class="h4 mb-4">Some basic rules to follow:</h4>

    <p class="font-weight-normal">1-You have to answer all the questions for completing the quiz successfully.</p>
    
    <p class="font-weight-normal">2-Each correct answer carries 10 marks.</p>
      <p class="font-weight-normal">3-After your score is displayed you will see the button to see the requirement needed for claiming the prize.</p>
      <p class="font-weight-normal">4-You can see the dashboard for seeing the position where you stand.All answers has to be typed in small letters even if the answer is numeric.</p>

      <p class="font-weight-normal">5-You must logout after completing the quiz.</p>

      <p class="font-weight-normal">6-You marks are stored only when you complete the entire above process and reach the logout button.</p>

      <p class="font-weight-normal">7-In case of tie decision of the conducting authority will be final.</p>



    <p class="font-weight-normal">by <a><strong>Tarun Shekher</strong></a>, 12/04/2020</p>

    {{-- @if(Auth::check())

    <h2>{{Auth::user()->uname}}</h2>
    @endif  --}}

    <a href="/quiz6" class="btn blue-gradient">Start</a>

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

</div>
<!-- News jumbotron -->

</div>
</main>
<!--Main layout-->
@stop


