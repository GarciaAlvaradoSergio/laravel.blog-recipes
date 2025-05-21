<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Modelo Category - Representa una categoría en el sistema.
 * 
 * Características principales:
 * - Uso de SoftDeletes para eliminación lógica
 * - Atributos asignables masivamente (fillable)
 * - Definición de casts para tipos de datos específicos
 */
class Category extends Model
{
    // Habilita la funcionalidad de factories para crear datos de prueba
    use HasFactory;

    // Habilita eliminación suave (soft delete)
    use SoftDeletes;

    /**
     * Atributos que son asignables masivamente (Mass Assignment).
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',      // Nombre de la categoría
        'slug',      // Slug/URL amigable
        'is_active', // Estado de la categoría (activa/inactiva)
    ];

    /**
     * Conversiones de tipos para los atributos del modelo.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'is_active' => 'boolean', // Asegura que is_active se maneje como booleano
            // 'created_at' => 'datetime', // Ejemplo adicional (ya viene por defecto)
            // 'deleted_at' => 'datetime', // Automático por SoftDeletes
        ];
    }

    /**
     * Ejemplo de relación con productos (opcional)
     * public function products()
     * {
     *    return $this->hasMany(Product::class);
     * }
     */
}
