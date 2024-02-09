<div>
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <h1>Ingresos</h1>

            <a href="{{ route('ingresos.create') }}">Crear nuevo ingreso</a>

            <ul>
                @foreach ($ingresos as $ingreso)
                    <li>
                        <a href="{{ route('ingresos.show', $ingreso) }}">
                            {{ $ingreso->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endsection
</div>
