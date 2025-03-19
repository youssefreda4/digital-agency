<?php

namespace App\Livewire\Dashboard\Pages\Newsletters;

use App\Models\Newsletter;
use Livewire\Component;

class DeleteNewsletterComponent extends Component
{
    public $newsletter;

    protected $listeners = [
        'newsletterDelete',
    ];

    public function newsletterDelete($id)
    {
        //fill $newsletter with the eloquent model of the same id
        $this->newsletter = Newsletter::find($id);

        //show edit modal
        $this->dispatch('deleteModalToggle');
    }

    public function delete()
    {
        //delete data
        $this->newsletter->delete();

        //reset data
        $this->reset('newsletter');

        //flash success
        $this->dispatch('flashDeleteAlertSuccess');

        //hide modal
        $this->dispatch('deleteModalToggle');

        //refresh table
        $this->dispatch('refreshData')->to(NewsletterDataComponent::class);
    }

    public function render()
    {
        return view('dashboard.pages.newsletters.delete-newsletter-component');
    }
}
