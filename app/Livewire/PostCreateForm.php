<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostCreateForm extends Component
{
    public $title="";
    public $content="";
    public function storePost()
    {
        Post::create([
            'title' => $this->title,
            'content' => $this->content
        ]);
        session()->flash('success','Post inserito correttamente');
    }

    public function render()
    {
        return view('livewire.post-create-form');
    }
}
