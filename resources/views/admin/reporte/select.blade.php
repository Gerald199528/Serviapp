

<div class="col-md-12" >
    <div class="card">
        <div class="card-body" >

<label>Seleccione el tipo de reporte </label>
<select name="category_id" id="categoria" class="form-select mb-3" style="width: 100%;" required>
    <option value="">Tipo de reporte</option>
    @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->nombre }}</option>
    @endforeach
</select>




    <label> Seleccione una categoria  </label>
    <select id="subcategoria" name="subcategory_id" class="form-select mb-3" style="width: 100%;" required>
        <option value="">Seleccione una categoría</option>
        @foreach($subcategories as $subcategory)
            <option value="{{ $subcategory->id }}">{{ $subcategory->nombre }}</option>
        @endforeach
    </select>



<label>Selecciona una Subcategoria  </label>
<select id="tipo" name="tipo_id" class="form-select mb-3" style="width: 100%;" required>
    <option value="">Seleccione una subcategoría</option>
    @foreach($tipos as $tipo)
        <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
    @endforeach
</select>




</div>
</div>
</div>
