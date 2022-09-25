<nav class="navbar navbar-expand-lg text-light bg-black">
  <div class="container-fluid text-light">
    <a class="navbar-brand text-light" href="#">Navbar scroll</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Link</a>
        </li>
      </ul>
      <form action="{{ url('/search') }}" method="POST" class="d-flex" >
       {{ csrf_field() }}
        <input class="form-control me-2" type="text" name="query" id="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      
         
       
        
      </form>
      
     
      @if (Route::has('login'))
      <div>
      <x-app-layout>
      </x-app-layout>

        @endif
      </div> 
    </div>
    
  </div>
</nav>


 

 {{-- <div class="container-fluid">
  <div class="row">
      <div class="col col-md-2">
          <div class="asside-menu">
              <ul class="menu">
                  <li class="menu-item">Exchnage Rate</li>
                  <li class="menu-item">Currency Converter</li>
              </ul>
          </div>
      </div> --}}
