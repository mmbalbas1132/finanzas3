<div>
    @extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $gasto->descripcion }}</h1>

    <p>Monto: {{ $gasto->monto }}</p>
    <p>Categoría: {{ $gasto->category->name }}</p>

    <a href="{{ route('gastos.edit', $gasto) }}">Editar</a>

    <form action="{{ route('gastos.destroy', $gasto) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
</div>
@endsection
</div>
