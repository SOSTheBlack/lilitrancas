<?php

namespace App\Http\Controllers\Settings\Enterprises;

use App\DataTables\EnterpriseDataTable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class EnterpriseIndexController.
 *
 * @package App\Http\Controllers\Settings\Enterprises
 */
class EnterpriseIndexController extends EnterpriseController
{
    /**
     * Handle the incoming request.
     *
     * @param  Request  $request
     * @param  EnterpriseDataTable  $enterpriseDataTable
     *
     * @return View|JsonResponse
     */
    public function __invoke(Request $request, EnterpriseDataTable $enterpriseDataTable): View|JsonResponse
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => __('Home')], ['link' => "javascript:void(0)", 'name' => __('Configurações')], ['name' => __("Empresas")]
        ];

        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        return $enterpriseDataTable->render('pages.settings.enterprises.index', ['breadcrumbs' => $breadcrumbs], ['pageConfigs' => $pageConfigs]);
    }
}
