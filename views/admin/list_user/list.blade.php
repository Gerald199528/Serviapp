
<div class="container-fluid">
    <h6> ESTIMADO USUARIO EN ESTA SESSION PODRAS VISUALIZAR LOS DATOS PERSONALES DE LOS USUARIOS REGISTRADOS.</h6>

    </a>
    <div class="card">

      <div  class="card-body wizard-content">



<table  id="example" class="table table-striped" style="width:100%">

    <thead>

        <tr>

            <th>N°</th>
            <th>Nombre Completo</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Verficacion de cuenta</th>
            <th>Editar</th>
            <th>Eliminar</th>


        </tr>
    </thead>
    <tbody>
        @foreach ($user  as $user)
        <tr>
            <td>{{$user->id}}</td></td>
            <td>{{$user->name}}</td>
            <td>{{$user->apellido}}</td>
            <td>{{$user->email}} </td>
            <td>{{$user->google_id}} </td>

            <td>

                <button type="submit"     class="btn btn-warning"> <i class="mdi mdi-eyedropper"></i></button>

            </td>

            <td>



                {!!Form::model($user,['route'=>['list.destroy',$user->id ],'method'=>'DELETE', 'id'=>'Eliminar']) !!}
                {{ csrf_field()}}

                    <button type="submit"   class="btn btn-danger"><i class="mdi mdi-delete"></i></button>
                  </td>
                </tr>
                {!! Form::close() !!}
                  </td>
                </tr>

                @endforeach
    </tbody>
    </table>

