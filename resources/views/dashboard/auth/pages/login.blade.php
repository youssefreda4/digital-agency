@extends('dashboard.auth.layouts.master')

@section('title', 'Login')

@section('content')

<!-- Register -->
<div class="card">
    <div class="card-body">

        <!-- Logo -->
        @include('dashboard.auth.layouts.logo')
        <!-- /Logo -->

        <h4 class="mb-2">Welcome to Digital Agency! 👋</h4>
        <p class="mb-4">Please sign-in to your account and start the adventure</p>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <livewire:dashboard.auth.admin-login-component />
        
    </div>
</div>
<!-- /Register -->
@endsection