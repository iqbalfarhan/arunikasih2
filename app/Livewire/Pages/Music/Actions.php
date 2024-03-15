<?php

namespace App\Livewire\Pages\Music;

use App\Livewire\Forms\MusicForm;
use App\Models\Music;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class Actions extends Component
{
    use WithFileUploads;

    public $show = false;
    public $newfile;
    public MusicForm $form;

    #[On('createMusic')]
    public function createMusic()
    {
        $this->show = true;
    }

    #[On('editMusic')]
    public function editMusic(Music $music)
    {
        $this->show = true;
        $this->music = $music;
        $this->form->setMusic($music);
    }

    #[On('deleteMusic')]
    public function deleteMusic(Music $music)
    {
        $music->delete();
        $this->dispatch('reload');
    }

    public function simpan()
    {

        $this->validate([
            'newfile' => 'required',
        ]);
        if ($this->newfile) {
            $filename = $this->newfile->hashName();
            $this->form->filename = $filename;
        }

        if (isset($this->form->music)) {
            $this->form->update();
        }
        else {
            $this->form->store();
        }

        $this->resetMusic();
        $this->dispatch('reload');
    }

    public function resetMusic()
    {
        $this->form->reset();
        $this->show = false;
        $this->music = null;
    }

    public function render()
    {
        return view('livewire.pages.music.actions');
    }
}
