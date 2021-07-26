<?php

namespace App\Http\Controllers\Enterprises;

use App\Http\Requests\Settings\Enterprises\EnterpriseNewRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Class CreateController.
 *
 * @package App\Http\Controllers\Enterprises
 */
class EnterpriseNewController extends EnterpriseController
{
    /**
     * Handle the incoming request.
     *
     * @param  EnterpriseNewRequest  $request
     *
     * @return Response
     */
    public function __invoke(EnterpriseNewRequest $request)
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => __('Home')], ['link' => "enterprise", 'name' => __("Lista de Empresas")], ['name' => __('Nova Empresa')]
        ];

        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        return view('pages.enterprises.new', ['breadcrumbs' => $breadcrumbs], ['pageConfigs' => $pageConfigs]);
    }
}
