<div>
    <a href="#" wire:click="confirmAccountDeletion" class="text-indigo-600 hover:text-indigo-900">Delete</a>

    <x-jet-confirmation-modal wire:model="confirmAccountDeletion">
        <x-slot name="title">
            {{ __('Confirmation') }}
        </x-slot>

        <x-slot name="content">
            <p>
                Are you sure you want to delete this account? Once this selected account is deleted, <br>
                resources and data will be permanently destroyed.
            </p>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('confirmAccountDeletion')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-2" wire:click="destroyAccount({{$user}})" wire:loading.attr="disabled">
                {{ __('Delete Account') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-confirmation-modal>
</div>
