<?php

namespace App\Livewire\Dashboard\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class AdminLoginComponent extends Component
{
    public $email;
    public $password;
    public $remember;

    public function rules()
    {
        return [
            'email' => 'required|string|email',
            'password' => 'required|string|min:6',
            'remember' => 'nullable'
        ];
    }

    public function updatedEmail()
    {
        $this->validateOnly('email');
    }

    public function updatedPassword()
    {
        $this->validateOnly('password');
    }

    public function login()
    {
        $this->validate();
        if (!Auth::guard('admin')->attempt([
            'email' => $this->email,
            'password' => $this->password,
        ], $this->remember)) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        return redirect()->route('dashboard.index');
    }

    public function render()
    {
        return view('dashboard.auth.admin-login-component');
    }
}
