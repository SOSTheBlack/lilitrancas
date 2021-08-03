<?php

namespace App\Http\Controllers\Enterprises;

use App\Helpers\withUser;
use App\Http\Requests\Settings\Enterprises\EnterpriseViewRequest;
use App\Models\Enterprise;
use Illuminate\Contracts\View\View;

use function view;

/**
 * Class EnterpriseViewController.
 *
 * @package App\Http\Controllers\Enterprises
 */
class EnterpriseShowPublicController extends EnterpriseController
{
    use withUser;

    /**
     * Handle the incoming request.
     *
     * @param  Enterprise  $enterprise
     * @param  EnterpriseViewRequest  $enterpriseViewRequest
     *
     * @return View
     */
    public function __invoke(Enterprise $enterprise, EnterpriseViewRequest $enterpriseViewRequest): View
    {
        return view('pages.enterprises.show-public', ['enterprise' => $enterprise]);
    }
}
