
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
         <h4 class="h4 mb-4">Question No-2</h4>
       </div>
       <div class="col-4">
        <p id="time" style="font-size: 30px;color: blue;">02:00</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-md-left ml-3 mt-4">


        <h4 class="font-weight-normal mt-4" style="font-family: 'Lato', sans-serif;">Can you identify the given logo!?</h4>
        



        <img src="{{ asset('img/nasa.svg.png') }}" style="max-width: 36%; max-height: 36%;" class="img-fluid" alt="" class="mt-2">

        <form class="mt-3" action="#!">

          <p class="h4 mb-4">The given logo is:</p>

          <!-- Email -->
          <input type="email" id="defaultLoginFormEmail" class="form-control" style="max-width: 20%;" placeholder="Answer">
        </form>

       {{--  <button class="btn blue-gradient mt-4">Blue</button>
        <button class="btn blue-gradient mt-4">Blue</button>
        <button class="btn blue-gradient mt-4">Blue</button>
        --}}
        <!-- Button trigger modal -->
        <button type="button" class="btn blue-gradient mt-4" data-toggle="modal" data-target="#basicExampleModal">
          Hint 1
        </button>
        <button type="button" class="btn blue-gradient mt-4" data-toggle="modal" data-target="#basicExampleModal2">
         Hint 2
       </button>

       <button type="button" class="btn blue-gradient mt-4" data-toggle="modal" data-target="#basicExampleModal3">
        Hint 3
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
            You can see your face fuck
          </div>

        </div>
      </div>
    </div>
    {{-- modal ends --}}
     <!-- Modal -->
      <div class="modal fade" id="basicExampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
            Fuck this 2nd hint
          </div>

        </div>
      </div>
    </div>
    {{-- modal ends --}}
     <!-- Modal -->
      <div class="modal fade" id="basicExampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Hint 3</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Dumb shit no need to play
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


