<?php

namespace App\Livewire\Forms;

use App\Models\Paket;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PaketForm extends Form
{
    public $name = "";
    public $jenis_id = "";
    public $harga = 0;
    public $keterangan = "";
    public ?Paket $paket;

    public function setPaket(Paket $paket){
        $this->paket = $paket;
        $this->name = $paket->name;
        $this->jenis_id = $paket->jenis_id;
        $this->harga = $paket->harga;
        $this->keterangan = $paket->keterangan;
    }

    public function store(){
        $valid = $this->validate([
            'name' => 'required',
            'jenis_id' => 'required',
            'harga' => 'required',
            'keterangan' => 'required'
        ]);
        Paket::create($valid);
        $this->reset();
    }

    public function update(){
        $valid = $this->validate([
            'paket' => 'required',
            'name' => 'required',
            'jenis_id' => 'required',
            'harga' => 'required',
            'keterangan' => 'required'
        ]);
        $this->paket->update($valid);
        $this->reset();
    }
}
