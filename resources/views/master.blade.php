@include('layouts.cdn')

<body class="grey lighten-3">

  <!--Main Navigation-->
  <header>

    
   @include('layouts.nav')
   @include('layouts.sidenav')

 </header>
 <!--Main Navigation-->
 @yield('content')

 @include('layouts.footer')

  
</body>

</html>

