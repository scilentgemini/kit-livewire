<?php

namespace App\Livewire;

use App\Models\Post;
use Flux\Flux;
use Livewire\Component;

class PostCreate extends Component
{
    public $title, $body;

    public function render()
    {
        return view('livewire.post-create');
    }

    public function submit(){
        $this->validate([
            "title" => "required",
            "body" => "required",
        ]);
        
        Post::create([
            "title" => $this->title,
            "body" => $this->body,
        ]);

        $this->resetForm();

        Flux::modal("create-post")->close();

        $this->dispatch(event:"reloadPosts");
    }

    public function resetForm(){
        $this -> title = "";
        $this -> body = "";
    }
    
}
