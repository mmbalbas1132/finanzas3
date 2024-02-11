<div>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <h1>Gastos</h1>

        <a href="{{ route('gastos.create') }}">Crear nuevo gasto</a>

{{--        <ul>--}}
{{--            @foreach ($gastos as $gasto)--}}
{{--                <li>--}}
{{--                    <a href="{{ route('gastos.show', $gasto) }}">--}}
{{--                        {{ $gasto->descripcion }}--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
        <table  class="md:table-fixed mx-auto mt-10 mb-4 p-5 w-3/4 ">
            <thead class="bg-gray-300 p-4">
            <tr class="border-4">
                <th class="text-2xl  font-bold text-left pl-5">Fecha</th>
                <th class="text-2xl  font-bold text-left pl-5">Descripción</th>
                <th class="text-2xl  font-bold text-left pl-5">Ingreso</th>
                <th class="text-2xl  font-bold text-left pl-5">Gasto</th>
                <th class="text-2xl  font-bold text-left pl-5">Saldo</th>
                <th class="text-2xl  font-bold text-left pl-5">Acción</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($gastos as $gasto)
                <tr class="text-center border-4">
                    <td class="text-xl text-left pl-5 ">{{ $gasto->fecha }}</td>
                    <td class="text-xl text-left pl-5 ">{{ $gasto->descripcion }}</td>
                    <td class="text-xl text-left pl-5 ">{{ $gasto->monto }}</td>
                    <td class="text-xl text-left pl-5 ">{{ $gasto->monto}}</td>
                    <td class="text-xl text-left pl-5 ">{{ $gasto->fecha}}</td>
                    <td>

                        <form action="{{ route('gastos.edit', $gasto) }}" method="GET" style="display: inline;">
                            @csrf
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</button>
                        </form>

                        <form action="{{ route('gastos.destroy', $gasto) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
                        </form>

                    </td>



                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @endsection
</div>
