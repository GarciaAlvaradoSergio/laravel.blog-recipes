<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * Factory para el modelo Category.
 * 
 * Genera datos de prueba aleatorios para categorías con:
 * - Nombre único de 2 palabras
 * - Slug automático basado en el nombre
 * - Estado activo/inactivo aleatorio
 */
class CategoryFactory extends Factory
{
    /**
     * El modelo asociado a este factory.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define los atributos por defecto del modelo.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Genera un nombre único de 2 palabras
        $name = $this->faker->unique()->words(2, true);

        return [
            'name' => $name,                        // Nombre de la categoría
            'slug' => Str::slug($name),             // Slug generado a partir del nombre
            'is_active' => $this->faker->boolean(), // Estado aleatorio (true/false)
        ];
    }
}
