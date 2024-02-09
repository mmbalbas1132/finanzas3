<div>
    @extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar ingreso</h1>

    <form action="{{ route('ingresos.update', $ingreso) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{ $ingreso->descripcion }}">
        </div>

        <div class="form-group">
            <label for="monto">Monto</label>
            <input type="number" step="0.01" name="monto" id="monto" class="form-control" value="{{ $ingreso->monto }}">
        </div>

        <div class="form-group">
            <label for="category_id">Categoría</label>
            <select name="category_id" id="category_id" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $ingreso->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>
</div>
@endsection
</div>
