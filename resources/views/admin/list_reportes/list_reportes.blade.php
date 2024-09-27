<div class="container-fluid">
    <h5 style="font-size: 20px;">Estimado usuario, en esta sesión podrás consultar los reportes que has generado.</h5>
    <br>
    <div class="card">
        <div class="card-body wizard-content">
            <div class="table-responsive">
                <table id="example" class="table table-striped" style="width:100%; font-size: 16px;">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Cédula</th>
                            <th>Nombre del Usuario</th>
                            <th>Apellido del Usuario</th>
                            <th>Email</th>
                            <th>Tipo de Reporte</th>
                            <th>Categoría del Reporte</th>
                            <th>Tipo de Problema</th>
                            <th>Geolocalización Exacta</th>
                            <th>Dirección Exacta</th>
                            <th>Estatus</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_reportes as $reporte)
                        <tr>
                            <td>{{ $reporte->user_id }}</td>
                            <td>@livewire('cedula')</td>
                            <td>@livewire('name-user')</td>
                            <td>@livewire('apellido-user')</td>
                            <td>@livewire('email-user')</td>
                            <td>{{($reporte->category_id)}}</td>
                            <td>{{ ($reporte->subcategory_id)}}</td>
                            <td>{{ ($reporte->tipo_id) }}</td>
                            <td>{{ $reporte->latitude }} / {{ $reporte->longitude }}</td>
                            <td>{{ $reporte->direccion }}</td>
                            <td>
                                @if ($reporte->estatus == 'procesado')
                                    <span class="badge bg-success">Procesado</span>
                                @elseif ($reporte->estatus == 'cancelado')
                                    <span class="badge bg-danger">Cancelado</span>
                                @else
                                    <span class="badge bg-info">En cola</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>