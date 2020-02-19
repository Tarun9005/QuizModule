
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
         <h4 class="h4 mb-4">Question No-3</h4>
       </div>
       <div class="col-4">
        <p id="demo" style="font-size: 30px;color: blue;"></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-md-left ml-3 mt-3">
        <h4 class="h4 mb-4">Identify the correct sequence of theorem</h4>


        <p class="font-weight-normal mt-3" style="font-family: 'Lato', sans-serif;">1.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque, totam
          rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
          dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.lorem ipsum lets rock barcelona ar ethe winn ers of championms league.I dont gibve a fuck.<br> 2.lets not fucking figt. Fucking everything stinks. This is shitty and filthy life. Fuck this a I am going to rock . everyone is going to win. Its important to not give a fuck to any single thing in life.<br>3. FIlthy rooms are sign of engineers Batman is a fictional superhero appearing in American comic books published by DC Comics. The character was created by artist Bob Kane and writer Bill Finger, and first appeared in Detective Comics.Fucking everything stinks. This is shitty and filthy life. Fuck this a I am going to rock . everyone is going to win.<br>4. Its important to not give a fuck to any single thing in life. FIlthy rooms are sign of engineers Batman is a fictional superhero appearing in American comic books published by DC Comics. The character was created by artist Bob Kane and writer Bill Finger, and first appeared in Detective Comics:</p>



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
          <div style="font-family: 'Lato', sans-serif;">
            <input type="radio" name="1.The word which means house is" value="maison">1234<BR>
            <input type="radio" name="1.The word which means house is" value="quatre">3421<BR>
            <input type="radio" name="1.The word which means house is" value="soleil">4231<BR>
            <input type="radio" name="1.The word which means house is" value="poisson">3241<BR>
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
  <script>
// Set the date we're counting down to
var countDownDate = new Date("Feb 22, 2020 15:37:25").getTime();

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


