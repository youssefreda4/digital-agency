@extends('dashboard.layouts.master')

@section('title','Services')

@section('content')

<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <x-breadcrumbs-component pageName="Services"></x-breadcrumbs-component>

        <!-- Create service -->
        <div class="mb-3">
            <div class="col-lg-4 col-md-6">
                <div class="mt-3">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                        Create
                    </button>
                    <!-- Modal -->
                    <livewire:dashboard.pages.services.create-service-component>
                        <!-- / Modal -->
                </div>
            </div>
        </div>
        <!--/ Create service -->
       
        <!-- Table -->
        <div class="card">
            <div class="card-body">
                <livewire:dashboard.pages.services.services-data-component>
            </div>
        </div>
        <!--/ Table -->


        <!-- Update service -->
        <livewire:dashboard.pages.services.update-service-component>
        <!--/ Update service -->

        <!-- Delete service -->
        <livewire:dashboard.pages.services.delete-service-component>
        <!--/ Delete service -->
        
        <!-- Show service -->
        <livewire:dashboard.pages.services.show-service-component>
        <!--/ Show service -->

    </div>
</div>

@endsection