<?php

namespace App\Http\Livewire\Pages\Devices;

use App\Models\Device;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class DevicesLivewire extends Component
{
    use LivewireAlert;
    public $name, $details;
    public $modal = false;
    public $devices = [];
    public $button_status = 'add';
    public $device;

    public function edit_device($id)
    {
        $this->device = Device::find($id);
        $this->name = $this->device->name;
        $this->details = $this->device->details;
        $this->button_status = "edit";
        $this->modal = true;
    }
    public function change_status($id)
    {
        $this->device = Device::find($id);
        if ($this->device->status == 'active') {
            $this->device->status = 'inactive';
            $this->device->save();
            $this->alert('success', 'updated successfuly');
        } else {
            $this->device->status = 'active';
            $this->device->save();
            $this->alert('success', 'updated successfuly');
        }
    }
    public function add_modal()
    {

        $this->modal = true;
    }
    public function cancel()
    {
        $this->reset(['modal', 'name', 'details', 'button_status']);
    }
    public function add_device()
    {
        $this->validate([
            'name' => 'required|string',
            'details' => 'required|string',
        ]);

        if ($this->button_status == 'add') {
            Device::create([
                'name' => $this->name,
                'details' => $this->details
            ]);
            $this->cancel();
            $this->alert('success', 'Created successfuly');
        } else {
            $this->device->name = $this->name;
            $this->device->details = $this->details;
            $this->device->save();
            $this->cancel();
            $this->alert('success', 'Updated successfuly');
        }
    }
    public function render()
    {
        $this->devices = Device::all();
        return view('livewire.pages.devices.devices-livewire');
    }
}
