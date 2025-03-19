@extends('dashboard.layouts.master')

@section('title','Home')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">

        <div class="col-lg-4 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <a href="{{ route('dashboard.settings') }}" class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <i class='menu-icon bx bx-cog'></i>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Settings</span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <a href="{{ route('dashboard.skills') }}" class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <i class='menu-icon bx bx-layer'></i>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Skills</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <a href="{{ route('dashboard.subscribers') }}" class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <i class='menu-icon bx bx-user-pin'></i>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Subscribers</span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <a href="{{ route('dashboard.counters') }}" class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <i class='menu-icon bx bx-line-chart'></i>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Counters</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <a href="{{ route('dashboard.services') }}" class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <i class='menu-icon bx bx-briefcase'></i>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Services</span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <a href="{{ route('dashboard.messages') }}" class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <i class='menu-icon bx bx-chat'></i>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Messages</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <a href="{{ route('dashboard.categories') }}" class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <i class='menu-icon bx bx-category'></i>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Categories</span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <a href="{{ route('dashboard.projects') }}" class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <i class='menu-icon bx bx-folder-open'></i>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Projects</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection