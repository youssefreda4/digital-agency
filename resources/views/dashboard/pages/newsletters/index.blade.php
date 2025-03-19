@extends('dashboard.layouts.master')

@section('title','Newsletters')

@section('content')

<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <x-breadcrumbs-component pageName="Newsletters"></x-breadcrumbs-component>
       
        <!-- Table -->
        <div class="card">
            <div class="card-body">
                <livewire:dashboard.pages.newsletters.newsletter-data-component>
            </div>
        </div>
        <!--/ Table -->

        <!-- Delete newsletter -->
        <livewire:dashboard.pages.newsletters.delete-newsletter-component>
        <!--/ Delete newsletter -->
        
        <!-- Show newsletter -->
        <livewire:dashboard.pages.newsletters.show-newsletter-component>
        <!--/ Show newsletter -->

    </div>
</div>

@endsection