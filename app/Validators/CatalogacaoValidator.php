<?php

namespace Projeto\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class CatalogacaoValidator extends LaravelValidator
{

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'nome_especie' => 'required',
            'nome_vernaculare' => 'required',
            'area_coleta_amostra' => 'required',
            'n_fixa_coleta' => 'required',
            'parte_coletata' => 'required',
            'n_tombamento' => 'required',
            'caract_botanica' => 'required',
            'Infor_etnofarmacologica' => 'required',
            'Infor_etnobotanicas' => 'required',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'nome_especie' => 'required',
            'nome_vernaculare' => 'required',
            'area_coleta_amostra' => 'required',
            'n_fixa_coleta' => 'required',
            'parte_coletata' => 'required',
            'n_tombamento' => 'required',
            'caract_botanica' => 'required',
            'Infor_etnofarmacologica' => 'required',
            'Infor_etnobotanicas' => 'required',
        ],
   ];
}
