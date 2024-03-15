<?php

namespace App\Livewire\Partial;

use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Header extends Component
{
    public $title;

    public function mount($title){
        $this->title = $title;
    }

    public function render()
    {
        $names = explode('.', Route::currentRouteName());
        return view('livewire.partial.header', [
            'names' => $names,
        ]);
    }
}
