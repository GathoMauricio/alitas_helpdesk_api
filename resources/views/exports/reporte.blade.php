<table>
    <thead>
        <tr>
            <th>Número de caso</th>
            <th>Estatus</th>
            <th>Prioridad</th>
            <th>Área</th>
            <th>Tipo</th>
            <th>Descripción</th>
            <th>Gerente/Sucursal</th>
            <th>Zona</th>
            <th>N° Seguimientos</th>
            <th>N° Adjuntos</th>
            <th>Fecha inicio</th>
            <th>Fecha cierre</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($casos as $caso)
            <tr>
                <td>{{ $caso->num_case }}</td>
                <td>{{ $caso->estatus->name }} {{ $caso->estatus->middle_name }} {{ $caso->estatus->last_name }}</td>
                <td>{{ $caso->prioridad->name }}</td>
                <td>{{ $caso->area_servicio->name }}</td>
                <td>{{ $caso->tipo_servicio->name }}</td>
                <td>{{ $caso->description }}</td>
                <td>{{ $caso->contacto->name }}</td>
                <td>{{ $caso->contacto->zona }}</td>
                <td>{{ $caso->seguimientos->count() }}</td>
                <td>{{ $caso->archivos->count() }}</td>
                <td>{{ $caso->created_at }}</td>
                <td>
                    @if ($caso->finished_at)
                        {{ $caso->finished_at }}
                    @else
                        N|A
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
