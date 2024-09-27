
<div class="container-fluid">
    <h4> Registrar Categoría.</h4>
    <br>
    <a type="button"     class="btn btn-success dropdown-toggle text-white" aria-haspopup="true" ia-expanded="false" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        <i class="mdi mdi-move-resize-variant"></i> Nueva Categoría
    </a>
    <div class="card">

      <div  class="card-body wizard-content">



@include('admin.category.modal')
<table  id="example" class="table table-striped" style="width:100%">

    <thead>

        <tr>

            <th>Id</th>
            <th>Categoría</th>
            <th>Subcategoría</th>
            <th>Tipos</th>
            <th>Descripción</th>
            <th>Fecha</th>
            
            <th>Última Actualización</th>
            <th>Editar</th>
            <th>Eliminar</th>


        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{$category->id}}</td></td>
            <td>{{$category->nombre}}</td>
            <td>@livewire('subcategoria', ['categoryId' => $category->id])</td>

            @foreach ($tipos as $tipo)
                @if ($tipo->subcategories_id == $category->id) <!-- Asegúrate de que el tipo pertenece a la categoría -->
                    <td>@livewire('tipos', ['tipoId' => $tipo->id])</td>
                @endif

            @endforeach
            <td>{{$category->descripcion}}</td>
            <td>{{$category->created_at}} </td>
            <td>{{$category->updated_at}}</td>
            
            <td>
                <a type="button"   class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editeModal{{$category->id}}" data-bs-whatever="@mdo" >  <i class="mdi mdi-eyedropper"></i></a>

                @include('admin.category.edit')
            </td>

            <td>
                {!!Form::model($category,['route'=>['categories.destroy',$category->id ],'method'=>'DELETE', 'id'=>'Category']) !!}
                {{ csrf_field()}}

                    <button type="submit"   class="btn btn-danger delete-button Category"  class="btn btn-danger"><i class="mdi mdi-delete"></i></button>
                  </td>
                </tr>
                {!! Form::close() !!}




        @endforeach
    </tbody>
    </table>

