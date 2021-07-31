<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * Class Controller.
 *
 * @package App\Http\Controllers\Themes
 */
abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Title of the page.
     *
     * @param  string  $pageTitle
     *
     * @return $this
     */
    protected function setPageTitle(string $pageTitle): self
    {
        view()->share('pageTitle', $pageTitle);

        return $this;
    }

    /**
     * Breadcrumbs.
     *
     * @param  array  $breadcrumbs
     *
     * @return $this
     */
    protected function setBreadcrumbs(array $breadcrumbs): self
    {
        $breadcrumbs[] = ['link' => route('dashboard.index'), 'name' => __('Home')];

        view()->share('breadcrumbs', array_reverse($breadcrumbs));

        return $this;
    }
}
