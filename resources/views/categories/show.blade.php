<div>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <h1>{{ $category->name }}</h1>
    
        <a href="{{ route('categories.edit', $category) }}">Editar</a>
    
        <form action="{{ route('categories.destroy', $category) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </div>
    @endsection
</div>
