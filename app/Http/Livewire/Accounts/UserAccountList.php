<?php

namespace App\Http\Livewire\Accounts;

use App\Models\User;
use Livewire\Component;

class UserAccountList extends Component
{
    private const ADMIN_ROLE_ID = 1;

    private const COMMITTEE_ROLE_ID = 2;

    protected $listeners = ['accountListRefreshListener' => '$refresh'];

    public function render()
    {
        return view('livewire.user-account-table', [
            'users' => User::whereIn('role_id', [
                self::ADMIN_ROLE_ID, self::COMMITTEE_ROLE_ID
            ])->get()
        ]);
    }
}
