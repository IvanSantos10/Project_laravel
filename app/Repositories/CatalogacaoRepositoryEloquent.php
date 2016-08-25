<?php

namespace Projeto\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Projeto\Repositories\CatalogacaoRepository;
use Projeto\Entities\Catalogacao;
use Projeto\Validators\CatalogacaoValidator;

/**
 * Class CatalogacaoRepositoryEloquent
 * @package namespace Projeto\Repositories;
 */
class CatalogacaoRepositoryEloquent extends BaseRepository implements CatalogacaoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Catalogacao::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
