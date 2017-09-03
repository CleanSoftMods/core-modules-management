<?php namespace CleanSoft\Modules\Core\ModulesManagement\Repositories\Contracts;

interface PluginsRepositoryContract
{
    /**
     * @param $alias
     * @return mixed|null
     */
    public function getByAlias($alias);
}
