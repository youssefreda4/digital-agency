<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="m-0">DGital</h1>
            {{-- <img src="{{ asset('front-assets') }}/img/logo.png" alt="Logo"> --}}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            @php
            function activeLink($route) {
            if(request()->routeIs($route)) return 'active' ;
            }
            @endphp
            <div class="navbar-nav mx-auto py-0">
                <a href="{{ route('website.index') }}"
                    class="nav-item nav-link {{ activeLink('website.index') }}">Home</a>
                <a href="{{ route('website.about') }}"
                    class="nav-item nav-link {{ activeLink('website.about') }}">About</a>
                <a href="{{ route('website.service') }}"
                    class="nav-item nav-link {{ activeLink('website.service') }}">Service</a>
                <a href="{{ route('website.project') }}"
                    class="nav-item nav-link {{ activeLink('website.project') }}">Project</a>
                <div class="nav-item dropdown">
                    <a href="#"
                        class="nav-link dropdown-toggle {{ activeLink('website.team') ?? activeLink('website.testimonial') }}"
                        data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route('website.team') }}"
                            class="dropdown-item  {{ activeLink('website.team') }}">Our Team</a>
                        <a href="{{ route('website.testimonial') }}"
                            class="dropdown-item {{ activeLink('website.testimonial') }}">Testimonial</a>
                    </div>
                </div>
                <a href="{{ route('website.contact') }}"
                    class="nav-item nav-link {{ activeLink('website.contact') }}">Contact</a>
            </div>
            {{-- <a href="" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Get Started</a> --}}
        </div>
    </nav>

    @yield('hero')

</div>
<!-- Navbar & Hero End -->