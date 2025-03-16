<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('dashboard.auth.pages.login');
    }

    public function destroy(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->forget('guard.admin');

        $request->session()->regenerateToken();

        return redirect()->route('dashboard.auth.login');
    }
}
