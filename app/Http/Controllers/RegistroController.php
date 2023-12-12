<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Registro;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class RegistroController extends Controller
{
    public function insertar(Request $request)
    {
        // Iniciar transacción
        DB::beginTransaction();

        try {
            // Verificar y guardar la foto
            $pathFoto = null;
            if ($request->hasFile('foto')) {
                $foto = $request->file('foto');
                $nombreFoto = time() . '.' . $foto->getClientOriginalExtension();
                $pathFoto = $foto->storeAs('fotos', $nombreFoto, 'public'); // Cambia 'public' por tu disco si es diferente
            }

            // Intenta realizar las operaciones de la base de datos
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
                'impuesto_otro' => $request->has('impuesto_otro'),
                'foto' => $pathFoto, // Ruta de la foto
            ]);

            // Si todo va bien, confirma la transacción
            DB::commit();
            return redirect('http://142.93.63.226:8085/');
        } catch (\Exception $e) {
            // Si hay un error, deshace la transacción
            DB::rollBack();

            // Registra la excepción con detalles
            Log::error('Error al insertar registro: ' . $e->getMessage());

            // Devolver una respuesta de error
            return response('Error al crear el registro', 500);
        }
    }
}



