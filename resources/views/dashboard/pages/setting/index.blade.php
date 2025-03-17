@extends('dashboard.layouts.master')

@section('title','Setting')

@section('content')

<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Settings</h4>

        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0">Settings</h5>
            </div>

            <div class="card-body">
                <livewire:dashboard.pages.setting.update-settings-component>
            </div>
        </div>

    </div>
</div>

@endsection