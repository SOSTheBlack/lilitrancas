<?php

namespace App\Http\Controllers\Settings\Enterprises;

use App\Helpers\withUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\Enterprises\EnterpriseViewRequest;
use App\Models\Enterprise;
use Illuminate\Contracts\View\View;

/**
 * Class EnterpriseViewController.
 *
 * @package App\Http\Controllers\Settings\Enterprises
 */
class EnterpriseViewController extends Controller
{
    use withUser;

    /**
     * @var array[]|mixed
     */
    private array $breadcrumbs;

    public function __construct()
    {

    }

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

    private function setBreadcrumbs(Enterprise $enterprise)
    {
        $breadcrumbs = [
            ['link' => route('home'), 'name' => __('Home')],
            ['link' => "javascript:void(0)", 'name' => __('Configurações')],
        ];

        if ($this->user->can('settings.enterprise.index')) {
            $breadcrumbs[] = ['link' => route('settings.enterprises.index'), 'name' => __("Empresas")];
        }

        $breadcrumbs[] = ['name' => $enterprise->name];

        $this->breadcrumbs = $breadcrumbs;
    }
}
