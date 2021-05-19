<?php

namespace App\Http\Livewire\Accounts;

use App\Models\User;
use Livewire\Component;

class DeleteSelectedUserAccount extends Component
{
    public $confirmAccountDeletion = false;

    public $user;

    public function confirmAccountDeletion(): void
    {
        $this->confirmAccountDeletion = true;
    }

    public function destroyAccount(User $user): void
    {
        $user->delete();

        $this->confirmAccountDeletion = false;

        $this->emit('accountListRefreshListener');
    }

    public function render()
    {
        return view('livewire.user-account-delete-confirmation');
    }
}
