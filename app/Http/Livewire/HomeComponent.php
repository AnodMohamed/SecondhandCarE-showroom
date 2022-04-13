<?php

namespace App\Http\Livewire;

use App\Models\Ad;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $Ads =Ad::where('status','Approved')->get();

        return view('livewire.home-component',['Ads'=> $Ads])->layout('layouts.base');
    }
}
