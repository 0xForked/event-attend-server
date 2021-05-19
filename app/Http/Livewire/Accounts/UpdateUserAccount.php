<?php

namespace App\Http\Livewire\Accounts;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;

class UpdateUserAccount extends Component
{
    public $showAccountUpdationModal = false;

    public $user;

    public $role;

    public $name;

    public $email;

    protected $rules = [
        'role' => 'required',
        'name' => 'required|min:6',
    ];

    public function showAccountUpdationModal(): void
    {
        $this->resetErrorBag();

        $this->role = $this->user->role_id;
        $this->name = $this->user->name;
        $this->email = $this->user->email;

        $this->showAccountUpdationModal = true;
    }

    public function updateUserData()
    {
        $validate_data = $this->validate();
        $validate_data['role_id'] = $validate_data['role'];
        unset($validate_data['role']);

        User::where('id', $this->user->id)
            ->update($validate_data);

        $this->emit('accountListRefreshListener');

        $this->showAccountUpdationModal = false;
    }

    public function render()
    {
        return view('livewire.user-account-updater', [
            'roles' => Role::whereNotIn('id', [3])->get()
        ]);
    }
}
