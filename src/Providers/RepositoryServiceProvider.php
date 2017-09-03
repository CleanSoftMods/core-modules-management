<?php namespace CleanSoft\Modules\Core\ModulesManagement\Providers;

use Illuminate\Support\ServiceProvider;
use CleanSoft\Modules\Core\ModulesManagement\Models\CoreModules;
use CleanSoft\Modules\Core\ModulesManagement\Models\Plugins;
use CleanSoft\Modules\Core\ModulesManagement\Repositories\Contracts\CoreModulesRepositoryContract;
use CleanSoft\Modules\Core\ModulesManagement\Repositories\Contracts\PluginsRepositoryContract;
use CleanSoft\Modules\Core\ModulesManagement\Repositories\CoreModulesRepository;
use CleanSoft\Modules\Core\ModulesManagement\Repositories\CoreModulesRepositoryCacheDecorator;
use CleanSoft\Modules\Core\ModulesManagement\Repositories\PluginsRepository;
use CleanSoft\Modules\Core\ModulesManagement\Repositories\PluginsRepositoryCacheDecorator;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PluginsRepositoryContract::class, function () {
            $repository = new PluginsRepository(new Plugins());

            if (config('webed-caching.repository.enabled')) {
                return new PluginsRepositoryCacheDecorator($repository);
            }

            return $repository;
        });

        $this->app->bind(CoreModulesRepositoryContract::class, function () {
            $repository = new CoreModulesRepository(new CoreModules());

            if (config('webed-caching.repository.enabled')) {
                return new CoreModulesRepositoryCacheDecorator($repository);
            }

            return $repository;
        });
    }
}
