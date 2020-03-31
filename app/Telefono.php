<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'telefonos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ci', 'extension', 'telefono_movil', 'telefono_fijo'];

    
}
