<!DOCTYPE html>
<html lang="en">

@include('website.layouts.header')

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        @include('website.layouts.spinner')
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        @include('website.layouts.nav')
        <!-- Navbar & Hero End -->

        @yield('content')

        <!-- Footer Start -->
        @include('website.layouts.footer')

        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript -->
    @include('website.layouts.script')

</body>

</html>