<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrarArchivo;
use App\Models\Archivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\This;

class ArchivoController extends Controller
{
    public function index(){
        return view('Archivo.registrar');
    }

    public function store(RegistrarArchivo $request) {
        $request->validated();
        $archivo = new Archivo;
        $archivo->ruc = $request->input('ruc');
        $archivo->fecha = $request->input('fecha');
        $archivo->serie = $request->input('serie');
        $archivo->numero = $request->input('numero');
        $archivo->importe = $request->input('importe');
        if($archivo->save()){
            $this->guardarArchivos($request->file('archivo', []));
            return response()->json(['mensaje' => 'Operación exitosa']);
        }
        return response()->json(['mensaje' => 'Ocurrió un error']);
    }

    private function guardarArchivos($archivos): void {
        foreach( $archivos as $archivo ){
            $archivo->storeAs('sunat', $archivo->getClientOriginalName());
        }
    }

    public function show() {
        $datos = Archivo::select('id', 'ruc', 'fecha', 'serie', 'numero', 'importe')->get()->toArray();
        return response()->json(compact("datos"));
    }

    public function see() {
        return view('Archivo.listar');
    }
}
