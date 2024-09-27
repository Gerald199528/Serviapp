<?php

namespace App\Http\Livewire;
use App\Subcategory;
use Livewire\Component;
use Illuminate\Support\Facades\Auth; // Importa Auth
class Subcategoria extends Component
{

    public $subcategories = [];
    public $subcategory;

    public function mount($categoryId)
    {
        $this->categoryId = $categoryId;
        $this->subcategories = Subcategory::where('categories_id', $this->categoryId)->get();
    }

    public function updatedNombre($value)
    {
        $this->subcategories = Subcategory::where('nombre', $value)->get();
    }
    public function render()
    {

        return view('livewire.subcategoria');
    }
}
