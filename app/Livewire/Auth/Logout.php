<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class Logout extends Component
{
    #[On('logout')]
    public function logout(){
        Auth::logout();
        $this->redirect('/', navigate:true);
    }

    public function render()
    {
        return view('livewire.auth.logout');
    }
}
