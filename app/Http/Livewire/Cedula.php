<?php

namespace App\Http\Livewire;

use App\Datos;
use Illuminate\Support\Facades\Auth; // No olvides importar la fachada Auth
use Livewire\Component;

class Cedula extends Component
{
    public $dato;

    public function mount()
    {
        // Obtiene los datos del usuario autenticado
        $user_id = Auth::id(); // Obtiene el ID del usuario actualmente autenticado
        $this->dato = Datos::where('id', $user_id)->first(); // Obtiene los datos del usuario
    }

    public function render()
    {
        return view('livewire.cedula');
    }
}

