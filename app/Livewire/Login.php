<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    public $showModal = false;
    #[Validate("required|min:3|email", message: "Email is required")]
    public $email;
    #[Validate("required|min:4", message: "Password is required")]
    public $password;

    public function openModal()
    {
        $this->showModal = true;
    }

    public function login(Request $request)
    {
        $this->validate();
        if (
            Auth::attempt([
                "email" => $this->email,
                "password" => $this->password,
            ])
        ) {
            $request->session()->regenerate();
            return $this->redirect("/", navigate: true);
        } else {
            $this->addError(
                "credentials",
                "The provided credentials do not match our records."
            );
        }
    }

    public function render()
    {
        return view("livewire.login");
    }
}
