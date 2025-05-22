<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (session()->has('success'))
                    <div class="mb-4 text-green-600 bg-green-100 border border-green-300 rounded px-4 py-2">
                        {{ session('success') }}
                    </div>
                    @endif
                    @livewire('components.table-component', [
                    'modelClass' => 'App\Models\Category',
                    'columns' => [
                    'id' => 'ID',
                    'name' => 'Name',
                    'created_at' => 'Created At',
                    'updated_at' => 'Updated At',
                    ],
                    'items' => $categories,
                    'routes' => [
                    'create' => 'admin.categories.create',
                    'edit' => 'admin.categories.edit',
                    ],
                    ])
                </div>
            </div>
        </div>
    </div>
</div>