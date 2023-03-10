<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowPost extends Component
{
    // public $post;
    public Post $post;

    // public function mount(Post $post)
    // {
    //     $this->post = $post;
    // }
    public function render()
    {
        return view('livewire.show-post', [
            // 'post' => $this->post
            'post' => $this->post
        ])
        ->extends('layouts.app')
        ->section('content');
    }
}
