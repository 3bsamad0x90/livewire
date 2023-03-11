<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Notifications extends Component
{
    public $notificationCount = 0;
    protected $listeners = ['notify' => 'increment'];

    public function render()
    {
        return view('livewire.notifications');
    }
    public function increment(){
        $this->notificationCount++;
    }
}
