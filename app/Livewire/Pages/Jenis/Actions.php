<?php

namespace App\Livewire\Pages\Jenis;

use App\Livewire\Forms\JenisForm;
use App\Models\Jenis;
use Livewire\Attributes\On;
use Livewire\Component;

class Actions extends Component
{
    public $show = false;

    public JenisForm $form;

    #[On('createJenis')]
    public function createJenis()
    {
        $this->form->reset();
        $this->show = true;
    }

    public function simpan()
    {
        if (isset($this->form->jenis)) {
            $this->form->update();
        }
        else{
            $this->form->store();
        }
        $this->closeModal();
    }

    #[On('editJenis')]
    public function editJenis(Jenis $jenis)
    {
        $this->show = true;
        $this->form->setJenis($jenis);
    }

    public function closeModal()
    {
        $this->dispatch('reload');
        $this->show = false;
    }

    #[On('deleteJenis')]
    public function delete(Jenis $jenis)
    {
        $jenis->delete();
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.jenis.actions');
    }
}
