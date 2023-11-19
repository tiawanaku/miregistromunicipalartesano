<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Registro extends Model
{
    use HasFactory;
    
    // Define las propiedades que se pueden asignar en masa
    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'fecha_nacimiento',
        'genero',
        'direccion',
        'ci',
        'ci_ext',
        'ci_complemento',
        'numero_celular',
        'direccion_productiva',
        'distrito_productivo',
        'rubro',
        'asociacion',
        'producto_principal',
        'producto_secundario',
        'licencia_funcionamiento',
        'impuesto_venta',
        'impuesto_productiva',
        'impuesto_comercio',
        'impuesto_feria',
        'impuesto_ninguno',
        'impuesto_otro',
    ];

    // Convierte los campos a tipos específicos
    protected $casts = [
        'ci_complemento' => 'boolean',
        'licencia_funcionamiento' => 'boolean',
        'impuesto_venta' => 'boolean',
        'impuesto_productiva' => 'boolean',
        'impuesto_comercio' => 'boolean',
        'impuesto_feria' => 'boolean',
        'impuesto_ninguno' => 'boolean',
        'impuesto_otro' => 'boolean',
    ];

    // Trata la fecha de nacimiento como una instancia de Carbon
    protected $dates = [
        'fecha_nacimiento',
    ];
}
