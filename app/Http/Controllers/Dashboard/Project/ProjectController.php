<?php

namespace App\Http\Controllers\Dashboard\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('dashboard.pages.projects.index');
    }
}
