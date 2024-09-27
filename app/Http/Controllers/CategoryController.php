<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subcategory;
use App\Tipo;
use Illuminate\Http\Request;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;

class CategoryController extends Controller
{
    public function index()
    {
        if (auth()->user()->privilegio !== 'super_administrador') {
            return redirect()->route('home')->with('error', 'Acceso denegado');
        }

        $categories = Category::all();
        $tipos = Tipo::all();
        return view('admin.category.index', compact('categories', 'tipos'));
    }

    public function store(Request $request)

    {
        // Validar que el nombre de la categoría sea único
        $valida = $request->validate([
            'nombre_categoria' => 'unique:categories,nombre',
            'nombre_subcategoria' => 'unique:subcategories,nombre',
            'nombre_tipo' => 'unique:tipos,nombre',
        ]);

        // Crear una nueva categoría
        $category = Category::create([
            'id' => $request->input('category_id'),
            'nombre' => $request->input('nombre_categories'),
            'descripcion' => $request->input('descripcion'),
        ]);

        // Crear una nueva subcategoría
        $subcategory = Subcategory::create([
            'id' => $request->input('subcategory_id'),
            'nombre' => $request->input('nombre_subcategories'),
            'categories_id' => $category->id,
        ]);

        // Crear un nuevo tipo
        $tipo = Tipo::create([
            'id' => $request->input('tipo_id'),
            'nombre' => $request->input('nombre_tipo'),
            'subcategories_id' => $subcategory->id,
        ]);

        return back()->with('create','Categoría, subcategoría y tipo creados exitosamente');
    }

    public function show(Category $category)
    {
        return view('admin.category.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }


    public function update(UpdateRequest $request, Category $category)
    {
        $category->update($request->all());
        return back()->with('up','User deleted successfully');



    }

    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('success','User deleted successfully');
    }
}









