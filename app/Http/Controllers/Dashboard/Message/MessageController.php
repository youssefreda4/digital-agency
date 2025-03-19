<?php

namespace App\Http\Controllers\Dashboard\Message;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        return view('dashboard.pages.messages.index');
    }
}
