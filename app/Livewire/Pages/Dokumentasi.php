<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

class Dokumentasi extends Component
{
    #[Title('Dokumentasi')]
    public function render()
    {
        return view('livewire.pages.dokumentasi', [
            'content' => file_get_contents(base_path('README.md')),
        ]);
    }
}
