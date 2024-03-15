<?php

namespace App\Livewire\Pages\Paket;

use App\Livewire\Forms\PaketForm;
use App\Models\Jenis;
use App\Models\Paket;
use Livewire\Attributes\On;
use Livewire\Component;

class Actions extends Component
{
    public $show = false;

    public PaketForm $form;

    #[On('createPaket')]
    public function createPaket()
    {
        $this->form->reset();
        $this->show = true;
    }

    public function simpan()
    {
        if (isset($this->form->paket)) {
            $this->form->update();
        }
        else{
            $this->form->store();
        }
        $this->closeModal();
    }

    #[On('editPaket')]
    public function editPaket(Paket $paket)
    {
        $this->show = true;
        $this->form->setPaket($paket);
    }

    public function closeModal()
    {
        $this->dispatch('reload');
        $this->show = false;
    }

    #[On('deletePaket')]
    public function delete(Paket $paket)
    {
        $paket->delete();
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.paket.actions', [
            'jenises' => Jenis::pluck("name", 'id')
        ]);
    }
}
