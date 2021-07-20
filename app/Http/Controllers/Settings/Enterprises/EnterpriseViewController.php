<?php

namespace App\Http\Controllers\Settings\Enterprises;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\Enterprises\EnterpriseViewRequest;
use App\Models\Enterprise;
use Illuminate\Http\Response;

/**
 * Class EnterpriseViewController.
 *
 * @package App\Http\Controllers\Settings\Enterprises
 */
class EnterpriseViewController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  EnterpriseViewRequest  $enterpriseViewRequest
     *
     * @return Response
     */
    public function __invoke(Enterprise $enterprise, EnterpriseViewRequest $enterpriseViewRequest)
    {
        //
    }
}
