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

        <form class="mb-3">
            <div class="mb-3">
                <label for="email" class="form-label">Email or Username</label>
                <input type="text" class="form-control" placeholder="Enter your email or username" autofocus />
            </div>
            <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    <a href="auth-forgot-password-basic.html">
                        <small>Forgot Password?</small>
                    </a>
                </div>
                <div class="input-group input-group-merge">
                    <input type="password" class="form-control"
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-describedby="password" />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
            </div>

            <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
            </div>
        </form>


        <p class="text-center">
            <span>New on our platform?</span>
            <a href="{{ route('dashboard.auth.register') }}">
                <span>Create an account</span>
            </a>
        </p>
    </div>
</div>
<!-- /Register -->
@endsection