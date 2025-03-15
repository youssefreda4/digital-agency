@extends('dashboard.auth.layouts.master')

@section('title', 'Register')

@section('content')
<!-- Register Card -->
<div class="card">
    <div class="card-body">

        <!-- Logo -->
        @include('dashboard.auth.layouts.logo')
        <!-- /Logo -->

        <h4 class="mb-2">Adventure starts here 🚀</h4>
        <p class="mb-4">Make your app management easy and fun!</p>

        <form id="formAuthentication" class="mb-3" action="index.html" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" placeholder="Enter your username" autofocus />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" placeholder="Enter your email" />
            </div>
            <div class="mb-3 form-password-toggle">
                <label class="form-label" for="password">Password</label>
                <div class="input-group input-group-merge">
                    <input type="password" class="form-control"
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-describedby="password" />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
            </div>

            <button class="btn btn-primary d-grid w-100">Sign up</button>
        </form>

        <p class="text-center">
            <span>Already have an account?</span>
            <a href="{{ route('dashboard.auth.login') }}">
                <span>Sign in instead</span>
            </a>
        </p>
    </div>
</div>
<!-- Register Card -->
@endsection