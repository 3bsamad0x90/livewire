<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPosts extends Component
{

    public function render()
    {
        $posts = Post::with('user')->orderBy('id', 'desc')->paginate(10);
        return view('livewire.show-posts', compact('posts'))
            ->extends('layouts.app')
            ->section('content');
    }
}
