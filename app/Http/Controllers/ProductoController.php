<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\CampesinoProducto;
use App\Models\TipoProducto;
use App\Models\Campesino;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $respuesta = Producto::All();

        return response()->json($respuesta);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * * Obtener información detallada de un producto con sus campesinos y tipo:
    * *Esta consulta recuperaría información detallada sobre un producto específico,
    * *incluidos los campesinos que lo producen y su tipo correspondiente.
     */
    public function show(string $id)
    {
        /*
        $campesino = Campesino::find($id);
        $producto_campesino = CampesinoProducto::where('fk_id_campesino', $id)->get();
        $producto = Producto::where('id_producto', $producto_campesino[0]->fk_id_producto)->get();

        $Datos = [
            "campesino"=>$campesino,
            "producto_campesino"=>$producto_campesino,
            "producto"=>$producto
        ];
        return response()->json($Datos);
        */
        $consulta = TipoProducto::select('producto.*', 'tipo_producto.*','campesino_producto.*')
                    ->join('producto', 'tipo_producto.id_tipo_producto','=','producto.fk_id_tipo')
                    ->join('campesino_producto','producto.id_producto','=','campesino_producto.fk_id_producto')
                    ->get();

        return response()->json($consulta);
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
