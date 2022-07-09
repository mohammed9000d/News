<?php

namespace App\Http\Livewire\Front;

use App\Models\Contact;
use Livewire\Component;

class ContactLivewire extends Component
{
    public $name, $email, $subject, $message;
    public function render()
    {
        return view('livewire.front.contact-livewire');
    }

    public function mount() {
        if(auth()->check()){
            $this->name = auth()->user()->name;
            $this->email = auth()->user()->email;
        }else{
            $this->name = null;
            $this->email = null;
        }
        $this->subject = null;
        $this->message = null;
    }

    public function send()
    {
        $this->validate([
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|email|max:255|min:3',
            'subject' => 'required|string|max:255|min:3',
            'message' => 'required|string|min:5',
        ]);
        $contact = Contact::create($this->all());
        if($contact) {
            $this->mount();
            $this->dispatchBrowserEvent('toast', ['type' => 'success', 'message' => 'Send Message Successfully!']);
            return;
        }
        $this->dispatchBrowserEvent('toast', ['type' => 'error', 'message' => 'Failed to Send Message!']);
    }
}
