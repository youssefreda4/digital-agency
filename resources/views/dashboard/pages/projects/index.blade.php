@extends('dashboard.layouts.master')

@section('title','Projects')

@section('content')

<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <x-breadcrumbs-component pageName="Projects"></x-breadcrumbs-component>

        <!-- Create project -->
        <div class="mb-3">
            <div class="col-lg-4 col-md-6">
                <div class="mt-3">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                        Create
                    </button>
                    <!-- Modal -->
                    <livewire:dashboard.pages.projects.create-project-component>
                        <!-- / Modal -->
                </div>
            </div>
        </div>
        <!--/ Create project -->
       
        <!-- Table -->
        <div class="card">
            <div class="card-body">
                <livewire:dashboard.pages.projects.projects-data-component>
            </div>
        </div>
        <!--/ Table -->


        <!-- Update project -->
        <livewire:dashboard.pages.projects.update-project-component>
        <!--/ Update project -->

        <!-- Delete project -->
        <livewire:dashboard.pages.projects.delete-project-component>
        <!--/ Delete project -->
        
        <!-- Show project -->
        <livewire:dashboard.pages.projects.show-project-component>
        <!--/ Show project -->

    </div>
</div>

@endsection