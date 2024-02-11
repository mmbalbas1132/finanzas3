@extends('layouts.app')

@section('content')
<div class="container bg-yellow-50 rounded mx-auto" >
    <h1 class="text-4xl text-center mt-8" >Listado de categorías</h1>

    <table  class="md:table-fixed mx-auto mt-10 mb-4 p-5 w-3/4 ">
        <thead class="bg-gray-300 p-4">
            <tr class="border-4">
                <th class="text-2xl  font-bold text-left pl-5">Nombre</th>
                <th class="text-2xl font-bold">Acción</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr class="text-center border-4">
                    <td class="text-xl text-left pl-5 ">{{ $category->name }}</td>
                    <td>
{{--                        <a href="{{ route('categories.edit', $category) }}" class="btn btn-primary">Editar</a>--}}
                        <form action="{{ route('categories.edit', $category) }}" method="get" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</button>
                        </form>
                         <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 mx-auto rounded">Eliminar</button>
                        </form>
                    </td>



                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="flex justify-center">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold rounded py-2 px-4 mt-10 mb-5 mx-auto ">
        <a href="{{ route('categories.create') }}" class="text-white p-10">Crear nueva categoría</a>
    </button>
</div>
</div>
@endsection
