<?php

namespace App\Livewire\Website\Components;

use App\Models\Newsletter;
use Livewire\Component;

class NewsletterComponent extends Component
{
    public $name, $email, $subject, $message;

    protected function rules()
    {
        return [
            'email' => 'required|string|email',
        ];
    }


    public function updatedEmail()
    {
        $this->validateOnly('email');
    }


    public function submit()
    {
        $data = $this->validate();

        Newsletter::create($data);
        $this->reset([
            'email',
        ]);

        session()->flash('success', 'Email send successfully');
    }
    public function render()
    {
        return view('website.components.newsletter-component');
    }
}
