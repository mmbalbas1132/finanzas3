<div>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <h1>Crear nuevo gasto</h1>
    
        <form action="{{ route('gastos.store') }}" method="POST">
            @csrf
    
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control">
            </div>
    
            <div class="form-group">
                <label for="monto">Monto</label>
                <input type="number" step="0.01" name="monto" id="monto" class="form-control">
            </div>
    
            <div class="form-group">
                <label for="category_id">Categoría</label>
                <select name="category_id" id="category_id" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
    
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
    @endsection

</div>