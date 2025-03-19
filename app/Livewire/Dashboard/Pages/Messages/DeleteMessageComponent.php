<?php

namespace App\Livewire\Dashboard\Pages\Messages;

use App\Models\Message;
use Livewire\Component;

class DeleteMessageComponent extends Component
{
    public $message;

    protected $listeners = [
        'messageDelete',
    ];

    public function messageDelete($id)
    {
        //fill $message with the eloquent model of the same id
        $this->message = Message::find($id);

        //show edit modal
        $this->dispatch('deleteModalToggle');
    }

    public function delete()
    {
        //delete data
        $this->message->delete();

        //reset data
        $this->reset('message');

        //flash success
        $this->dispatch('flashDeleteAlertSuccess');

        //hide modal
        $this->dispatch('deleteModalToggle');

        //refresh table
        $this->dispatch('refreshData')->to(MessagesDataComponent::class);
    }

    public function render()
    {
        return view('dashboard.pages.messages.delete-message-component');
    }
}
