<title>
    Alumni connect @yield('title')
</title>
@include('public.layouts.assets')

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="/">
            {{-- <img src="assets/img/navbar-logo.svg" alt="..." /> --}}
            Alumni connect
        </a>
    </div>
</nav>

<header class="masthead" style="height: 100%">
    <div class="container">
        @yield('content')
    </div>
</header>
