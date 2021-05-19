<div>
    <x-jet-dropdown-link
        wire:click="showParticipantCreationModal"
        wire:loading.attr="disabled">
        {{ __('New participant') }}
    </x-jet-dropdown-link>

    <x-jet-dialog-modal maxWidth="sm" wire:model="showParticipantCreationModal" class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50">

        <x-slot name="title">
            {{ __('Add new participant') }}
        </x-slot>

        <x-slot name="content">
            <x-jet-validation-errors class="mb-4" />

            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input wire:model="name" class="block mt-1 w-full" type="text" required autocomplete="name"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input wire:model="email" class="block mt-1 w-full" type="email" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="phone" value="{{ __('Phone') }}" />
                <x-jet-input wire:model="phone" class="block mt-1 w-full" type="text" required />
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('showParticipantCreationModal')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-button class="ml-2" wire:click="#" wire:loading.attr="disabled">
                {{ __('Submit') }}
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
