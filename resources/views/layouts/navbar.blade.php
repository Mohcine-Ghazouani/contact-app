<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="/" class="navbar-brand text-danger" >Contact App</a>
            <a href="/home" class="navbar-brand text-danger">Accueil</a>
            <a href="/list" class="navbar-brand text-danger">Contacts</a>
            
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
                
                
                <!-- <button type="submit" class="btn btn-outline-secondary ">LogOut</button> -->
                </nav>
               
            </form>
        </div>

    </nav>