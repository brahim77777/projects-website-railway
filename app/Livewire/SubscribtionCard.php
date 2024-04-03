<?php

namespace App\Livewire;

use App\Models\Subscriber;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class SubscribtionCard extends Component
{
    #[Validate("required|unique:subscribers", message: ['required' => 'The email field is required', 'unique' => 'The email is already subscribed'])]

    public $email;
    public $done = false;



    public function save()
    {
        $this->done = false;
        $this->validate();
        Subscriber::create(["email" => $this->email]);
        $this->done = true;
        session()->flash('email', 'email subscribed successfully');
    }
    public function remove()
    {
        // dd("remove");
        $this->done = false;
        $this->resetValidation();
    }
    public function render()
    {
        return view("livewire.subscribtion-card");
    }
}
