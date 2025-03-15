<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Models\Marca;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function index()
    {
        $carros = Carro::with('marca')->get();
        return view('carros.index', compact('carros'));
    }

    public function create()
    {
        $marcas = Marca::all();
        return view('carros.create', compact('marcas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'modelo' => 'required|string|max:255',
            'ano' => 'required|integer',
            'marca_id' => 'required|exists:marcas,id',
        ]);

        Carro::create($request->all());
        return redirect()->route('carros.index');
    }

    public function edit(Carro $carro)
    {
        $marcas = Marca::all();
        return view('carros.edit', compact('carro', 'marcas'));
    }

    public function update(Request $request, Carro $carro)
    {
        $request->validate([
            'modelo' => 'required|string|max:255',
            'ano' => 'required|integer',
            'marca_id' => 'required|exists:marcas,id',
        ]);

        $carro->update($request->all());
        return redirect()->route('carros.index');
    }

    public function destroy(Carro $carro)
    {
        $carro->delete();
        return redirect()->route('carros.index');
    }
}
