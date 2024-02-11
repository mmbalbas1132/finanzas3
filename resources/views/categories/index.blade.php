@extends('layouts.app')

@section('content')
<div class="container max-w-7xl bg-yellow-50  mx-auto shadow-md p-6 rounded-lg" >
    <h1 class="text-4xl text-center mt-8 pt-5" >{{__('List of categories')}}</h1>

    <table  class="md:table-fixed mx-auto mt-10 mb-4 p-5 w-3/4 bg-gray-200 border-collapse border border-black ">
        <thead class="bg-gray-300 border border-black px-4 py-2">
            <tr class="border-b border-black">
                <th class="text-2xl  font-bold text-left pl-5">{{__('Name')}}</th>
                <th class="text-2xl font-bold">{{__('Action')}}</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr class="text-center border-b border-black px-4 py-2">
                    <td class="text-xl text-left pl-5 ">{{ $category->name }}</td>
                    <td>

                        <form action="{{ route('categories.edit', $category) }}" method="GET" style="display: inline;">
                            @csrf
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</button>
                        </form>

                        <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
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
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold rounded py-2 px-4 mt-10 mb-5 mx-auto ">
            <a href="{{ route('gastos.create') }}" class="text-white p-10">Introducir gasto</a>
        </button>
</div>
</div>
@endsection
