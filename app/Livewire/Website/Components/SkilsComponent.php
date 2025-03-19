<?php

namespace App\Livewire\Website\Components;

use App\Models\Skill;
use Livewire\Component;

class SkilsComponent extends Component
{
    public function render()
    {
        return view('website.components.skils-component',[
            'skills' => Skill::take(5)->get(),
        ]);
    }
}
