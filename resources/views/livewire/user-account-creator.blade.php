<div>
    <button
        wire:click="showAccountCreationModal"
        wire:loading.attr="disabled"
        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        New account
    </button>

    <x-jet-dialog-modal maxWidth="sm" wire:model="showAccountCreationModal">

        <x-slot name="title">
            {{ __('Create new account') }}
        </x-slot>

        <x-slot name="content">
            <x-jet-validation-errors class="mb-4" />

            <div>
                <x-jet-label for="role" value="{{ __('Role') }}" />
                <x-jet-input-error for="role" class="mt-2" />

                <select wire:model="role" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @foreach ($roles as $role)
                        <option value="{{$role->id}}"> {{ $role->title }} </option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input wire:model="name" class="block mt-1 w-full" type="text" required autocomplete="name"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input wire:model="email" class="block mt-1 w-full" type="email" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input wire:model="password" class="block mt-1 w-full" type="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input wire:model="password_confirmation" class="block mt-1 w-full" type="password" required autocomplete="new-password" />
            </div>


        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('showAccountCreationModal')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-button class="ml-2" wire:click="createUserAccount" wire:loading.attr="disabled">
                {{ __('Submit') }}
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
