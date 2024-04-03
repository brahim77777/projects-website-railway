<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class AddProject extends Component
{
    use WithFileUploads; // 1MB Max


    public $live_demo;

    public $github_repo = '';
    #[Validate("required", message: "The description field is required")]
    public $description = '';

    #[Validate("image", message: "The image field is required")]
    public $photo;

    #[Validate("required|unique:projects", message: ['required' => 'The title field is required', 'unique' => 'The title has already been taken'])]
    public $title = '';


    #[Validate("required", message: "The type field is required")]
    public $type = "Web Application";


    #[Validate("required", message: "The technologies field is required")]
    public $technologies = '';

    public function save()
    {
        $this->validate();

        $path = $this->photo->store(path: "public/photos");
        $file_name = basename($path);
        $project = [
            "title" => $this->title,
            "description" => $this->description,
            "live_demo" => $this->live_demo,
            "github_repo" => $this->github_repo,
            "photo" => $file_name,
            "technologies" => $this->technologies,
            "type" => $this->type,

        ];

        Project::create($project);
        $this->redirect(route('home'), navigate: true);

    }

    // public function getTechnologies()
    // {
    //     $technologies = preg_split('/[\s,;]+/', $this->technologies);
    //     return $technologies;

    // }

    public function render()
    {
        return view("livewire.add-project");
    }
}
