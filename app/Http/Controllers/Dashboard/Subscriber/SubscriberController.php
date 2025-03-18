<?php

namespace App\Http\Controllers\Dashboard\Subscriber;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function index()
    {
        return view('dashboard.pages.subscribers.index');
    }
}
