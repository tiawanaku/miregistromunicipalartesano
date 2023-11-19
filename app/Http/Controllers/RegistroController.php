<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registro; // Asegúrate de usar el espacio de nombres correcto para tu modelo

class RegistroController extends Controller
{
    public function insertar(Request $request)
    {
        // Crear un nuevo registro en la base de datos con los datos del formulario
        Registro::create([
            'nombre' => $request->input('nombre'),
            'apellido_paterno' => $request->input('apellido_paterno'),
            'apellido_materno' => $request->input('apellido_materno'),
            'fecha_nacimiento' => $request->input('fecha_nacimiento'),
            'genero' => $request->input('genero'),
            'direccion' => $request->input('direccion'),
            'ci' => $request->input('ci'),
            'ci_ext' => $request->input('ci_ext'),
            'ci_complemento' => $request->input('ci_complemento') ? 1 : 0,
            'numero_celular' => $request->input('numero_celular'),
            'direccion_productiva' => $request->input('direccion_productiva'),
            'distrito_productivo' => $request->input('distrito_productivo'),
            'rubro' => $request->input('rubro'),
            'asociacion' => $request->input('asociacion'),
            'producto_principal' => $request->input('producto_principal'),
            'producto_secundario' => $request->input('producto_secundario'),
            'licencia_funcionamiento' => $request->has('licencia_funcionamiento'),
            'impuesto_venta' => $request->has('impuesto_venta'),
            'impuesto_productiva' => $request->has('impuesto_productiva'),
            'impuesto_comercio' => $request->has('impuesto_comercio'),
            'impuesto_feria' => $request->has('impuesto_feria'),
            'impuesto_ninguno' => $request->has('impuesto_ninguno'),
            'impuesto_otro' => $request->has('impuesto_otro')
        ]);

        // Devolver una respuesta simple
        return response('Gracias por su tiempo el Registro fue completado con exito', 200);
    }
}


