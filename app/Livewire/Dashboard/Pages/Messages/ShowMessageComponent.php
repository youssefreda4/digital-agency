<?php

namespace App\Livewire\Dashboard\Pages\Messages;

use App\Models\Message;
use Livewire\Component;

class ShowMessageComponent extends Component
{
    public  $messageObject, $name, $email, $subject, $message, $status;

    protected $listeners = [
        'messageShow',
    ];

    public function messageShow($id)
    {
        //fill $message with the eloquent model of the same id
        $this->messageObject = Message::find($id);
        $this->fill(
            $this->messageObject->only('name', 'email', 'subject', 'message', 'status'),
        );

        //show edit modal
        $this->dispatch('showModalToggle');

        //Make message is readed
        $this->messageObject->update(['status' => '1']);

        //refresh table
        $this->dispatch('refreshData')->to(MessagesDataComponent::class);
    }

    public function render()
    {
        return view('dashboard.pages.messages.show-message-component');
    }
}
