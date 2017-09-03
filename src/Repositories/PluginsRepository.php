<?php namespace CleanSoft\Modules\Core\ModulesManagement\Repositories;

use CleanSoft\Modules\Core\Repositories\Eloquent\EloquentBaseRepository;
use CleanSoft\Modules\Core\ModulesManagement\Repositories\Contracts\PluginsRepositoryContract;

class PluginsRepository extends EloquentBaseRepository implements PluginsRepositoryContract
{
    /**
     * @param $alias
     * @return mixed|null
     */
    public function getByAlias($alias)
    {
        return $this->model->where('alias', '=', $alias)->first();
    }
}
