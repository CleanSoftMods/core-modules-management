<?php namespace CleanSoft\Modules\Core\ModulesManagement\Http\Controllers;

use CleanSoft\Modules\Core\Http\Controllers\BaseAdminController;
use CleanSoft\Modules\Core\ModulesManagement\Actions\DisablePluginAction;
use CleanSoft\Modules\Core\ModulesManagement\Actions\EnablePluginAction;
use CleanSoft\Modules\Core\ModulesManagement\Actions\InstallPluginAction;
use CleanSoft\Modules\Core\ModulesManagement\Actions\UninstallPluginAction;
use CleanSoft\Modules\Core\ModulesManagement\Actions\UpdatePluginAction;
use CleanSoft\Modules\Core\ModulesManagement\Http\DataTables\PluginsListDataTable;
use Illuminate\Support\Facades\Artisan;
use Yajra\Datatables\Engines\BaseEngine;

class PluginsController extends BaseAdminController
{
    /**
     * @var string
     */
    protected $module = WEBED_MODULES_MANAGEMENT;

    /**
     * @var string
     */
    protected $dashboardMenuId = 'webed-plugins';

    /**
     * Get index page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex(PluginsListDataTable $dataTable)
    {
        $this->breadcrumbs->addLink(trans($this->module . '::base.plugins'));

        $this->setPageTitle(trans($this->module . '::base.plugins'));

        $this->getDashboardMenu($this->dashboardMenuId);

        $this->dis['dataTable'] = $dataTable->run();

        return do_filter(BASE_FILTER_CONTROLLER, $this, WEBED_PLUGINS, 'index.get', $dataTable)->viewAdmin('plugins-list');
    }

    /**
     * Set data for DataTable plugin
     * @param PluginsListDataTable|BaseEngine $dataTable
     * @return \Illuminate\Http\JsonResponse
     */
    public function postListing(PluginsListDataTable $dataTable)
    {
        return do_filter(BASE_FILTER_CONTROLLER, $dataTable, WEBED_PLUGINS, 'index.post', $this);
    }

    /**
     * @param $alias
     * @param $status
     * @return \Illuminate\Http\JsonResponse
     */
    public function postChangeStatus($alias, $status)
    {
        switch ((bool)$status) {
            case true:
                $result = app(EnablePluginAction::class)->run($alias);
                break;
            default:
                $result = app(DisablePluginAction::class)->run($alias);
                break;
        }
        return response()->json($result, $result['response_code']);
    }

    /**
     * @param InstallPluginAction $action
     * @param $alias
     * @return \Illuminate\Http\JsonResponse
     */
    public function postInstall(InstallPluginAction $action, $alias)
    {
        $result = $action->run($alias);

        return response()->json($result, $result['response_code']);
    }

    /**
     * @param UpdatePluginAction $action
     * @param $alias
     * @return \Illuminate\Http\JsonResponse
     */
    public function postUpdate(UpdatePluginAction $action, $alias)
    {
        $result = $action->run($alias);

        return response()->json($result, $result['response_code']);
    }

    /**
     * @param UninstallPluginAction $action
     * @param $alias
     * @return \Illuminate\Http\JsonResponse
     */
    public function postUninstall(UninstallPluginAction $action, $alias)
    {
        $result = $action->run($alias);

        return response()->json($result, $result['response_code']);
    }
}
