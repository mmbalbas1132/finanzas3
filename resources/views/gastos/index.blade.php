<div>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <h1>Gastos</h1>
    
        <a href="{{ route('gastos.create') }}">Crear nuevo gasto</a>
    
        <ul>
            @foreach ($gastos as $gasto)
                <li>
                    <a href="{{ route('gastos.show', $gasto) }}">
                        {{ $gasto->descripcion }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    @endsection
</div>
