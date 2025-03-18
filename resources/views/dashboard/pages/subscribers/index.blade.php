@extends('dashboard.layouts.master')

@section('title','Skills')

@section('content')

<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Subscribers</h4>

        <!-- Table -->
        <div class="card">
            <div class="card-body">
                <livewire:dashboard.pages.subscribers.subscribers-data-component>
            </div>
        </div>
        <!--/ Table -->


        <!-- Delete skill -->
        <livewire:dashboard.pages.subscribers.delete-subscriber-component>
        <!--/ Delete skill -->

    </div>
</div>

@endsection