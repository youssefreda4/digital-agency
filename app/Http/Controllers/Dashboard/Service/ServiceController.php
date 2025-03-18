<?php

namespace App\Http\Controllers\Dashboard\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        return view('dashboard.pages.services.index');
    }
}
