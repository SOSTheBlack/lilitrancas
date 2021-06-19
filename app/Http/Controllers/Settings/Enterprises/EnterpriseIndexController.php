<?php

namespace App\Http\Controllers\Settings\Enterprises;

use App\Http\Requests\Settings\Enterprises\EnterpriseNewRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
     *
     * @return Response
     */
    public function __invoke(Request $request)
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => __('Home')], ['link' => "javascript:void(0)", 'name' => __('Configurações')], ['name' => __("Empresas")]
        ];

        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        return view('pages.enterprises.index', ['breadcrumbs' => $breadcrumbs], ['pageConfigs' => $pageConfigs]);
    }
}
