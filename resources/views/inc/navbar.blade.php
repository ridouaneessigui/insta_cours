@yield('navbar')
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#">Laravel 7.X</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{URL::to('#')}}">Home</a></li>
                <li><a href="{{URL::to('/apropos')}}">About</a></li>
                <li><a href="{{URL::to('/service')}}">Services</a></li>
            </ul>
        </div>
    </nav>