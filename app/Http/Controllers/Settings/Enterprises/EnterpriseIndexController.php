<?php

namespace App\Http\Controllers\Settings\Enterprises;

use App\DataTables\EnterpriseDataTable;
use App\Http\Requests\Settings\Enterprises\EnterpriseIndexRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

/**
 * Class EnterpriseIndexController.
 *
 * @package App\Http\Controllers\Settings\Enterprises
 */
class EnterpriseIndexController extends EnterpriseController
{
    /**
     * @var EnterpriseDataTable
     */
    private EnterpriseDataTable $enterpriseDataTable;

    /**
     * EnterpriseIndexController constructor.
     *
     * @param  EnterpriseDataTable  $enterpriseDataTable
     */
    public function __construct(EnterpriseDataTable $enterpriseDataTable)
    {
        $this->enterpriseDataTable = $enterpriseDataTable;
    }

    /**
     * Handle the incoming request.
     *
     * @param  EnterpriseIndexRequest  $enterpriseIndexRequest
     *
     * @return View|JsonResponse
     */
    public function __invoke(EnterpriseIndexRequest $enterpriseIndexRequest): View|JsonResponse
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => __('Home')],
            ['link' => "javascript:void(0)", 'name' => __('Configurações')],
            ['name' => __("Empresas")]
        ];

        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        return $this->enterpriseDataTable->render('pages.settings.enterprises.index', ['breadcrumbs' => $breadcrumbs], ['pageConfigs' => $pageConfigs]);
    }
}
