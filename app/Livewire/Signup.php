<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Signup extends Component
{
    public $showModal = false;
    #[Validate("required|min:3|email|unique:users", message: "Email is required")]

    public $email;
    #[Validate("required|min:4", message: "Password is required")]
    public $password;

    #[Validate("required|same:password", message: "Password confirmation is required")]
    public $password_confirmation;

    public function openModal()
    {
        $this->showModal = true;
    }

    public function signup(Request $request)
    {
        $this->validate();
        // if (
        //     Auth::attempt([
        //         "email" => $this->email,
        //         "password" => $this->password,
        //     ])
        // ) {
        //     $request->session()->regenerate();
        //     return $this->redirect("/", navigate: true);
        // } else {
        //     $this->addError(
        //         "credentials",
        //         "The provided credentials do not match our records."
        //     );
        // }

        if ($this->password === $this->password_confirmation) {

            $user = User::create([
                "name" => $this->email,
                "email" => $this->email,
                "password" => bcrypt($this->password),
            ]);
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
                    "Passwords do not match."
                );
            }


        }
    }

    public function render()
    {
        return view("livewire.signup");
    }
}
