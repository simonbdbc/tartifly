<nav class="colorlib-nav" role="navigation">
    <div class="top-menu" style="background-color: #2C2E3E;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-2">
                    <div id="colorlib-logo"><a href="{{ url('/') }}">Tartifly</a></div>
                </div>
                <div class="col-xs-10 text-right menu-1">
                    <ul>
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('voyages') }}">Voyages</a></li>
                        {{-- <li><a href="{{ url('services') }}">Services</a></li>
                        <li><a href="{{ url('blog') }}">Blog</a></li> --}}
                        <li><a href="{{ url('about') }}">About</a></li>
                        <li><a href="{{ url('contact') }}">Contact</a></li>
                        @auth
                        <li><a href="{{ route('liste') }}">Mon compte</a></li>
                        <li>
                            {{-- <a href="{{ route('logout') }}">Deconnexion</a> --}}
                            <a>
                            <form method="post" action="{{ route('logout') }}" id="logout">
                                @csrf
                            <button type="submit">Deconnexion</button>
                            </form>
                            </a>
                        </li>
                        @endauth
                        @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

