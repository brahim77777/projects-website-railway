<?php

namespace App\Livewire;

use App\Models\Subscriber;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class SubscribtionCard extends Component
{
    public $email;
    public $done = false;

    public function rules()
    {
        return [
            "email" => [Rule::unique("subscribers"), "required", "email"],
        ];
    }

    public function save()
    {
        $this->done = false;
        $this->validate();
        Subscriber::create(["email" => $this->email]);
        $this->done = true;
        session()->flash('email' , 'email created successfully');
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
