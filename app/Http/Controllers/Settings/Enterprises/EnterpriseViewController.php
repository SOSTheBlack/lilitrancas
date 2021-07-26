<?php

namespace App\Http\Controllers\Settings\Enterprises;

use App\Helpers\withUser;
use App\Http\Requests\Settings\Enterprises\EnterpriseViewRequest;
use App\Models\Enterprise;
use Illuminate\Contracts\View\View;

use function view;

/**
 * Class EnterpriseViewController.
 *
 * @package App\Http\Controllers\Settings\Enterprises
 */
class EnterpriseViewController extends EnterpriseController
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
        $this->setBreadcrumbs($enterprise);

        return view('pages.settings.enterprises.view', ['enterprise' => $enterprise]);
    }
}
