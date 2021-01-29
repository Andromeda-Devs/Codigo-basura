<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Departamento
 * @package App\Models
 * @version December 5, 2020, 4:34 am UTC
 *
 * @property string $nombre
 * @property boolean $activo
 */
class Departamento extends Model
{
    use SoftDeletes;

    public $table = 'departamentos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'activo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'activo' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|max:50'
    ];

    
}
