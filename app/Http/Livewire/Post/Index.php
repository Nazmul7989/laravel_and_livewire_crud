<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Index extends Component
{
    public $posts;

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        flash()->addSuccess('Post Deleted Successfully.');
    }

    public function render()
    {
        $this->posts = Post::latest()->get();
        return view('livewire.post.index',['posts' => $this->posts]);
    }
}
