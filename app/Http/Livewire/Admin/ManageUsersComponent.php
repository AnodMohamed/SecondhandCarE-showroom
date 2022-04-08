<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
class ManageUsersComponent extends Component
{
     



    public function render()
    {
        $users =User::where('utype','USER')->get();

        return view('livewire.admin.manage-users-component',['users'=> $users])->layout('layouts.base');
    }
}
