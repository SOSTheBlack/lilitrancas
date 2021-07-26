<?php

namespace App\Http\Controllers\Marketplaces;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Class MarketplaceIndexController.
 *
 * @package App\Http\Controllers\Marketplaces
 */
class MarketplaceIndexController extends MarketplaceController
{
    /**
     * Handle the incoming request.
     *
     * @param  Request  $request
     *
     * @return Response
     */
    public function __invoke(Request $request)
    {
        $this->setBreadcrumbs();
        return view('pages.marketplaces.index');
    }
}
