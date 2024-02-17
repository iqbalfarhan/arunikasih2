<?php

namespace App\Livewire\Pages\Jenis;

use App\Models\Jenis;
use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{
    public $no = 1;

    #[Title('Jenis Undangan')]
    public function render()
    {
        return view('livewire.pages.jenis.index', [
            'datas' => Jenis::get()
        ]);
    }
}
