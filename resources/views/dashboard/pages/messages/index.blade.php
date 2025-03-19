@extends('dashboard.layouts.master')

@section('title','Messages')

@section('content')

<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <x-breadcrumbs-component pageName="Messages"></x-breadcrumbs-component>

        <!-- Table -->
        <div class="card">
            <div class="card-body">
                <livewire:dashboard.pages.messages.messages-data-component>
            </div>
        </div>
        <!--/ Table -->

        <!-- Delete message -->
        <livewire:dashboard.pages.messages.delete-message-component>
        <!--/ Delete message -->
        
        <!-- Show message -->
        <livewire:dashboard.pages.messages.show-message-component>
        <!--/ Show message -->

    </div>
</div>

@endsection