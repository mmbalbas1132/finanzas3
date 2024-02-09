<div>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <h1>Categorías</h1>
    
        <a href="{{ route('categories.create') }}">Crear nueva categoría</a>
    
        <ul>
            @foreach ($categories as $category)
                <li>
                    <a href="{{ route('categories.show', $category) }}">
                        {{ $category->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    @endsection
</div>
