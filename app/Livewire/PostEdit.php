<?php

namespace App\Livewire;

use Livewire\Component;

use Flux\Flux;
use Livewire\Attributes\On;
use App\Models\Post;

class PostEdit extends Component
{
    public $title, $body, $postId;

    public function render()
    {
        return view('livewire.post-edit');
    }

    #[On("editPost")]
    public function editPost($id)
    {
        $post = Post::find($id);
        $this->postId = $id;
        $this->title = $post->title;
        $this->body = $post->body;
        Flux::modal("edit-post")->show();
    }

    public function update()
    {
        $this->validate([
            "title" => "required",
            "body" => "required"
        ]);

        $post = Post::find($this->postId);
        $post -> title = $this->title;
        $post -> body = $this->body;
        
        $post -> save();

        Flux::modal("edit-post")->close();

        $this->dispatch("reloadPosts");
    }
}
