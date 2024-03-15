<?php

namespace App\Livewire\Forms;

use App\Models\Jenis;
use Livewire\Attributes\Validate;
use Livewire\Form;

class JenisForm extends Form
{
    public $name = "";
    public ?Jenis $jenis;

    public function setJenis(Jenis $jenis){
        $this->jenis = $jenis;
        $this->name = $jenis->name;
    }

    public function store(){
        $valid = $this->validate([
            'name' => 'required'
        ]);
        Jenis::create($valid);
        $this->reset();
    }

    public function update(){
        $valid = $this->validate([
            'jenis' => 'required',
            'name' => 'required'
        ]);
        $this->jenis->update($valid);
        $this->reset();
    }
}
