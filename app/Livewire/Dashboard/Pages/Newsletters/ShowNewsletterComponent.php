<?php

namespace App\Livewire\Dashboard\Pages\Newsletters;

use App\Models\Newsletter;
use Livewire\Component;

class ShowNewsletterComponent extends Component
{
    public $newsletter, $email;

    protected $listeners = [
        'newsletterShow',
    ];

    public function newsletterShow($id)
    {
        //fill $newsletter with the eloquent model of the same id
        $this->newsletter = Newsletter::find($id);
        $this->fill(
            $this->newsletter->only('email'),
        );

        //show edit modal
        $this->dispatch('showModalToggle');
    }

    public function render()
    {
        return view('dashboard.pages.newsletters.show-newsletter-component');
    }
}
