<?php
namespace App\Http\Livewire;
use App\Imagen;
use Livewire\Component;
class ImagenAll extends Component
{
    public $user_id;
    public $image;
    
    public function mount($user_id)
    {
        $this->user_id = $user_id;
        $this->image = Imagen::where('id', $user_id)->first();
    }
    
    public function render()
    {
        return view('livewire.imagen-all');
    }
}

