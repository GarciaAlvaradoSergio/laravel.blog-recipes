<div>
    <!-- 🔍 Barra de búsqueda (igual para ambos diseños) -->
    <div class="flex flex-col sm:flex-row gap-3 mb-6">
        <!-- Barra de búsqueda -->
        <div class="flex-1 relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400 dark:text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
            <input
                wire:model.live.300ms="search"
                type="text"
                placeholder="Buscar..."
                class="block w-full pl-10 pr-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400" />
        </div>

        <!-- Botón Agregar -->
        @if(isset($routes['create']))
        <div class="flex-shrink-0">
            <a href="{{ route($routes['create']) }}"
                class="inline-flex items-center px-4 py-3 bg-gray-800 dark:bg-gray-900 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                <svg class="-ml-1 mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Agregar nuevo
            </a>
        </div>
        @endif
    </div>

    <!-- 📱 Vista Card (solo en móvil) -->
    <div class="md:hidden space-y-4">
        @forelse ($items as $item)
        <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow border border-gray-200 dark:border-gray-700">
            @foreach ($columns as $key => $label)
            <div class="py-2 border-b border-gray-100 dark:border-gray-700 last:border-0">
                <div class="text-xs font-medium text-gray-500 dark:text-gray-400">{{ $label }}</div>
                <div class="text-sm text-gray-900 dark:text-gray-200">{{ $item->$key }}</div>
            </div>
            @endforeach
            <div class="pt-3 text-right">
                <button
                    wire:click="delete({{ $item->id }})"
                    class="text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-300 text-sm">
                    Eliminar
                </button>
                @if(isset($routes['edit']))
                <a href="{{ route($routes['edit'], $item->id) }}"
                    class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300 text-sm">
                    Editar
                </a>
                @endif
            </div>
        </div>
        @empty
        <div class="text-center p-4 text-gray-500 dark:text-gray-400">
            No se encontraron resultados.
        </div>
        @endforelse
    </div>

    <!-- 🖥️ Vista Tabla (solo en desktop) -->
    <div class="hidden md:block">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        @foreach ($columns as $key => $label)
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                            {{ $label }}
                        </th>
                        @endforeach
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                    @forelse ($items as $item)
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                        @foreach ($columns as $key => $label)
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">
                            {{ $item->$key }}
                        </td>
                        @endforeach
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button
                                wire:click="delete({{ $item->id }})"
                                class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">
                                Eliminar
                            </button>
                            @if(isset($routes['edit']))
                            <a href="{{ route($routes['edit'], $item->id) }}"
                                class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300">
                                Editar
                            </a>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="{{ count($columns) + 1 }}" class="px-6 py-4 text-center text-sm text-gray-500 dark:text-gray-400">
                            No se encontraron resultados.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- 📌 Paginación (compartida) -->
    <div class="mt-6">
        {{ $items->links() }}
    </div>
</div>