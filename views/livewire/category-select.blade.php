<div>
    <label for="categoriasId" >categoria</label>
   <select wire:model="categoriasId" id="categoriasId">
    @foreach ($categories as $category)
    <option values="">seleccione</option>
    <option values="{{$category->id}}">{{$category->nombre}}</option>

    @endforeach
</select>

   <label for="subcategoriesId" >subcategoria</label>
   <select wire:model="subcategoriesId" id="subcategoriesId">
    @foreach ($subcategories as $subcategory)
    <option values="">seleccione</option>
    <option values="{{$subcategory->id_s}}">{{$subcategory->nombre}}</option>

    @endforeach
   </select>
</div>

