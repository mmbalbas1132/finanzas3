@extends('layouts.app')

@section('content')
    <div class="container max-w-7xl bg-yellow-50 mx-auto shadow-md p-6 rounded-lg">
        <h1 class="text-4xl text-center mt-8 pt-5">{{__('Expenses')}}</h1>

        <a href="{{ route('gastos.create') }}" class="block text-center mt-4 underline">{{__('Create new expense')}}</a>

        <table class="md:table-fixed mx-auto mt-10 mb-4 p-5 w-3/4 bg-gray-200 border-collapse border border-black">
            <thead class="bg-gray-300">
            <tr class="border-b border-black">
                <th class="text-2xl font-bold text-left pl-5">{{__('Date')}}</th>
                <th class="text-2xl font-bold text-left pl-5">{{__('Description')}}</th>
                <th class="text-2xl font-bold text-left pl-5">{{__('Income')}}</th>
                <th class="text-2xl font-bold text-left pl-5">{{__('Expense')}}</th>
                <th class="text-2xl font-bold text-left pl-5">{{__('Balance')}}</th>
                <th class="text-2xl font-bold text-left pl-5">{{__('Action')}}</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($gastos as $gasto)
                <tr class="border-b border-black">
                    <td class="text-xl text-left pl-5">{{ $gasto->fecha }}</td>
                    <td class="text-xl text-left pl-5">{{ $gasto->descripcion }}</td>
                    <td class="text-xl text-left pl-5">{{ $gasto->monto }}</td>
                    <td class="text-xl text-left pl-5">{{ $gasto->monto }}</td>
                    <td class="text-xl text-left pl-5">{{ $gasto->fecha }}</td>
                    <td class="flex justify-center">
                        <form action="{{ route('gastos.edit', $gasto) }}" method="GET" class="mr-2">
                            @csrf
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                {{__('Edit')}}</button>
                        </form>
                        <form action="{{ route('gastos.destroy', $gasto) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                {{__('Delete')}}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('setLocale', 'en') }}">English</a>
        <a href="{{ route('setLocale', 'es') }}">Español</a>

    </div>
@endsection
