<?php

namespace App\Livewire\Pages\Jenis;

use App\Models\Jenis;
use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{

    protected $listeners = ['reload' => '$fresh'];

    public $no = 1;
    public $cari;

    #[Title('Jenis Undangan')]
    public function render()
    {
        return view('livewire.pages.jenis.index', [
            'datas' => Jenis::when($this->cari, function($q){
                $q->where('name', 'like', "%{$this->cari}%");
            })->get()
        ]);
    }
}
