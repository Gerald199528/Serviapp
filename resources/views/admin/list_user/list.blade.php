<div class="container-fluid">
    <h5> Acceso a Datos de Usuarios Registrados: Como administrador, tienes acceso a la información personal de los usuarios registrados. </h5>
<br>
    </a>
    <div class="card">
      <div  class="card-body wizard-content">
<table  id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>N°</th>
            <th>Cedula</th>
            <th>Nombre Completo</th>
            <th>Apellido Completo</th>
            <th>Email</th>
            <th>Verficacion de cuenta</th>
            <th>Imagen de perfil</th>
            <th>Nivel de privilegio</th>
            <th>Seleccione privilegio</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($filteredUsers as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>@livewire('cedula-all', ['user_id' => $user->id])</td>
            <td>{{$user->name}}</td>
            <td>{{$user->apellido}}</td>
            <td>{{$user->email}} </td>
            <td>{{$user->google_id}} </td>
            <td>    @livewire('imagen-all', ['user_id' => $user->id])</td>
            <td>
                @if($user->privilegio == 'super_administrador')
                    <span class="badge bg-success" style="font-size: 18px;">{{ $user->privilegio }}</span>
                @elseif($user->privilegio == 'usuario')
                    <span class="badge bg-info" style="font-size: 18px;">{{ $user->privilegio }}</span>
                @else
                    <span style="font-size: 18px;">{{ $user->privilegio }}</span>
                @endif
            </td>
            <td>
                <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $user->id }}">
                    <i class="fa-solid fa-users"></i>
                </a>
                @include('admin.list_user.privilegio', ['modalId' => $user->id])
            </td>
            <td>
                <a type="button" class="btn btn-warning " data-bs-toggle="modal" data-bs-target="#exampleModalEditar{{ $user->id }}">
                    <i class="mdi mdi-eyedropper"></i></a>
                @include('admin.list_user.modal', ['user' => $user, 'dato' => $datos->where('id', $user->id)->first()])
            </td>
            <td>
                {!!Form::model($user,['route'=>['list.destroy',$user->id ],'method'=>'DELETE', 'id'=>'Eliminar']) !!}
                {{ csrf_field()}}
                <button type="submit" class="btn btn-danger delete-button Eliminar"><i class="mdi mdi-delete"></i></button>
                  </td>
                {!! Form::close() !!}
                @endforeach
    </tbody>
    </table>