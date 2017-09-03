<?php namespace CleanSoft\Modules\Core\ModulesManagement\Facades;

use Illuminate\Support\Facades\Facade;
use CleanSoft\Modules\Core\ModulesManagement\Support\UpdateModulesSupport;

/**
 * @method static registerUpdateBatches($moduleAlias, array $batches, string $type = 'plugins')
 * @method static loadBatches($moduleAlias, string $type = 'plugins')
 */
class UpdateModulesFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return UpdateModulesSupport::class;
    }
}
