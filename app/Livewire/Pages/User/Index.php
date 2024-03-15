<?php

namespace App\Livewire\Pages\User;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{

    protected $listeners = ['reload' => '$fresh'];

    public $no = 1;
    public $cari;

    #[Title('User Undangan')]
    public function render()
    {
        return view('livewire.pages.user.index', [
            'datas' => User::when($this->cari, function($q){
                $q->where('name', 'like', "%{$this->cari}%");
            })->get()
        ]);
    }
}
