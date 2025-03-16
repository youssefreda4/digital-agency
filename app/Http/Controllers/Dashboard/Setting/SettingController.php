<?php

namespace App\Http\Controllers\Dashboard\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
       return view('dashboard.pages.setting.index');
    }
}
