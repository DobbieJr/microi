<?php

namespace App\Http\Livewire\Pages\Dashboard;

use App\Models\Device;
use App\Models\DeviceVehicle;
use App\Models\Organisation;
use App\Models\User;
use Livewire\Component;

class DashboardLivewire extends Component
{
    public function render()
    {
        $organisations = Organisation::all();
        $vehicles = DeviceVehicle::all();
        $users = User::where('role', 'normal')->get();
        $devices = Device::all();
        return view('livewire.pages.dashboard.dashboard-livewire')
            ->with('vehicles', $vehicles)
            ->with('organisations', $organisations)
            ->with('users', $users)
            ->with('devices', $devices);
    }
}
