<div>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <h1>{{ $ingreso->descripcion }}</h1>
    
        <p>Monto: {{ $ingreso->monto }}</p>
        <p>Categoría: {{ $ingreso->category->name }}</p>
    
        <a href="{{ route('ingresos.edit', $ingreso) }}">Editar</a>
    
        <form action="{{ route('ingresos.destroy', $ingreso) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </div>
    @endsection
</div>
