
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
         <h4 class="h4 mb-4">Question No-5</h4>
       </div>
       <div class="col-4">
        <p id="time" style="font-size: 30px;color: blue;">02:00</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-md-left ml-3 mt-3">
        <h4 class="h4 mb-4">Complete the figure?</h4>


        <p class="font-weight-normal mt-3" style="font-family: 'Lato', sans-serif;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque, totam
          rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
        dicta sunt explicabo</p>
        <br>
      </div>
      <div class="row">
        <div class="col-md-6 text-md-left ml-3 mt-3">

          <a class="logo-wrapper waves-effect">
            <img src="{{ asset('img/logoo.png') }}" style="max-width: 100%; max-height: 100%;" class="img-fluid" alt="">
          </a>
        </div>



{{-- 
        <form action="" method="">
          <input type="checkbox" name="vehicle1" value="Bike">
          <label for="vehicle1"> I have a bike</label><br>
          <input type="checkbox" name="vehicle2" value="Car">
          <label for="vehicle2"> I have a car</label><br>
          <input type="checkbox" name="vehicle3" value="Boat" checked>
          <label for="vehicle3"> I have a boat</label><br><br>
          <button type="submit"value="Submit" class="btn btn-primary">Submit</button>
          </form>
          --}}
        </div>
        <div class="row">
          <div class="col-md-3 text-md-left ml-3 mt-3">
            <a class="logo-wrapper waves-effect">
              <img src="{{ asset('img/logoo.png') }}" style="max-width: 100%; max-height: 100%;" class="img-fluid" alt="">
            </a>
          </div>
          <div class="col-md-3 text-md-left ml-3 mt-3">
            <a class="logo-wrapper waves-effect">
              <img src="{{ asset('img/logoo.png') }}" style="max-width: 100%; max-height: 100%;" class="img-fluid" alt="">
            </a>
          </div>
          <div class="col-md-3 text-md-left ml-3 mt-3">
            <a class="logo-wrapper waves-effect">
              <img src="{{ asset('img/logoo.png') }}" style="max-width: 100%; max-height: 100%;" class="img-fluid" alt="">
            </a>
          </div>
        </div>

        
        <!-- Grid column -->
        <button type="button" class="btn blue-gradient mt-4">
          Next
        </button>

      </div>
      <!-- Grid row -->

    </div>
  </main>
 <!--Main layout-->
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
</script>
@stop


