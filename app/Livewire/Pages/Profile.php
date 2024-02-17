<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

class Profile extends Component
{
    #[Title('Edit Profile')]
    public function render()
    {
        return view('livewire.pages.profile');
    }
}
