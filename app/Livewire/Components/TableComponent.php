<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Livewire\WithPagination;

class TableComponent extends Component
{
    use WithPagination;

    public $modelClass;
    public $columns = [];
    public $routes = [];
    public $search = '';

    protected $updateQueryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount($modelClass, $columns, $routes)
    {
        $this->modelClass = $modelClass;
        $this->columns = $columns;
        $this->routes = $routes;
    }

    public function delete($id)
    {
        if ($item = $this->modelClass::find($id)) {
            $item->delete();
            $this->resetPage(); // Importante para evitar errores con paginación
        }
    }


    public function getItemsProperty()
    {
        return $this->modelClass::query()
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    foreach ($this->columns as $column => $label) {
                        $q->orWhere($column, 'like', '%' . $this->search . '%');
                    }
                });
            })
            ->latest()
            ->paginate(5);
    }

    public function render()
    {
        return view('livewire.components.table-component', ['items' => $this->items]);
    }
}
