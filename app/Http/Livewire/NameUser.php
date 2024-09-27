<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth; // No olvides importar la fachada Auth
use Livewire\Component;

class NameUser extends Component
{
    public $user;

    public function mount()
    {
        // Obtiene los datos del usuario autenticado
        $this->user = Auth::user();
    }

    public function render()
    {
        return view('livewire.name-user');
    }
}
