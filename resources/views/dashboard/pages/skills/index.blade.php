@extends('dashboard.layouts.master')

@section('title','Skills')

@section('content')

<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <x-breadcrumbs-component pageName="Skills"></x-breadcrumbs-component>

        <!-- Create skill -->
        <div class="mb-3">
            <div class="col-lg-4 col-md-6">
                <div class="mt-3">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                        Create
                    </button>
                    <!-- Modal -->
                    <livewire:dashboard.pages.skills.create-skill-component>
                        <!-- / Modal -->
                </div>
            </div>
        </div>
        <!--/ Create skill -->
       
        <!-- Table -->
        <div class="card">
            <div class="card-body">
                <livewire:dashboard.pages.skills.skills-data-component>
            </div>
        </div>
        <!--/ Table -->


        <!-- Update skill -->
        <livewire:dashboard.pages.skills.update-skill-component>
        <!--/ Update skill -->

        <!-- Delete skill -->
        <livewire:dashboard.pages.skills.delete-skill-component>
        <!--/ Delete skill -->
        
        <!-- Show skill -->
        <livewire:dashboard.pages.skills.show-skill-component>
        <!--/ Show skill -->

    </div>
</div>

@endsection