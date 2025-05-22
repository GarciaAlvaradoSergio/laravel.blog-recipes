<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Update Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (session()->has('message'))
                        <div class="mb-4 text-green-600">
                            {{ session('message') }}
                        </div>
                    @endif

                    <form wire:submit.prevent="updateCategory" class="space-y-6">
                        <!-- Campo de nombre -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" wire:model.defer="name" type="text" class="mt-1 block w-full" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <!-- Campo de is_active -->
                        <div class="flex items-center gap-2">
                            <input id="is_active" type="checkbox" wire:model.defer="is_active" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" />
                            <label for="is_active" class="text-sm text-gray-600 dark:text-gray-300">
                                {{ __('Active') }}
                            </label>
                        </div>

                        <div>
                            <x-primary-button>{{ __('Update') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
