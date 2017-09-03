<?php namespace CleanSoft\Modules\Core\ModulesManagement\Repositories;

use CleanSoft\Modules\Core\Repositories\Eloquent\EloquentBaseRepositoryCacheDecorator;

use CleanSoft\Modules\Core\ModulesManagement\Repositories\Contracts\PluginsRepositoryContract;

class PluginsRepositoryCacheDecorator extends EloquentBaseRepositoryCacheDecorator implements PluginsRepositoryContract
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
