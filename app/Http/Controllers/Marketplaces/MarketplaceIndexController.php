<?php

namespace App\Http\Controllers\Marketplaces;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

/**
 * Class MarketplaceIndexController.
 *
 * @package App\Http\Controllers\Marketplaces
 */
class MarketplaceIndexController extends MarketplaceController
{
    private string $pageTitle = 'Marketplace';

    /**
     * Handle the incoming request.
     *
     * @param  Request  $request
     *
     * @return View
     */
    public function __invoke(Request $request): View
    {
        $this->sharePageTitle($this->pageTitle);
        $this->shareBreadcrumbs();

        return view('pages.marketplaces.index');
    }
}
