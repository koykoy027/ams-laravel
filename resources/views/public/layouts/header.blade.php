<!-- Navigation-->
<nav class="navbar navbar-expand-lg bg-dark sticky-top mb-5" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{route('welcome')}}">
            {{-- <img src="assets/img/navbar-logo.svg" alt="..." /> --}}
            Alumni connect
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">                
                <li class="nav-item"><a class="nav-link {{'alumni' == request()->path() ? 'text-primary': ''}}" href="{{route('alumni')}}">Alumni Lists</a></li>
                <li class="nav-item"><a class="nav-link" href="/#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/#team">Team</a></li>
                <li class="nav-item"><a class="nav-link" href="/#contact">Contact</a></li>
                

                @guest
                    @if (Route::has('register'))
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @endif

                    @if (Route::has('login'))
                        <li class="nav-item"><a class="nav-link active" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    @endif

                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-primary" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="text-transform:none ">
                            <a class="dropdown-item" href="{{ route('home') }}">
                                <i class="fa-solid fa-handshake"></i> {{ __('Alumni Connect') }}
                            </a>                            
                            <a class="dropdown-item" href="{{ route('home') }}">
                                <i class="fa-solid fa-calendar-check"></i> {{ __('Appointment') }}
                            </a>                                                  
                            <a class="dropdown-item" href="{{ route('settings') }}">
                                <i class="fa-solid fa-gear"></i> {{ __('Settings') }}
                            </a>                            
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                <i class="fa-solid fa-right-from-bracket"></i> {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>