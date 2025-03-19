@extends('dashboard.layouts.master')

@section('title','Categories')

@section('content')

<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <x-breadcrumbs-component pageName="Categories"></x-breadcrumbs-component>

        <!-- Create category -->
        <div class="mb-3">
            <div class="col-lg-4 col-md-6">
                <div class="mt-3">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                        Create
                    </button>
                    <!-- Modal -->
                    <livewire:dashboard.pages.categories.create-category-component>
                        <!-- / Modal -->
                </div>
            </div>
        </div>
        <!--/ Create category -->
       
        <!-- Table -->
        <div class="card">
            <div class="card-body">
                <livewire:dashboard.pages.categories.categories-data-component>
            </div>
        </div>
        <!--/ Table -->


        <!-- Update category -->
        <livewire:dashboard.pages.categories.update-category-component>
        <!--/ Update category -->

        <!-- Delete category -->
        <livewire:dashboard.pages.categories.delete-category-component>
        <!--/ Delete category -->
        
        <!-- Show category -->
        <livewire:dashboard.pages.categories.show-category-component>
        <!--/ Show category -->

    </div>
</div>

@endsection