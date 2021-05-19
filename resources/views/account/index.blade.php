<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <div class="flex">
                <div class="flex-shrink-0 flex items-center">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('User account') }}
                    </h2>
                </div>
            </div>

            @livewire('accounts.create-new-user-account')
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('accounts.user-account-list')
            </div>
        </div>
    </div>
</x-app-layout>
