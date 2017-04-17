<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\AssetRepository;
use App\Entities\Asset;
use App\Validators\AssetValidator;

/**
 * Class AssetRepositoryEloquent
 * @package namespace App\Repositories;
 */
class AssetRepositoryEloquent extends BaseRepository implements AssetRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Asset::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
