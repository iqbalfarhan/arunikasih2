<?php

namespace App\Livewire\Pages\User;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class Actions extends Component
{
    public $show = false;

    public UserForm $form;

    #[On('createUser')]
    public function createUser()
    {
        $this->form->reset();
        $this->show = true;
    }

    public function simpan()
    {
        if (isset($this->form->user)) {
            $this->form->update();
        }
        else{
            $this->form->store();
        }
        $this->closeModal();
    }

    #[On('editUser')]
    public function editUser(User $user)
    {
        $this->show = true;
        $this->form->setUser($user);
    }

    public function closeModal()
    {
        $this->dispatch('reload');
        $this->show = false;
    }

    #[On('deleteUser')]
    public function delete(User $user)
    {
        $user->delete();
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.pages.user.actions');
    }
}
