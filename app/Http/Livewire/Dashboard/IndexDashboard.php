<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class IndexDashboard extends DashboardComponent
{
    public function mount()
    {
        $this->shareBreadcrumbs([]);
        $this->sharePageTitle(__('Dashboard '));
    }

    public function render()
    {
        return view('livewire.dashboard.index-dashboard');
    }
}
