<x-public-layout>
    <x-slot name="title">Welcome</x-slot>

    <div class="container mt-5">
        <h1 class="display-4 fw-bold text-center">Welcome to Our Application</h1>
        <p class="mt-3 text-center">This is a simple welcome page.</p>
    </div>

    <div class="container py-4">
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card h-100 shadow-sm rounded-4">
                    <img src="https://images.unsplash.com/photo-1559847844-5315695dadae" class="card-img-top" alt="Hamburguesa" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h5 class="card-title mb-0">Hamburguesa Gourmet</h5>
                            <span class="badge bg-danger-subtle text-danger fw-medium">Carnes</span>
                        </div>
                        <div class="text-muted small mb-2 d-flex align-items-center">
                            <span class="me-3">⭐ 4.8 (120)</span>
                            <span>🕒 25 min</span>
                        </div>
                        <p class="card-text text-muted small">Jugosa hamburguesa con queso cheddar, tocino crujiente y salsa especial.</p>
                        <a href="#" class="text-warning text-decoration-none fw-medium small">Ver receta →</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card h-100 shadow-sm rounded-4">
                    <img src="https://images.unsplash.com/photo-1518779578993-ec3579fee39f" class="card-img-top" alt="Sopa" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h5 class="card-title mb-0">Sopa de Calabaza</h5>
                            <span class="badge bg-success-subtle text-success fw-medium">Vegetariana</span>
                        </div>
                        <div class="text-muted small mb-2 d-flex align-items-center">
                            <span class="me-3">⭐ 4.5 (86)</span>
                            <span>🕒 40 min</span>
                        </div>
                        <p class="card-text text-muted small">Cremosa sopa de calabaza asada con un toque de jengibre y nuez moscada.</p>
                        <a href="#" class="text-warning text-decoration-none fw-medium small">Ver receta →</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card h-100 shadow-sm rounded-4">
                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38" class="card-img-top" alt="Pizza" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h5 class="card-title mb-0">Pizza Margherita</h5>
                            <span class="badge bg-warning-subtle text-warning fw-medium">Italiana</span>
                        </div>
                        <div class="text-muted small mb-2 d-flex align-items-center">
                            <span class="me-3">⭐ 4.9 (210)</span>
                            <span>🕒 1 hora</span>
                        </div>
                        <p class="card-text text-muted small">Clásica pizza con salsa de tomate, mozzarella fresca y albahaca.</p>
                        <a href="#" class="text-warning text-decoration-none fw-medium small">Ver receta →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>

