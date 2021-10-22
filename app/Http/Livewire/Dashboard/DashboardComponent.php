<?php

namespace App\Http\Livewire\Dashboard;

use App\Http\Livewire\BaseComponent;

abstract class DashboardComponent extends BaseComponent
{
    /**
     * Breadcrumbs.
     *
     * @param  array  $breadcrumbs
     *
     * @return $this
     */
    public function shareBreadcrumbs(array $breadcrumbs): self
    {
        $newBreadcrumbs[] = $breadcrumbs;

        $newBreadcrumbs[] = ['link' => route('dashboard.index'), 'name' => __('Dashboard')];

        return parent::shareBreadcrumbs($newBreadcrumbs);
    }
}
