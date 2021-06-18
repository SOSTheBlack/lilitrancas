<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Class HomeController.
 *
 * @package App\Http\Controllers\Dashboard
 */
class HomeController extends DashboardController
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
        return ['oi' => 'booom'];
    }
}
