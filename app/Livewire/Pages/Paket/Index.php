<?php

namespace App\Livewire\Pages\Paket;

use App\Models\Paket;
use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{

    protected $listeners = ['reload' => '$fresh'];

    public $no = 1;
    public $cari;

    #[Title('Paket Undangan')]
    public function render()
    {
        return view('livewire.pages.paket.index', [
            'datas' => Paket::when($this->cari, function($q){
                $q->where('name', 'like', "%{$this->cari}%");
            })->orderBy('jenis_id')->get()
        ]);
    }
}
