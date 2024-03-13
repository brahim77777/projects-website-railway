<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class AddProject extends Component
{
    use WithFileUploads; // 1MB Max


    public $live_demo;

    public $github_repo = '';
    #[Validate("required")]
    public $description = '';

    #[Validate("image")]
    public $photo;

    #[Validate("required")]
    public $title = '';
    #[Validate("required")]
    public $type = "Web Application";
    #[Validate("required")]
    public $technologies = '';

    public function save()
    {
        $this->validate();

        $path = $this->photo->store(path: "photos");
        $project = [
            "title" => $this->title,
            "description" => $this->description,
            "live_demo" => $this->live_demo,
            "github_repo" => $this->github_repo,
            "photo" => $path,
            "technologies" => $this->getTechnologies(),
            "type" => $this->type,
            "user_id" => auth()->user()->id,

        ];


    }

    public function getTechnologies()
    {
        $technologies = preg_split('/[\s,;]+/', $this->technologies);
        return $technologies;

    }

    public function render()
    {
        return view("livewire.add-project");
    }
}
