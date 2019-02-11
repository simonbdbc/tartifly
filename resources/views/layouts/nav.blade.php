<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-2">
                    <div id="colorlib-logo"><a href="{{ url('/') }}">Tour</a></div>
                </div>
                <div class="col-xs-10 text-right menu-1">
                    <ul>
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                        <li class="has-dropdown">
                            <a href="{{ url('voyages') }}">Voyages</a>
                            <ul class="dropdown">
                                <li><a href="#">Destination</a></li>
                                <li><a href="#">Cruises</a></li>
                                <li><a href="#">Hotels</a></li>
                                <li><a href="#">Booking</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('hotels') }}">Hotels</a></li>
                        <li><a href="{{ url('services') }}">Services</a></li>
                        <li><a href="{{ url('blog') }}">Blog</a></li>
                        <li><a href="{{ url('about') }}">About</a></li>
                        <li><a href="{{ url('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

