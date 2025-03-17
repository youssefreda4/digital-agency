<?php

namespace App\Http\Controllers\Dashboard\Skill;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        return view('dashboard.pages.skills.index');
    }
}
