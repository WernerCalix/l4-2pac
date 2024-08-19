<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::paginate(10);

        return view('productos.index')->with("productos", $productos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $provedores = Proveedor::all();
        return view('productos.formulario')->with('proveedores', $provedores);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del
        // .

        // Crear un nuevo producto

        // Asignamos los valores del producto.

        // Save()

        // Retornar al index y mostrar el mensaje de que se creó el producto.

        return "Se recibi'o el formulario.";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
