
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
        <p id="countdown" style="font-size: 30px;color: blue;">02:00</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-md-left ml-3 mt-4">


        <h4 class="font-weight-normal mt-4" style="font-family: 'Lato', sans-serif;">Can you identify the given logo!?</h4>
        



        <img src="{{ asset('img/logo.png') }}" style="max-width: 36%; max-height: 36%;" class="img-fluid" alt="" class="mt-2">

        <form class="mt-3" method="POST" action="/quiz2">
          {{csrf_field()}} 

          <p class="h4 mb-4">The given logo is:</p>

          <!-- Email -->
          <input type="text" id="defaultLoginFormEmail" class="form-control" style="max-width: 20%;" placeholder="Answer" name="answer2" required>
           <button type="submit" class="btn blue-gradient mt-4">Submit</button>
        </form>

       {{--  <button class="btn blue-gradient mt-4">Blue</button>
        <button class="btn blue-gradient mt-4">Blue</button>
        <button class="btn blue-gradient mt-4">Blue</button>
        --}}
        <!-- Button trigger modal -->
        <button type="button" class="btn blue-gradient mt-4" data-toggle="modal" data-target="#basicExampleModal">
          Hint 1
        </button>
       

       <button type="button" class="btn blue-gradient mt-4" data-toggle="modal" data-target="#basicExampleModal3">
        Hint 2
      </button>


      <!-- Modal -->
      <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Hint 1</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           It's an american company whose headquater is in Boston.
          </div>

        </div>
      </div>
    </div>
    {{-- modal ends --}}
   
    {{-- modal ends --}}
     <!-- Modal -->
      <div class="modal fade" id="basicExampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Hint 2</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            In 2018, it ranked among the Fortune 500 as the 18th-largest firm in the U.S. by gross revenue.
          </div>

        </div>
      </div>
    </div>
    {{-- modal ends --}}
    <!-- Grid column -->

  </div>
  <!-- Grid row -->


</div>
</main>
<!--Main layout-->
<script type="text/javascript">
    
    // Total seconds to wait
    var seconds = 30;
    
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


