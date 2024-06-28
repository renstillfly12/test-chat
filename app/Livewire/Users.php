<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Users extends Component
{
    public $users = [];
    
    public function mount()
    {
        $this->users = User::latest()->limit(5)->get();
    }
    
    public function render()
    {
        
        return view('livewire.users');
    }
}
