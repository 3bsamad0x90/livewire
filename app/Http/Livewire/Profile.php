<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Profile extends Component
{
    public $name;
    public $email;
    public $success = false;
    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email'
    ];
    public function mount(){
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
    }
    public function render()
    {
        return view('livewire.profile');
    }
    public function updateProfile(){
        $this->validate();
        auth()->user()->update([
            'name' => $this->name,
            'email' => $this->email
        ]);
        $this->success = true;
    }
}
