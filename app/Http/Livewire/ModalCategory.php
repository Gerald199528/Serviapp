<?php

namespace App\Http\Livewire;

use App\Category;
use App\Subcategory;
use App\Tipo;
use Livewire\Component;

class ModalCategory extends Component
{
    public $categories;
    public $subcategories = [];
    public $tipos = [];
    public $selectedCategory = null;
    public $selectedSubcategory = null;
    public $selectedTipo = null;


    public function mount()
    {
        $this->categories = Category::all();
        $this->subcategories = collect();
        $this->tipos = collect();
    }

    public function updatedSelectedCategory($category)
    {
        $this->subcategories = Subcategory::where('categories_id', $category)->get();
        $this->selectedSubcategory = null;
        $this->tipos = [];
        $this->emit('contentChanged');
    }

    public function updatedSelectedSubcategory($subcategory)
    {
        $this->tipos = Tipo::where('subcategories_id', $subcategory)->get();
        $this->emit('contentChanged');
    }
    public function render()
    {
        return view('livewire.modal-category');
    }
}












namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Type;

class DynamicSelects extends Component
{
    public $categories;
    public $subcategories;
    public $types;
    public $selectedCategory = null;
    public $selectedSubcategory = null;
    public $selectedType = null;

    public function mount()
    {
        $this->categories = Category::all();
        $this->subcategories = collect();
        $this->types = collect();
    }

    public function updatedSelectedCategory($categoryId)
    {
        $this->subcategories = Subcategory::where('category_id', $categoryId)->get();
        $this->selectedSubcategory = null;
        $this->types = collect();
        $this->selectedType = null;
    }

    public function updatedSelectedSubcategory($subcategoryId)
    {
        if (!is_null($subcategoryId)) {
            $this->types = Type::where('subcategory_id', $subcategoryId)->get();
            $this->selectedType = null;
        }
    }

    public function render()
    {
        return view('livewire.dynamic-selects');
    }
}
