<?php

namespace App\Http\Controllers\Marketplaces;

use App\Models\Enterprise;
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

    public function __construct()
    {
        $this->sharePageTitle($this->pageTitle);
        $this->shareBreadcrumbs();
    }

    /**
     * Handle the incoming request.
     *
     * @param  Request  $request
     *
     * @return View
     */
    public function __invoke(Request $request): View
    {
        return view('pages.marketplaces.index', ['enterprises' => Enterprise::all()]);
    }
}
