<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comprador;
use GuzzleHttp\Psr7\Message;
use Mockery\Undefined;

class CompradorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Comprador::orderBy('id_comprador', 'desc')->get();
        return response()->json($clientes);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $compra = new Comprador;

        $compra->nombre_comprador = $request->nombre_comprador;
        $compra->compra_direccion = $request->compra_direccion;
        $compra->compra_telefono = $request->compra_telefono;
        $compra->save();

        $data = [
            "Message" =>"La data se ha insertado correctamente",
            "Data" => $compra
        ];
        return $data;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dato = Comprador::find($id);

        return response()->json($dato);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $compra = Comprador::find($id);

        $compra->nombre_comprador = $request->nombre_comprador;
        $compra->compra_direccion = $request->compra_direccion;
        $compra->compra_telefono = $request->compra_telefono;
        $compra->save();

        $data = [
            "Message" =>"La data se ha actualizado correctamente",
            "Data" => $compra
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $compra = Comprador::find($id);
        if ($compra) {
            $compra->delete();
            $respuesta = [
                "Message" =>"La data se ha Eliminado correctamente",
                "Data" => $compra
            ];
        }else{
            $respuesta = [
                "Message" =>"El comprador con id $id no existe en la base de datos",
            ];
        }

        return response()->json($respuesta);


    }
}
