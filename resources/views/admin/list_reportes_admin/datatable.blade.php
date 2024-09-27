<div class="container-fluid">
    <h5>Estimado usuario, aquí podrás consultar el informe que has creado.</h5>
    <br>
    <div class="card">
        <div class="card-body wizard-content">
            <div class="table-responsive">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Cedula</th>
                            <th>Nombre del Usuario</th>
                            <th>Apellido del Usuario</th>
                            <th>Email</th>                          
                            <th>Estatus</th>  
                            <th>Confirmar Estatus</th>                                   
                            <th>PDF</th>
                            <th>Excel</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_reportes as $reporte)
                        <tr>                   
                            <td>{{ $reporte->user_id }}</td>
                            <td>@livewire('cedula-all', ['user_id' => $reporte->user_id])</td>
                            @foreach ($users as $user)
                                @if ($user->id == $reporte->user_id)                                  
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->apellido }}</td>
                                    <td>{{ $user->email }}</td>
                                @endif
                            @endforeach                           
                            <td>
                                @if ($reporte->estatus == 'procesado')                                
                                <span class="badge bg-success">Procesado</span>
                            @elseif ($reporte->estatus == 'cancelado')
                                <span class="badge bg-danger">Cancelado</span>
                            @else
                                <span class="badge bg-info">En cola</span>
                            @endif                          
                            </td>
                            <td>
                                <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $reporte->id }}" class="btn btn-info">
                                    <i class="fa-solid fa-tags"></i>                            
                                </a> 
                                @include('admin.list_reportes_admin.modal', ['reporteId' => $reporte->id])                      
                            </td>
                            <td>
                                <a href="{{ route('reporte.pdf', ['id' => $reporte->user_id]) }}" class="btn btn-info">
                                    <i class="fa-regular fa-file-pdf"></i>
                                </a>
                            </td>
                            <td><a type="button" href="{{ route('reporte.excel', ['id' => $reporte->id]) }}" class="btn btn-success"><i class="fas fa-file-excel"></i></a></td>

                            <td>
                                {!! Form::model($reporte, ['route' => ['reportes.destroy', $reporte->id], 'method' => 'DELETE']) !!}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger delete-button Reporte"><i class="mdi mdi-delete"></i></button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>