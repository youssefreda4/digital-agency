<?php

namespace App\Livewire\Dashboard\Pages\Subscribers;

use App\Models\Subscriber;
use Livewire\Component;

class DeleteSubscriberComponent extends Component
{
    public $subscriber;

    protected $listeners = [
        'subscriberDelete',
    ];

    public function subscriberDelete($id)
    {
        //fill $subscriber with the eloquent model of the same id
        $this->subscriber = Subscriber::find($id);

        //show edit modal
        $this->dispatch('deleteModalToggle');
    }

    public function delete()
    {
        //delete data
        $this->subscriber->delete();

        //reset data
        $this->reset('subscriber');

        //flash success
        $this->dispatch('flashDeleteAlertSuccess');

        //hide modal
        $this->dispatch('deleteModalToggle');

        //refresh table
        $this->dispatch('refreshData')->to(SubscribersDataComponent::class);
    }
    public function render()
    {
        return view('dashboard.pages.subscribers.delete-subscriber-component');
    }
}
