
@extends('master')

@section('content')
<!--Main layout-->
<main class="pt-5 mx-lg-5">
  <div class="container-fluid mt-5">


    <!-- Grid row -->


    <!-- Grid column -->
      {{-- <div class="col-md-12 text-md-left ml-3 mt-3">
       --}}
       <!-- Excerpt -->

       

       <div class="row" style="font-family: 'Lato', sans-serif;">
        <div class="col-8">
         <h4 class="h4 mb-4">Question No-9</h4>
       </div>
       <div class="col-4">
        <p id="demo" style="font-size: 30px;color: blue;"></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-md-left ml-3 mt-4">


        <h5 class="font-weight-normal mt-4" style="font-family: 'Lato', sans-serif;">Can you identify me? I am at the beginning and front of you. I am running in LOOP.</h5>
        
        <form class="mt-3" action="#!">


          <!-- Email -->
          <input type="email" id="defaultLoginFormEmail" class="form-control" style="max-width: 20%;" placeholder="Answer">
        </form>

       {{--  <button class="btn blue-gradient mt-4">Blue</button>
        <button class="btn blue-gradient mt-4">Blue</button>
        <button class="btn blue-gradient mt-4">Blue</button>
        --}}
        


     
    <!-- Grid column -->

  </div>
  <!-- Grid row -->


</div>
</main>
<!--Main layout-->
<script>
// Set the date we're counting down to
var countDownDate = new Date("Feb 21, 2020 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
@stop


