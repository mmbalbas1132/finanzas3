@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listado de categorías xxxxx</h1>

    <a href="{{ route('categories.create') }}">Crear nueva categoría</a>

    <ul>
        @foreach ($categories as $category)
            <li>
                <a href="{{ route('categories.show', $category) }}">
                    {{ $category->name }}
                </a>
                <a href="{{ route('categories.edit', $category) }}" class="btn btn-primary">Editar</a>
                <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection