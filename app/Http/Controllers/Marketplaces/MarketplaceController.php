<?php

namespace App\Http\Controllers\Marketplaces;

use App\Helpers\withUser;
use App\Http\Controllers\Controller;
use App\Models\Enterprise;

/**
 * Class MarketplaceController.
 *
 * @package App\Http\Controllers\Marketplaces
 */
abstract class MarketplaceController extends Controller
{
    use WithUser;

    /**
     * @var Enterprise
     */
    protected Enterprise $enterprise;

    /**
     * MarketplaceController constructor.
     *
     * @param  Enterprise  $enterprise
     */
    public function __construct(Enterprise $enterprise)
    {
        $this->enterprise = $enterprise;
    }

    /**
     * @return $this
     */
    protected function shareBreadcrumbs(?array $breadcrumbs = null): self
    {
        $newBreadcrumbs = ! is_null($breadcrumbs) ? [$breadcrumbs] : [];

        $newBreadcrumbs[] = ['name' => __('Marketplace')];

        return parent::shareBreadcrumbs($newBreadcrumbs);
    }
}
