<?php

namespace App\Http\Livewire;

use Illuminate\Support\Arr;
use Livewire\Component;

class BaseComponent extends Component
{
    /**
     * Title of the page.
     *
     * @param  string  $pageTitle
     *
     * @return $this
     */
    protected function sharePageTitle(string $pageTitle): self
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
    protected function shareBreadcrumbs(array $breadcrumbs): self
    {
        if (! is_int(array_key_first($breadcrumbs))) {

        }

//        dd($breadcrumbs);
        $breadcrumbs[] = ['link' => route('dashboard.index'), 'name' => __('Home')];

//        dd(array_reverse($breadcrumbs));
        view()->share('breadcrumbs', array_reverse($breadcrumbs));

        return $this;
    }
}
