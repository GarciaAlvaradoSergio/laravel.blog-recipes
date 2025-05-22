<?php

namespace App\Livewire\Administrator\Category\Partials;

use App\Models\Category;
use Illuminate\Validation\Rule;
use Livewire\Component;

class UpdateCategory extends Component
{
    public Category $category;
    public $name;
    public $is_active;

    public function mount(Category $category)
    {
        $this->category = $category;
        $this->name = $category->name;
        $this->is_active = $category->is_active;
    }

   public function updateCategory()
    {
        $this->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('categories', 'name')->ignore($this->category->id),
                'regex:/^[\pL\s\-]+$/u', // Solo letras, espacios y guiones
            ],
        ]);

        $this->category->update([
            'name' => $this->name,
            'is_active' => $this->is_active,
        ]);

        session()->flash('success', '¡Categoría actualizada exitosamente!');
        
        return redirect()->route('admin.categories');
    }

    public function render()
    {
        return view('livewire.administrator.category.partials.update-category');
    }
}
