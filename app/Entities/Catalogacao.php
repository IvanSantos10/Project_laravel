<?php

namespace Projeto\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Catalogacao extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'catalogacao';

    protected $fillable = [
        'nome_especie',
        'nome_vernaculare',
        'area_coleta_amostra',
        'n_fixa_coleta',
        'parte_coletata',
        'n_tombamento',
        'caract_botanica',
        'Infor_etnofarmacologica',
        'Infor_etnobotanicas',
        'user_id'
    ];

}
