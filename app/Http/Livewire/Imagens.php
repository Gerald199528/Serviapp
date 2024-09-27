<?php
namespace App\Http\Livewire;
use App\Imagen;
use Livewire\Component;
use Illuminate\Support\Facades\Auth; // Importa Auth

class Imagens extends Component
{
    public $imagens = [];
    public $imagen;

    public function mount()
    {
        // Obtiene solo las imágenes del usuario autenticado
        $this->imagens = Imagen::where('id', Auth::id())->get();
        $this->imagen = collect();
    }

    public function updatedImagen($value)
    {
        $this->imagens  = Imagen::where('url', $value)->get();
        $this->imagens = $this->imagen->first()->url ?? null;
    }

    public function render()
    {
        return view('livewire.imagens');
    }
}
