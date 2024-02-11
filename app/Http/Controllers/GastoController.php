<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gasto;
use Illuminate\Http\Request;

class GastoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gastos = Gasto::all();
        return view('gastos.index', compact('gastos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('gastos.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Definir las reglas de validación
        $rules = [
            'fecha' => 'required|date',
            'monto' => 'required|numeric|min:0',
            'descripcion' => 'required|string|min:3|max:255',
            'category_id' => 'required|exists:categories,id',
        ];

        // Validar los datos del formulario
        $validatedData = $request->validate($rules);

        // Crear el gasto si la validación es exitosa
        $gasto = new Gasto();
        $gasto->fecha = $validatedData['fecha'];
        $gasto->monto = $validatedData['monto'];
        $gasto->descripcion = $validatedData['descripcion'];
        $gasto->category_id = $validatedData['category_id'];
        $gasto->save();

        return redirect()->route('gastos.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Gasto $gasto)
    {
        return view('gastos.show', compact('gasto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gasto $gasto)
    {
        $categories = Category::all();
        return view('gastos.edit', compact('gasto', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gasto $gasto)
    {
        $gasto->update($request->all());

        return redirect()->route('gastos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gasto $gasto)
    {
        $gasto->delete();

        return redirect()->route('gastos.index');
    }
}
