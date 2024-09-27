
<div class="container-fluid">
    <h6> REGISTRA NUEVA CATEGORIA SI NO EXITE UNA.</h6>
    <a type="button"     class="btn btn-success dropdown-toggle text-white" aria-haspopup="true" ia-expanded="false" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        <i class="mdi mdi-move-resize-variant"></i>   Nueva categoria
    </a>
    <div class="card">

      <div  class="card-body wizard-content">



            @include('admin.category.modal')
<table  id="example" class="table table-striped" style="width:100%">

    <thead>

        <tr>

            <th>N°</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Fecha/Hora Creada de la categoria</th>
            <th>Ultima Actualizacion de la categoria</th>
            <th>Editar</th>
            <th>Eliminar</th>


        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{$category->id}}</td></td>
            <td>{{$category->nombre}}</td>
            <td>{{$category->descripcion}}</td>
            <td>{{$category->created_at}} </td>
            <td>{{$category->updated_at}}</td>
            <td>
                <a type="button"   class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editeModal{{$category->id}}" data-bs-whatever="@mdo" >  <i class="mdi mdi-eyedropper"></i></a>

                @include('admin.category.edit')

            </td>

            <td>


                {!!Form::model($category,['route'=>['categories.destroy',$category->id ],'method'=>'DELETE', 'id'=>'Eliminar']) !!}
                {{ csrf_field()}}

                    <button type="submit"   class="btn btn-danger"><i class="mdi mdi-delete"></i></button>
                  </td>
                </tr>
                {!! Form::close() !!}
        @endforeach
    </tbody>
    </table>

