<?php

namespace App\Livewire;

use Flux\Flux;
use App\Models\Post;

use Livewire\Component;
use Livewire\Attributes\On;

class Posts extends Component
{
    public $posts, $postId;

    public function mount()
    {
        $this -> posts = Post::all();
    }

    public function render()
    {
        return view('livewire.posts');
    }

    #[On("reloadPosts")]
    public function reloadPosts()
    {
        $this -> posts = Post::all();
    }

    public function edit($id)
    {
        $this->dispatch("editPost", $id);
    }

    public function delete($id)
    {
        $this->postId = $id;
        Flux::modal("delete-post")->show();
    }

    public function destroy()
    {
        Post::find($this->postId)->delete();
        Flux::modal("delete-post")->close();
        $this->reloadPosts();
    }
}
