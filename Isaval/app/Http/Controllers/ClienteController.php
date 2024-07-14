<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resultado = Cliente::orderBy('id','ASC')->paginate(10);
        return view('Clientes.Ver',['Rscliente' =>$resultado]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required'
            ,'documento'=>'required|unique:clientes'
            ,'edad'=>'required'
            ,'email'=>'required'
        ]);

        $dato = new Cliente();
        $dato->nombre = $request->input('nombre');
        $dato->documento = $request->input('documento');
        $dato->edad = $request->input('edad');
        $dato->email = $request->input('email');
        $dato->save();
        return redirect()->route('Clientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente= Cliente::findOrFail($id);
        return view('Clientes.show',['clientes'=>$cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente= Cliente::findOrFail($id);
        return view('Clientes.edit',['clientes'=>$cliente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre'=>'required'
            ,'edad'=>'required'
            ,'email'=>'required'
        ]);

        $dato = Cliente::findOrFail($id);
        $dato->nombre = $request->input('nombre');
        $dato->edad = $request->input('edad');
        $dato->email = $request->input('email');
        $dato->save();
        return redirect()->route('Clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::find($id);
        if (!$cliente) {
            return 'Cliente no encontrado';
        }
        $cliente->delete();
        return redirect()->route('Clientes.index');
    }
}
