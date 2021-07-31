<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

/**
 * Class IndexDashboardController.
 *
 * @package App\Http\Controllers\Dashboard
 */
class IndexDashboardController extends DashboardController
{
    /**
     * Handle the incoming request.
     *
     * @param  Request  $request
     *
     * @return View
     */
    public function __invoke(Request $request): View
    {
        $breadcrumbs = [
            ['link' => route('dashboard.index'), 'name' => __('Home')],
            ['name' => __('Dashboard')],
        ];

        view()->share('breadcrumbs', $breadcrumbs);
        view()->share('pageTitle', 'Dashboard - Analytics');

        return view('pages.home.index');
    }
}
