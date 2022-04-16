<?php

namespace App\Http\Livewire;

use App\Models\Ad;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {   $newest = Ad::where('status','Approved')->Orderby('id', 'desc')->get();
        $lowest = Ad::where('status','Approved')->Orderby('price', 'asc')->get();
        $highest = Ad::where('status','Approved')->Orderby('price', 'desc')->get();

        $Ads =Ad::where('status','Approved')->get();

        
        return view('livewire.home-component',['Ads'=> $Ads, 'newest'=> $newest , 'lowest'=> $lowest  , 'highest'=> $highest])->layout('layouts.base');
    }
}
