<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Edit extends Component
{
    public $post;
    public $title;
    public $description;
    public $post_id;



    protected $rules=[
        'title' => 'required|string|max:255',
        'description' => 'required|string',
    ];

    public function mount($post)
    {
        $this->post_id = $post->id;
        $this->title = $post->title;
        $this->description = $post->description;
    }


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function submit()
    {
        $data = $this->validate();

        $post = Post::findOrFail($this->post_id);

        $post->title = $data['title'];
        $post->description = $data['description'];
        $post->save();

        flash()->addSuccess('Post Updated Successfully.');

        return redirect('/');
    }


    public function render()
    {
        return view('livewire.post.edit');
    }
}
