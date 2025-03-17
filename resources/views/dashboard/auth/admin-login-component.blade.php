<form class="mb-3" wire:submit='login' novalidate>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="Enter your email" autofocus wire:model.blur='email' />
        <x-input-error :messages="$errors->get('email')" />
    </div>

    <div class="mb-3 form-password-toggle">
        <div class="d-flex justify-content-between">
            <label class="form-label" for="password">Password</label>
        </div>
        <div class="input-group input-group-merge">
            <input type="password" class="form-control"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                aria-describedby="password" wire:model.blur='password' />
            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
        </div>
        <x-input-error :messages="$errors->get('password')" />

    </div>

    <div class="mt-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" wire:model='remember' />
            <label class="form-check-label" for="remember-me"> Remember Me </label>
        </div>
    </div>

    <div class="mt-3">
        <button class="btn btn-primary d-grid w-100" type="submit">
            @include('dashboard.loading',[
            'target' => 'login',
            'name' => 'Sign in'
            ])
        </button>
    </div>
</form>