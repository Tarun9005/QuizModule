
@extends('master')

@section('content')
<!--Main layout-->
<main class="pt-5 mx-lg-5">
  <div class="container-fluid mt-5">


    <!-- Grid row -->





    <div class="row" style="font-family: 'Lato', sans-serif;">
      <div class="col-8">
       <h4 class="h4 mb-4">Game Time!!!</h4>
     </div>
     <div class="col-4">

     </div>
   </div>
   <div class="row">
    <div class="col-md-12 text-md-left ml-3 mt-4">


      <h5 class="font-weight-normal mt-4" style="font-family: 'Lato', sans-serif;">Fill the box as soon as you see the text? Let's see how much can you retain.</h5>
      <script type="text/javascript">var v;</script>
      <button type="button" class="btn blue-gradient mt-4" onclick="v = setInterval(dis, 1500);" id="gayab">
        Generate
      </button>


      <h3 id="num0"class="mt-3"></h3>
      <h3 id="test" style="display: none;" class="mt-3">hey</h3>

      

        <!-- Email -->

        <input type="text" class="form-control" id="answer" style="max-width: 20%;" placeholder="Answer">

        <button type="submit" name="submit" class="btn blue-gradient mt-4" onclick="loadDoc()">Submit</button>




      <!-- Grid column -->

    </div>
    <!-- Grid row -->


  </div>
</main>




<script type="text/javascript">
 var m=1,max=4;
 var res=0;
 let temp;
 function dis() 
 {
  if(m!=max)
  {
    //console.log(m);
    document.getElementById('gayab').style.display ="none";
    var x = Math.floor((Math.random() * 9) + 1);      
    res=res*10+x; 
    document.getElementById("num0").innerHTML = x;
    setTimeout(function(){document.getElementById("num0").innerHTML = "";},700);
    // temp=res;
  }
  else
  {
    clearTimeout(v);
    //console.log(res);

  }
  m++;
}


function loadDoc() {
  answer=document.getElementById("answer").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

      //console.log(this.responseText);
    }
  };
  xhttp.open("GET", "/game1validator?value="+answer, true);
  xhttp.send();
}
</script>


@stop


