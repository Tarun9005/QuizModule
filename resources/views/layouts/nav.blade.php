<!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container-fluid">

        <!-- Brand -->
       
      @if(Auth::check())
        <strong class="blue-text">Name:&nbsp;
        
        {{Auth::user()->uname}}</strong>
        @endif 
        
          @if(Auth::check())
        <strong class="blue-text"> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Branch:
        {{Auth::user()->branch}}</strong>
          @endif 
        
         @if(Auth::check())
        <strong class="blue-text">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact No:
        {{Auth::user()->contact}}</strong>
        @endif
        


        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto d-block d-sm-none">
          <li class="nav-item active">
            <a class="nav-link waves-effect" href="#">Rules
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">Leaderboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/getting-started/download/"
            target="_blank">Sign Out</a>
          </li>
          
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->
