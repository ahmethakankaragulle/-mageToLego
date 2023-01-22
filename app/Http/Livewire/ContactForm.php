<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    public function submit()
    {
        $validatedData = $this->validate([
            'name' => 'required|min:6',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Contact::create($validatedData);

        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
