<?php namespace CleanSoft\Modules\Core\ModulesManagement\Providers;

use Illuminate\Support\ServiceProvider;

class ConsoleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->generatorCommands();
        $this->otherCommands();
    }

    protected function generatorCommands()
    {
        $this->commands([
            /**
             * Core
             */
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Core\MakeModule::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Core\MakeProvider::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Core\MakeController::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Core\MakeMiddleware::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Core\MakeRequest::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Core\MakeModel::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Core\MakeRepository::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Core\MakeFacade::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Core\MakeService::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Core\MakeSupport::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Core\MakeView::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Core\MakeMigration::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Core\MakeCommand::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Core\MakeDataTable::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Core\MakeCriteria::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Core\MakeAction::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Core\MakeMail::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Core\MakeViewComposer::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Core\MakeHook::class,
            /**
             * Plugin
             */
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Plugin\MakeProvider::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Plugin\MakeController::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Plugin\MakeMiddleware::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Plugin\MakeRequest::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Plugin\MakeModel::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Plugin\MakeRepository::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Plugin\MakeFacade::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Plugin\MakeService::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Plugin\MakeSupport::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Plugin\MakeView::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Plugin\MakeMigration::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Plugin\MakeCommand::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Plugin\MakeDataTable::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Plugin\MakeCriteria::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Plugin\MakeAction::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Plugin\MakeMail::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Plugin\MakeViewComposer::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Plugin\MakeHook::class,
            /**
             * Theme
             */
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Theme\MakeProvider::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Theme\MakeController::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Theme\MakeMiddleware::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Theme\MakeRequest::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Theme\MakeModel::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Theme\MakeRepository::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Theme\MakeFacade::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Theme\MakeService::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Theme\MakeSupport::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Theme\MakeView::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Theme\MakeMigration::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Theme\MakeCommand::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Theme\MakeDataTable::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Theme\MakeCriteria::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Theme\MakeAction::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Theme\MakeMail::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Theme\MakeViewComposer::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Generators\Theme\MakeHook::class,
        ]);
    }

    protected function otherCommands()
    {
        $this->commands([
            \CleanSoft\Modules\Core\ModulesManagement\Console\Commands\InstallPluginCommand::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Commands\UpdatePluginCommand::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Commands\UninstallPluginCommand::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Commands\DisablePluginCommand::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Commands\EnablePluginCommand::class,

            \CleanSoft\Modules\Core\ModulesManagement\Console\Commands\UpdateCoreModuleCommand::class,

            \CleanSoft\Modules\Core\ModulesManagement\Console\Commands\ExportCoreModuleCommand::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Commands\GetAllCoreModulesCommand::class,
            \CleanSoft\Modules\Core\ModulesManagement\Console\Commands\GetAllPluginsCommand::class,
        ]);
    }
}
