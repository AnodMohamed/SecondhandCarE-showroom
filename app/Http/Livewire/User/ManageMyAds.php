<?php

namespace App\Http\Livewire\User;

use App\Models\Ad;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ManageMyAds extends Component
{
    public $searchTerm;
    public function delete($id)
    {
        $ad =Ad::find($id);
        $ad->delete();
        session()->flash('message', 'Ad is deleted successfully');
        //send message to user

    }
    public function render()
    {
        $search ='%'.$this->searchTerm. '%';

        $ads =Ad::where('brand','LIKE', $search)
                    ->orWhere('model','LIKE',$search)
                    ->orWhere('id','DESC',$search)-> paginate()
                    ->where('user_id',Auth::user()->id);

        return view('livewire.user.manage-my-ads',['ads'=> $ads])->layout('layouts.base');
    }
}
