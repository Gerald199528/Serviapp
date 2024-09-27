<?php

namespace App\Http\Livewire;
use App\Tipo;
use Livewire\Component;

class Tipos extends Component
{

    public $tipos = [];
    public $tipo;

    public function mount($tipoId)
    {
        $this->tipoId = $tipoId;
        $this->tipos = Tipo::where('subcategories_id', $this->tipoId)->get();
    }

    public function updatedNombre($value)
    {
        $this->tipos = Tipo::where('nombre', $value)->get();
    }
    public function render()
    {

        return view('livewire.tipos');
    }
}
