<?php namespace CleanSoft\Modules\Core\ModulesManagement\Facades;

use Illuminate\Support\Facades\Facade;

class ModulesManagementFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \CleanSoft\Modules\Core\ModulesManagement\Support\ModulesManagement::class;
    }
}
