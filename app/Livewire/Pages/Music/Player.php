<?php

namespace App\Livewire\Pages\Music;

use App\Models\Music;
use Livewire\Attributes\On;
use Livewire\Component;

class Player extends Component
{
    public ?Music $music;

    public $playing = false;

    public function togglePlay()
    {
        $this->playing = !$this->playing;
    }

    #[On('playMusic')]
    public function playMusic(Music $music)
    {
        $this->music = $music;
        $this->playing = true;
    }

    public function resetMusic()
    {
        $this->music = null;
    }

    public function render()
    {
        return view('livewire.pages.music.player');
    }
}
