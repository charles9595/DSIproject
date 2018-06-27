<?php

namespace DSIproject;

use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    /**
     * Nombre de la tabla relacionada a este modelo.
     *
     * @var string
     */
    protected $table = 'grados';

    /**
     * Atributos que son asignados en masa.
     *
     * @var array
     */
    protected $fillable = [
    	'nivel_id',
    	'anio_id',
    	'docente_id',
    	'codigo',
    	'seccion',
    	'estado',
    ];

    /**
     * Obtiene el nivel educativo que tiene el grado.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nivel()
    {
        return $this->belongsTo('DSIproject\Nivel');
    }

    /**
     * Obtiene el año al que pertenece el grado.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function anio()
    {
        return $this->belongsTo('DSIproject\Anio');
    }

    /**
     * Obtiene al docente orientador que tiene el grado.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function docente()
    {
        return $this->belongsTo('DSIproject\Docente');
    }
}