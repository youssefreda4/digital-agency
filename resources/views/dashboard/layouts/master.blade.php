<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('dashboard-assets') }}/" data-template="vertical-menu-template-free">
@include('dashboard.layouts.header')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('dashboard.layouts.aside')

            <!-- Layout container -->
            <div class="layout-page">
                @include('dashboard.layouts.nav')

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    @yield('content')
                    <!-- / Content -->

                    <!-- Footer -->
                    {{-- @include('dashboard.layouts.footer') --}}
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
    @include('dashboard.layouts.script')
</body>

</html>