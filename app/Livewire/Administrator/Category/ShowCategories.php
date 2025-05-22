<?php

namespace App\Livewire\Administrator\Category;

use App\Models\Category;
use Livewire\Component;

class ShowCategories extends Component
{
    public function render()
    {
        return view('livewire.administrator.category.show-categories', [
            'categories' => Category::latest()->paginate(10),
        ]);
    }
}
