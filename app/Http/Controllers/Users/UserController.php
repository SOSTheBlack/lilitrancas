<?php

namespace App\Http\Controllers\Users;

use App\Helpers\withUser;
use App\Http\Controllers\Controller;

/**
 * Class UserController.
 *
 * @package App\Http\Controllers\Users
 */
abstract class UserController extends Controller
{
    use withUser;

    /**
     * Breadcrumbs.
     *
     * @param  array  $breadcrumbs
     *
     * @return $this
     */
    public function setBreadcrumbs(array $breadcrumbs): UserController
    {
        $newBreadcrumbs[] = $breadcrumbs;

        if ($this->user->can('user.index')) {
            $newBreadcrumbs[] = ['link' => route('dashboard.index'), 'name' => __('Lista de Usuários')];
        }

        return parent::setBreadcrumbs($newBreadcrumbs);
    }
}