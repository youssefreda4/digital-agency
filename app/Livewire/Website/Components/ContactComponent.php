<?php

namespace App\Livewire\Website\Components;

use App\Models\Message;
use Livewire\Component;

class ContactComponent extends Component
{
    public $name, $email, $subject, $message;

    protected function rules()
    {
        return [
            'name' => 'required|string|min:5|max:150',
            'email' => 'required|string|email',
            'subject' => 'required|string|min:5|max:300',
            'message' => 'required|string|min:10|max:1500',
        ];
    }

    public function updatedName()
    {
        $this->validateOnly('name');
    }

    public function updatedEmail()
    {
        $this->validateOnly('email');
    }

    public function updatedSubject()
    {
        $this->validateOnly('subject');
    }

    public function updatedMessage()
    {
        $this->validateOnly('message');
    }

    public function submit()
    {
        $data = $this->validate();

        Message::create($data);
        $this->reset([
            'name',
            'email',
            'subject',
            'message',
        ]);

        session()->flash('success', 'Message send successfully');
    }

    public function render()
    {
        return view('website.components.contact-component');
    }
}
