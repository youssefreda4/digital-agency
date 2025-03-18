<?php

namespace App\Http\Controllers\Dashboard\Counter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function index()
    {
        return view('dashboard.pages.counter.index');
    }
}
