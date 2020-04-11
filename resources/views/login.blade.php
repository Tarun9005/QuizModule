<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Electrino Quiz</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.5/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{ asset('css/style.min2.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <style type="text/css">
    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #1C2331 !important;
      }
    }

  </style>
</head>

<body>


  <!-- Full Page Intro -->
  <div class="view" style="background-image: url('{{ asset('img/result.jpg') }}'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="text-center white-text mx-5 wow fadeIn">
        <h2 class="mb-4">
          <strong>Thank you for playing the Quiz!:</strong>
        </h2>

        <h1>
          <strong>Your score is:</strong>
        </h1>
{{-- 
        @if(Auth::check())
                <strong class="black-text">Name:&nbsp;

                  {{Auth::user()->uname}}</strong>
                  @endif 

 --}}
        
        <?php 
        $var=session()->get( 'id' );
        $var2=session()->get( 'idd' );
        $var3=session()->get( 'idy' );
        $var4=session()->get( 'idz' );
        $var5=session()->get( 'idx' );
        $var6=session()->get( 'idm' );

        ?>

       
        
        
      
        
       

<?php 
if ($var==5) 
{
  ?>
 <h2 style="font-family: cursive;"><?php echo $var; ?></h2>
     <form action="/leaderboard" method="POST">

          {{csrf_field()}}
          <input type="text" id="batman" value="<?php echo $var?>" name="score" />
          <input type="text" id="batmann" value="<?php echo Auth::user()->uname;?>" name="name" />
          <br>
          <button class="btn blue-gradient mt-4 ml-1" type="submit">View Rules for Prize</button>
        </form>

        <?php
  }
  ?>


<?php 
if ($var2==10) 
{
  ?>
   <h2 style="font-family: cursive;"><?php echo $var2; ?></h2>  

     <form action="/leaderboard" method="POST">

          {{csrf_field()}}
          <input type="text" id="superman" value="<?php echo $var2?>" name="score" />
           <input type="text" id="supermann" value="<?php echo Auth::user()->uname;?>" name="name" />
          <br>
          <button class="btn blue-gradient mt-4 ml-1" type="submit">View Rules for Prize</button>
        </form>

        <?php
  }
  ?>

<?php 
if ($var3==20) 
{
  ?>
<h2 style="font-family: cursive;"><?php echo $var3; ?></h2>
     <form action="/leaderboard" method="POST">

          {{csrf_field()}}
          <input type="text" id="ironman" value="<?php echo $var3?>" name="score" />
           <input type="text" id="ironmann" value="<?php echo Auth::user()->uname;?>" name="name" />
          <br>
          <button class="btn blue-gradient mt-4 ml-1" type="submit">View Rules for Prize</button>
        </form>

        <?php
  }
  ?>

<?php 
if ($var4==30) 
{
  ?>
  <h2 style="font-family: cursive;"><?php echo $var4; ?></h2>
     <form action="/leaderboard" method="POST">

          {{csrf_field()}}
          <input type="text" id="heman" value="<?php echo $var4?>" name="score" />
           <input type="text" id="hemann" value="<?php echo Auth::user()->uname;?>" name="name" />
          <br>
          <button class="btn blue-gradient mt-4 ml-1" type="submit">View Rules for Prize</button>
        </form>

        <?php
  }
  ?>

<?php 
if ($var5==40) 
{
  ?>
<h2 style="font-family: cursive;"><?php echo $var5; ?></h2>
     <form action="/leaderboard" method="POST">

          {{csrf_field()}}
          <input type="text" id="woman" value="<?php echo $var5?>" name="score" />
           <input type="text" id="womann" value="<?php echo Auth::user()->uname;?>" name="name" />
          <br>
          <button class="btn blue-gradient mt-4 ml-1" type="submit">View Rules for Prize</button>
        </form>

        <?php
  }
  ?>

<?php 
if ($var6==60) 
{
  ?>
 <h2 style="font-family: cursive;"><?php echo $var6; ?></h2>
     <form action="/leaderboard" method="POST">

          {{csrf_field()}}
          <input type="text" id="wonder" value="<?php echo $var6?>" name="score" />
           <input type="text" id="wonderr" value="<?php echo Auth::user()->uname;?>" name="name" />
          <br>
          <button class="btn blue-gradient mt-4 ml-1" type="submit">View Rules for Prize</button>
        </form>

        <?php
  }
  ?>
 

   

        <p class="mt-4 d-none d-md-block">
          <strong>Click the button to see the dasboard and end your quiz!</strong>
        </p>




            {{-- <form method="POST" action="/leaderboard">
              <!Default input 
              <div class="form-group">
                <label for="formGroupExampleInput">Your score is:</label> --}}




                


                </div>

              </div>
              <!-- Content -->

            </div>
            <!-- Mask & flexbox options-->

          </div>
          <!-- Full Page Intro -->



  <script type="text/javascript">
    var num=document.getElementById('batman').style.visibility="hidden";
    var num2=document.getElementById('batmann').style.visibility="hidden";
  </script>
  <script type="text/javascript">
    var num=document.getElementById('superman').style.visibility="hidden";
    var num=document.getElementById('supermann').style.visibility="hidden";
  </script>

<script type="text/javascript">
    var num=document.getElementById('heman').style.visibility="hidden";
     var num=document.getElementById('hemann').style.visibility="hidden";
  </script>
<script type="text/javascript">
    var num=document.getElementById('woman').style.visibility="hidden";
    var num=document.getElementById('womann').style.visibility="hidden";
  </script>
<script type="text/javascript">
    var num=document.getElementById('wonder').style.visibility="hidden";
     var num=document.getElementById('wonderr').style.visibility="hidden";
  </script>
  <script type="text/javascript">
    var num=document.getElementById('ironman').style.visibility="hidden";
      var num=document.getElementById('ironmann').style.visibility="hidden";
  </script>




</body>

</html>

