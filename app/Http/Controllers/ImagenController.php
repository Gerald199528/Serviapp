<?php

namespace App\Http\Controllers;
use App\Imagen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\UserController;
class ImagenController extends Controller
{
    public function index()    {

        $imagens = Imagen::where('id', auth()->user()->id)->paginate(1);
        return view('admin.user.index', compact('imagens'));
    }
    public function create()
    {
        return view('admin.user.create');

    }

    public function Store(Request $request)

    {

        $request->validate([

            'file' => 'required|image|max:2048',


        ]);

        // Encuentra la imagen existente del usuario y la elimina
    $existingImage = Imagen::where('id', auth()->id())->first();
    if ($existingImage) {
        $existingImage->delete();
    }

      $imagens = $request->file('file')->store('public/User');

       $url  = Storage::url($imagens);

       Imagen::create([
        'id' => auth()->user()->id,
        'url' => $url,]);
        return redirect()->route('user.index');

    }

    public function show(Imagen $images)
    {
        return redirect()->route('user.index');
    }



    public function destroy(Imagen $imagens)
    {

    }
}










