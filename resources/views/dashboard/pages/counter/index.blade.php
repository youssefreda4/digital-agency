@extends('dashboard.layouts.master')

@section('title','Counter')

@section('content')

<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <x-breadcrumbs-component pageName="Counter"></x-breadcrumbs-component>

        <!-- Create counter -->
        <div class="mb-3">
            <div class="col-lg-4 col-md-6">
                <div class="mt-3">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                        Create
                    </button>
                    <!-- Modal -->
                    <livewire:dashboard.pages.counter.create-counter-component>
                        <!-- / Modal -->
                </div>
            </div>
        </div>
        <!--/ Create counter -->
       
        <!-- Table -->
        <div class="card">
            <div class="card-body">
                <livewire:dashboard.pages.counter.counter-data-component>
            </div>
        </div>
        <!--/ Table -->


        <!-- Update counter -->
        <livewire:dashboard.pages.counter.update-counter-component>
        <!--/ Update counter -->

        <!-- Delete counter -->
        <livewire:dashboard.pages.counter.delete-counter-component>
        <!--/ Delete counter -->
        
        <!-- Show counter -->
        <livewire:dashboard.pages.counter.show-counter-component>
        <!--/ Show counter -->

    </div>
</div>

@endsection