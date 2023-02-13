<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class DeletePost extends Component
{
    public Post $post;
    public function delete()
    {
        $this->post->delete();
    }
    public function render()
    {

        return <<<'blade'
            <div >
                <button wire:click="delete">Delete Post</button>
            </div>
        blade;
    }
}
