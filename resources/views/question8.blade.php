
@extends('master')

@section('content')
<!--Main layout-->
<main class="pt-5 mx-lg-5">
  <div class="container-fluid mt-5">


    <!-- Grid row -->


   
       

       <div class="row" style="font-family: 'Lato', sans-serif;">
        <div class="col-8">
         <h4 class="h4 mb-4">Question No-3</h4>
       </div>
       <div class="col-4">
        <p id="countdown" style="font-size: 30px;color: blue;">02:00</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-md-left ml-3 mt-3">
        <h5 class="h5 mb-4" style="font-family: 'Lato', sans-serif;">Count the number of forward biased diodes in the figure?</h5>


      </div>
      <div class="row" id="hide">
        <div class="col-md-4 text-md-left ml-3 mt-3">
          <a class="logo-wrapper waves-effect">
            <img src="{{ asset('img/diodes.png') }}" style="max-width: 100%; max-height: 100%;" class="img-fluid" alt="">
          </a>
        </div>
      </div>

     
    </div>
    <!-- Grid row -->

      <form class="mt-3" method="POST" action="/quiz8">
          {{csrf_field()}} 


          <!-- Email -->
          <input type="text" id="defaultLoginFormEmail" class="form-control" style="max-width: 20%;" placeholder="Answer" name="answer8" required>
           <button type="submit" class="btn blue-gradient mt-4">Submit</button>
        </form>

  </div>
</main>
<!--Main layout-->
<!--Main layout-->
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


