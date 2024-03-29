@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear nueva categoría</h1>

        <form action="{{ route('categories.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Nombre</label>
                <x-validation-errors field="name" />
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
            </div>

            <button type="submit" class="btn btn-primary">Crear</button>
        </form>

    </div>
@endsection
