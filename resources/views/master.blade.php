@include('cdn')

<body class="grey lighten-3">

  <!--Main Navigation-->
  <header>

    
   @include('nav')
   @include('sidenav')

 </header>
 <!--Main Navigation-->
 @yield('content')

 @include('footer')

  
</body>

</html>

