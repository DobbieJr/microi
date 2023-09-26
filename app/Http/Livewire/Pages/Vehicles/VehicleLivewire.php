<?php

namespace App\Http\Livewire\Pages\Vehicles;

use App\Models\DeviceVehicle;
use Livewire\Component;

class VehicleLivewire extends Component
{
    public $vehicle;
    public $vehicle_id;
    public $vehicle_name;

    public function mount($id)
    {
        $this->vehicle_id = $id;
    }
    public function render()
    {
        $this->vehicle_name = DeviceVehicle::where('id', $this->vehicle_id)->get()->value('vehicle_name');
        $this->vehicle = DeviceVehicle::where('id', $this->vehicle_id)->get();
        return view('livewire.pages.vehicles.vehicle-livewire');
    }
}
