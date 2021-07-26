<?php

namespace App\Http\Controllers\Settings\Enterprises;

use App\Helpers\withUser;
use App\Http\Controllers\Settings\SettingController;
use App\Models\Enterprise;

/**
 * Class EnterpriseController.
 *
 * @package App\Http\Controllers\Settings\Enterprises
 */
class EnterpriseController extends SettingController
{
    use withUser;

    /**
     * @param  Enterprise|null  $enterprise
     */
    protected function setBreadcrumbs(?Enterprise $enterprise = null): void
    {
        $breadcrumbs = [
            ['link' => route('home'), 'name' => __('Home')],
            ['link' => "javascript:void(0)", 'name' => __('Configurações')],
        ];

        if ($this->user->can('settings.enterprise.index')) {
            $breadcrumbs[] = ['link' => route('settings.enterprises.index'), 'name' => __("Empresas")];
        }

        if (! is_null($enterprise)) {
            $breadcrumbs[] = ['name' => $enterprise->name];
        }

        view()->share('breadcrumbs', $breadcrumbs);
    }
}
