<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand text-danger" href="/">Contact App</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                </ul>
            </div>
            <form class="d-flex">
                @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                    <a href="{{ url('/home') }}"
                    class="btn btn-outline-primary ">
                        Dashboard
                    </a>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-outline-success ">
                        Log in
                    </a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                    class="btn btn-outline-primary ">
                        Register
                    </a>
                    @endif
                    @endauth
                </nav>
                @endif
            </form>
        </div>
    </nav>