<x-public-layout>
    <x-slot name="title">Welcome</x-slot>

    <div class="container mx-auto mt-10">
        <h1 class="text-4xl font-bold text-center">Welcome to Our Application</h1>
        <p class="mt-4 text-center">This is a simple welcome page.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
        <!-- Card 1 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1559847844-5315695dadae" alt="Hamburguesa">
            <div class="p-6">
                <div class="flex justify-between items-center mb-2">
                    <h3 class="text-lg font-semibold text-gray-900">Hamburguesa Gourmet</h3>
                    <span class="text-xs font-medium px-2 py-1 rounded-full bg-red-100 text-red-800">Carnes</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <span class="mr-3">⭐ 4.8 (120)</span>
                    <span>🕒 25 min</span>
                </div>
                <p class="text-gray-600 text-sm mb-4">Jugosa hamburguesa con queso cheddar, tocino crujiente y salsa especial.</p>
                <button class="text-sm text-amber-600 hover:text-amber-700 font-medium">Ver receta →</button>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1518779578993-ec3579fee39f" alt="Sopa">
            <div class="p-6">
                <div class="flex justify-between items-center mb-2">
                    <h3 class="text-lg font-semibold text-gray-900">Sopa de Calabaza</h3>
                    <span class="text-xs font-medium px-2 py-1 rounded-full bg-green-100 text-green-800">Vegetariana</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <span class="mr-3">⭐ 4.5 (86)</span>
                    <span>🕒 40 min</span>
                </div>
                <p class="text-gray-600 text-sm mb-4">Cremosa sopa de calabaza asada con un toque de jengibre y nuez moscada.</p>
                <button class="text-sm text-amber-600 hover:text-amber-700 font-medium">Ver receta →</button>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38" alt="Pizza">
            <div class="p-6">
                <div class="flex justify-between items-center mb-2">
                    <h3 class="text-lg font-semibold text-gray-900">Pizza Margherita</h3>
                    <span class="text-xs font-medium px-2 py-1 rounded-full bg-yellow-100 text-yellow-800">Italiana</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <span class="mr-3">⭐ 4.9 (210)</span>
                    <span>🕒 1 hora</span>
                </div>
                <p class="text-gray-600 text-sm mb-4">Clásica pizza con salsa de tomate, mozzarella fresca y albahaca.</p>
                <button class="text-sm text-amber-600 hover:text-amber-700 font-medium">Ver receta →</button>
            </div>
        </div>
    </div>
</x-public-layout>