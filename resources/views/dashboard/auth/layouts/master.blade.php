<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('dashboard-assets') }}/" data-template="vertical-menu-template-free">

@include('dashboard.auth.layouts.header')

<body>
    <!-- Content -->
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- / Content -->

    @include('dashboard.auth.layouts.script')
</body>

</html>
