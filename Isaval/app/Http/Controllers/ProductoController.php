<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resultado = Producto::orderBy('id','ASC')->paginate(10);
        return view('Productos.Ver',['RsProducto' =>$resultado]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required'
            ,'cantidad'=>'required'
            ,'valor'=>'required'
        ]);
        $dato = new Producto();
        $dato->nombre = $request->input('nombre');
        $dato->cantidad = $request->input('cantidad');
        $dato->valor = $request->input('valor');
        $dato->save();
        return redirect()->route('Productos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto= Producto::findOrFail($id);
        return view('Productos.show',['productos'=>$producto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto= Producto::findOrFail($id);
        return view('Productos.edit',['productos'=>$producto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre'=>'required'
            ,'cantidad'=>'required'
            ,'valor'=>'required'
        ]);
        $dato = Producto::findOrFail($id);
        $dato->nombre = $request->input('nombre');
        $dato->cantidad = $request->input('cantidad');
        $dato->valor = $request->input('valor');
        $dato->save();
        return redirect()->route('Productos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Producto::find($id);
        if (!$producto) {
            return 'Producto no encontrado';
        }
        $producto->delete();
        return redirect()->route('Productos.index');
    }
}
