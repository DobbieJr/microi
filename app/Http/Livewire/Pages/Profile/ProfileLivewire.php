<?php

namespace App\Http\Livewire\Pages\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;

class ProfileLivewire extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $name;
    public $email;
    public $current_password;
    public $new_password;
    public $photo;
    public $user;
    public $desc;
    public $occup;


    public function remove()
    {
        $user = User::find(Auth::user()->id);
        Storage::disk('custom')->delete($user->profile_picture);
        $user->profile_picture = '';
        $user->save();
        $this->alert('success', 'Removed');
    }

    public function updatedPhoto()
    {

        $this->validate([
            'photo' => 'image',
        ]);
        if (Auth::user()->profile_picture = '') {
            $file = $this->photo->store('profile');
            $user = User::find(Auth::user()->id);
            $user->profile_picture = $file;
            $user->save();
            $this->alert('success', 'Uploaded');
        } else {
            Storage::disk('custom')->delete(Auth::user()->profile_picture);
            $file = $this->photo->store('profile');
            $user = User::find(Auth::user()->id);
            $user->profile_picture = $file;
            $user->save();
            $this->alert('success', 'Uploaded');
        }
    }
    public function update()
    {

        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'occup' => 'required|string',
            'desc' => 'required|string'
        ]);
        $user = User::find(Auth::user()->id);


        if (!empty($this->current_password)) {
            $this->validate([
                'current_password' => 'required|string',

            ]);
            $user = User::find(Auth::user()->id);

            $status = Hash::check($this->current_password, Auth::user()->password);
            // dd($status, $this->current_password, $user->password,Auth::user()->password);
            if ($status) {
                $this->validate(['new_password' => 'required|string']);
                $user->password = Hash::make($this->new_password);
                $user->name = $this->name;
                $user->email = $this->email;
                $user->occupation = $this->occup;
                $user->description = $this->desc;
                $user->save();
                $this->alert('success', 'Successful');
                // dd('start is true');
            } else {
                // dd('not true');
                $this->addError('current_password', 'invalid current password');
            }
        } else {
            // $this->alert('error', 'empty');

            $user->name = $this->name;
            $user->email = $this->email;
            $user->save();
            $this->alert('success', 'Successful');
        }
    }

    public function render()
    {
        $this->user = User::find(Auth::user()->id);
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        return view('livewire.pages.profile.profile-livewire');
    }
}
