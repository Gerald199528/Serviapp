<?php
namespace App\Http\Livewire;
use App\Datos;
use Livewire\Component;

class CedulaAll extends Component
{
    public $user_id;
    public $datos;

    public function mount($user_id)
    {
        $this->user_id = $user_id;
        $this->datos = Datos::where('id', $this->user_id)->first();
    }

    public function render()
    {
        return view('livewire.cedula-all', ['datos' => $this->datos]);
    }
}
