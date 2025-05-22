<?php

namespace App\Livewire\Administrator\Category\Partials;

use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Component;

class CreateCategory extends Component
{
    public $name;
    public $slug;
    public $is_active = true;

    protected $rules = [
        'name' => ['required', 'string', 'max:255', 'unique:categories,name', 'regex:/^[\p{L}\s]+$/u'],
    ];

    public function createCategory()
    {
        $this->validate();

        Category::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'is_active' => true
        ]);

        session()->flash('success', 'Categoría creada exitosamente.');

        return redirect()->route('admin.categories');
    }

    public function render()
    {
        return view('livewire.administrator.category.partials.create-category');
    }
}
