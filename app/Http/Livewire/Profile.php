<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Profile extends Component
{
    // public $name;
    // public $email;
    public $success = false;
    // protected $rules = [
    //     'name' => 'required|min:3',
    //     'email' => 'required|email'
    // ];

    // public function mount(){
    //     $this->name = auth()->user()->name;
    //     $this->email = auth()->user()->email;
    // }
    //using full eloquent model
    public User $user;
    protected $rules = [
        'user.name' => 'required|min:3',
        'user.email' => 'required|email'
    ];
    public function mount(){
        $this->user = auth()->user();
    }
    public function render()
    {
        return view('livewire.profile');
    }
    public function updateProfile(){
        if($this->validate()){
            $this->user->save();
            $this->success = true;
        }

        // auth()->user()->update([
        //     'name' => $this->name,
        //     'email' => $this->email
        // ]);
        // $this->user->save();
        // $this->success = true;
    }
    
    public function checkemail(){
        $this->validateOnly('user.email');
    }
}
