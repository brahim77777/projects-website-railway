<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;


    protected $fillable = ['title', 'description', 'live_demo', 'github_repo', 'photo', 'technologies', 'type'];
    protected $nullable = ['live_demo', 'github_repo'];

}
