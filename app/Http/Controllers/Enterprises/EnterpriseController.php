<?php

namespace App\Http\Controllers\Enterprises;

use App\Helpers\withUser;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Settings\SettingController;
use App\Models\Enterprise;

/**
 * Class EnterpriseController.
 *
 * @package App\Http\Controllers\Enterprises
 */
class EnterpriseController extends Controller
{
    use withUser;

    /**
     * @param  Enterprise|null  $enterprise
     */
    protected function setBreadcrumbs(?Enterprise $enterprise = null): void
    {
        $breadcrumbs = [
            ['link' => route('dashboard.index'), 'name' => __('Home')],
            ['link' => "javascript:void(0)", 'name' => __('Configurações')],
        ];

        if ($this->user->can('settings.enterprise.index')) {
            $breadcrumbs[] = ['link' => route('enterprise.index'), 'name' => __("Empresas")];
        }

        if (! is_null($enterprise)) {
            $breadcrumbs[] = ['name' => $enterprise->name];
        }

        view()->share('breadcrumbs', $breadcrumbs);
    }
}
