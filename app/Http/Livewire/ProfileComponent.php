<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ProfileComponent extends Component
{
    public function render()
    {
        $user =User::find(Auth::user()->id);

        return view('livewire.profile-component',['user'=>$user])->layout('layouts.base');
    }
}
