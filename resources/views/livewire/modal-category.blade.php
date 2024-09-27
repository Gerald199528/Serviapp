

    <div class="col-md-12" >
        <div class="card">
            <div class="card-body" >
    @livewireStyles
    <label>Seleccione el tipo de reporte </label>
        <select wire:model="selectedCategory"  name="category_id"  class="form-select mb-3" style="width: 100%;" required>
            <option value="">Tipo de reporte </option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->nombre}}</option>
            @endforeach
        </select>



        @if (!is_null($selectedCategory))
        <label> Seleccione una categoria  </label>
            <select wire:model="selectedSubcategory"  name="subcategory_id"  class="form-select mb-3" style="width: 100%;" required>
                <option value="">Seleccione una categoria </option>
                @foreach($subcategories as $subcategory)
                    <option value="{{ $subcategory->id }}">{{ $subcategory->nombre }}</option>
                @endforeach
            </select>
        @endif


        @if (!is_null($selectedSubcategory))
    <label>Selecciona una Subcategoria  </label>
            <select wire:model="selectedTipo"   name="tipo_id" class="form-select mb-3" style="width: 100%;" required>
                <option value=""> Selecciona una Subcategoria </option>
                @foreach($tipos as $tipo)
                    <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                @endforeach
            </select>
        @endif



    @livewireScripts
</div>
</div>
</div>
