
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
         <h4 class="h4 mb-4">Question No-1</h4>
       </div>
       <div class="col-4">
        <p id="countdown" style="font-size: 30px;color: blue;">120 seconds</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-md-left ml-3 mt-4">


        <h4 class="font-weight-normal mt-4" style="font-family: 'Lato', sans-serif;">Can we use Python programming language with Arduino UNO?</h4>
        
        <form class="mt-3" method="POST" action="/quiz6">
          {{csrf_field()}} 


          <!-- Email -->
          <input type="text" id="defaultLoginFormEmail" class="form-control" style="max-width: 20%;" placeholder="Answer" name="answer6" required>
           <button type="submit" class="btn blue-gradient mt-4">Submit</button>
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
{{-- <!--Main layout-->
<script type="text/javascript">
  function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

window.onload = function () {
    var fiveMinutes = 60 * 2,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};
</script> --}}
<!-- JavaScript part -->
<script type="text/javascript">
    
    // Total seconds to wait
    var seconds = 120;
    
    function countdown() {
        seconds = seconds - 1;
        if (seconds < 0) {
            // Chnage your redirection link here
            window.location = "/table";
        } else {
            // Update remaining seconds
            document.getElementById("countdown").innerHTML = seconds;
            // Count down using javascript
            window.setTimeout("countdown()", 1000);
        }
    }
    
    // Run countdown function
    countdown();
    
</script>
@stop


