<div>
    <a href="#" wire:click="showAccountUpdationModal" class="text-indigo-600 hover:text-indigo-900">Edit</a>

    <x-jet-dialog-modal id="update-user-{{$user->id}}" maxWidth="sm" wire:model="showAccountUpdationModal">

        <x-slot name="title">
            {{ __('Update account') }}
        </x-slot>

        <x-slot name="content">
            <x-jet-validation-errors class="mb-4" />

            <div>
                <x-jet-label for="role" value="{{ __('Role') }}" />
                <x-jet-input-error for="role" class="mt-2" />

                <select wire:model="role" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @foreach ($roles as $role)
                        <option value="{{$role->id}}" {{ ($role->id === $role) ? 'selected' : '' }}>
                            {{ $role->title }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input wire:model="name" class="block mt-1 w-full" type="text" required autocomplete="name"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input wire:model="email" class="block mt-1 w-full" type="email" disabled/>
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('showAccountUpdationModal')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-button class="ml-2" wire:click="updateUserData" wire:loading.attr="disabled">
                {{ __('Submit') }}
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
