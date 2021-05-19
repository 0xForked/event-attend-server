<?php

namespace App\Http\Livewire\Accounts;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class CreateNewUserAccount extends Component
{
    public $showAccountCreationModal = false;

    public $role;

    public $name;

    public $email;

    public $password;

    public $password_confirmation;

    protected $rules = [
        'role' => 'required',
        'name' => 'required|min:6',
        'email' => 'required|email',
        'password' => 'required|min:6|same:password_confirmation',
        'password_confirmation' => 'min:6'
    ];

    public function showAccountCreationModal(): void
    {
        $this->resetErrorBag();

        $this->role = '1';
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->password_confirmation = '';

        $this->showAccountCreationModal = true;
    }

    public function createUserAccount(): void
    {
        $this->resetErrorBag();

        $validated_data = $this->validate();
        $validated_data['role_id'] = $validated_data['role'];
        $validated_data['password'] = Hash::make($validated_data['password']);
        unset($validated_data['role'], $validated_data['password_confirmation']);

        User::create($validated_data);

        $this->emit('accountListRefreshListener');

        $this->showAccountCreationModal = false;
    }

    public function render()
    {
        return view('livewire.user-account-creator', [
            'roles' => Role::whereNotIn('id', [3])->get()
        ]);
    }
}
