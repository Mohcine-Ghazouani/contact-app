<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <a href="/" class="navbar-brand text-info" >Home</a>
            <a href="/home" class="navbar-brand text-primary">Accueil</a>
            <a href="/list" class="navbar-brand text-primary">Contacts</a>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                </ul>
            </div>
            
            <form class="d-flex" action="{{route('logout')}}" method="POST">
            @csrf
                <nav class="-mx-3 flex flex-1 justify-end">
                    
                    <ul class="navbar-nav">
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{auth()->user()->name}}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('profile.edit')}}">Profile</a></li>
                                <li><a class="dropdown-item" href="{{route('profile.password')}}">Update Password</a></li>
                                <li><button type="submit" class="dropdown-item">LogOut</button></li>
                            </ul>
                        </li>
                    </ul>
                             

                </nav>
               
            </form>
        </div>

</nav> -->

<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="/">Home</a> -->
    <a href="/home" class="navbar-brand text-primary">Accueil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">App</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
           
            <a class="nav-link" href="/home">Accueil</a>
            <a class="nav-link" href="/list">Contacts</a>
            <a class="dropdown-item" href="{{route('profile.edit')}}">Profile</a>
          </li>
          <form class="d-flex mt-3" action="{{route('logout')}}" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-danger">LogOut</button>
          </form>
        </ul>
        
      </div>
    </div>
  </div>
</nav>