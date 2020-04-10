
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

    <p class="font-weight-normal">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque, totam
      rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
    dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.lorem ipsum lets rock barcelona ar ethe winn ers of championms league.I dont gibve a fuck. lets not fucking figt. Fucking everything stinks. This is shitty and filthy life. Fuck this a I am going to rock . everyone is going to win. Its important to not give a fuck to any single thing in life. FIlthy rooms are sign of engineers Batman is a fictional superhero appearing in American comic books published by DC Comics. The character was created by artist Bob Kane and writer Bill Finger, and first appeared in Detective Comics</p>
    <p class="font-weight-normal">by <a><strong>Carine Fox</strong></a>, 19/08/2016</p>

    @if(Auth::check())

    <h2>{{Auth::user()->uname}}</h2>
    @endif 

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


