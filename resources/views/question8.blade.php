
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
         <h4 class="h4 mb-4">Question No-8</h4>
       </div>
       <div class="col-4">
        <p id="demo" style="font-size: 30px;color: blue;"></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-md-left ml-3 mt-3">
        <h5 class="h5 mb-4" style="font-family: 'Lato', sans-serif;">Count the number of forward biased diodes in the figure?</h5>


      </div>
      <div class="row" id="des">
        <div class="col-md-4 text-md-left ml-3 mt-3">
          <a class="logo-wrapper waves-effect">
            <img src="{{ asset('img/diode.jpg') }}" style="max-width: 100%; max-height: 100%;" class="img-fluid" alt="">
          </a>
        </div>
      </div>

     
    </div>
    <!-- Grid row -->

       <form class="mt-3" action="#!">


         
          <input type="email" id="defaultLoginFormEmail" class="form-control" style="max-width: 20%;" placeholder="Answer">
        </form>
 <!-- Grid column -->
      <button type="button" class="btn blue-gradient mt-4">
        Next
      </button>


  </div>
</main>
<!--Main layout-->
<script>
// Set the date we're counting down to
var countDownDate = new Date("Feb 27, 2020 15:37:25").getTime();

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
<script type="text/javascript">
   
    setTimeout(function() {
  $("#des").fadeOut().empty();
}, 3000);

</script>
@stop


