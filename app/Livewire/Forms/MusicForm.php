<?php

namespace App\Livewire\Forms;

use App\Models\Music;
use Livewire\Attributes\Validate;
use Livewire\Form;

class MusicForm extends Form
{
    public ?Music $music;
    public $title;
    public $filename;

    public function setMusic(Music $music){
        $this->music = $music;

        $this->title = $music->title;
        $this->filename = $music->filename;
    }

    public function store(){
        $valid = $this->validate([
            'title' => 'required',
            'filename' => 'required',
        ]);

        Music::create($valid);
        $this->reset();
    }

    public function update(){
        $valid = $this->validate([
            'title' => 'required',
            'filename' => 'required',
        ]);

        $this->music->update($valid);
        $this->reset();
    }
}
