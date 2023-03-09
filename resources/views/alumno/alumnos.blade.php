@extends('main')

@section('contenido')
<table>
    <thead>
      <tr>
        <th>Num. Control</th>
        <th>Nombre</th>
        <th>Grupo</th>
        <th>Sexo</th>
        <th>Fecha de nacimiento</th>
        <th>Ver reportes</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($alumnos as $a)
        <tr>
          <td>{{ $a->Num_Control }}</td>
          <td>{{ $a->Nombre }}</td>
          <td>{{ $a->Grupo }}</td>
          <td>
            @if($a->Sexo == 1)
              Hombre
            @else
              Mujer
            @endif
          </td>
          <td>{{ $a->Fecha_de_nacimiento }}</td>
          <td><a href="#">Ver reportes</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <!-- div class="pagination">
    {{$alumnos->links()}}
  </div>
  
@stop