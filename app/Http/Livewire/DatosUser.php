<?php

namespace App\Http\Livewire;
use App\User;
use App\Datos;
use Livewire\Component;

class DatosUser extends Component
{
    public $users = [];
    public $user;
    public $datos = [];
    public $dato;

    public function mount()
    {
       // Obtiene solo las imágenes del usuario autenticado
       $this->user = auth()->user();
       $this->users = User::where('id', $this->user->id)->get();

       // Obtiene los datos del usuario autenticado
       $this->datos = Datos::where('id_dt', $this->user->id)->get();
    }
   public function updatedUser($value)
   {
       $this->users = User::where('id', $value)->get();
       $this->users = $this->users->first()->id ?? null;

   }



    public function render()
    {
    {
        return view('livewire.datos-user');
    }
}
}
