<?php

namespace App\Livewire\Pages\Music;

use App\Models\Music;
use Livewire\Component;

class Index extends Component
{

    protected $listeners = ['reload' => '$refresh'];

    public $no = 1;
    public function render()
    {
        return view('livewire.pages.music.index', [
            'datas' => Music::get()
        ]);
    }
}
