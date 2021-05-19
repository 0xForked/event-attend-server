<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <div class="flex">
                <div class="flex-shrink-0 flex items-center">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Participants management') }}
                    </h2>
                </div>
            </div>
            <div class="inline-flex justify-center">
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition">
                                Action

                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </x-slot>

                        <x-slot name="content">

                            <x-jet-dropdown-link href="#">
                                {{ __('New participant') }}
                            </x-jet-dropdown-link>

                            <div class="border-t border-gray-100"></div>

                            <x-jet-dropdown-link href="#">
                                {{ __('Import from Excel') }}
                            </x-jet-dropdown-link>

                            <div class="border-t border-gray-100"></div>

                            <x-jet-dropdown-link href="#">
                                {{ __('Export to Excel') }}
                            </x-jet-dropdown-link>

                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            </div>
        </div>
    </div>
</x-app-layout>
