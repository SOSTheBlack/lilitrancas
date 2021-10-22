<?php

namespace App\Http\Controllers\Enterprises;

use App\Helpers\withUser;
use App\Http\Controllers\Controller;

/**
 * Class EnterpriseController.
 *
 * @package App\Http\Controllers\Enterprises
 */
class EnterpriseController extends Controller
{
    use withUser;

    /**
     * Breadcrumbs.
     *
     * @param  array  $breadcrumbs
     *
     * @return $this
     */
    public function shareBreadcrumbs(array $breadcrumbs): EnterpriseController
    {
        $newBreadcrumbs[] = $breadcrumbs;

        if ($this->user->can('settings.enterprises.index')) {
            $newBreadcrumbs[] = ['link' => route('enterprises.index'), 'name' => __("Empresas")];
        }

        return parent::shareBreadcrumbs($newBreadcrumbs);
    }
}
