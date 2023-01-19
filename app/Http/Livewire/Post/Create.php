<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Create extends Component
{
    public $title;
    public $description;

    protected $rules=[
      'title' => 'required|string|max:255',
      'description' => 'required|string',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function submit()
    {
        $data = $this->validate();

        $post = new Post();

        $post->title = $data['title'];
        $post->description = $data['description'];
        $post->save();

//        flush()->addSuccess('Post Created Successfully.');

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.post.create');
    }
}
