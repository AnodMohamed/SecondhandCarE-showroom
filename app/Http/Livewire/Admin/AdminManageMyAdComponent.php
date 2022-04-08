<?php

namespace App\Http\Livewire\Admin;

use App\Models\Ad;
use Livewire\Component;

class AdminManageMyAdComponent extends Component
{
    public $searchTerm;
    public function delete($id)
    {
        $ad =Ad::find($id);
        $ad->delete();
        session()->flash('message', 'Ad is deleted successfully');

    }

    public function reject($id)
    {
        $ad =Ad::find($id);
        $ad->status = "Rejected";
        $ad->save();
        session()->flash('message', 'Ad is rejected successfully');

    }

    public function approve($id)
    {
        $ad =Ad::find($id);
        $ad->status = "Approved";
        $ad->save();
        session()->flash('message', 'Ad is Approveed successfully');
    }

    public function block($id)
    {
        $ad =Ad::find($id);
        $ad->status = "Blocked";
        $ad->save();
        session()->flash('message', 'Ad is Blocked successfully');

    }
    
    public function render()
    {
        $search ='%'.$this->searchTerm. '%';

        $ads =Ad::where('brand','LIKE', $search)
                    ->orWhere('model','LIKE',$search)
                    ->orWhere('id','DESC',$search)-> paginate();
        return view('livewire.admin.admin-manage-my-ad-component',['ads'=> $ads])->layout('layouts.base');
    }
}
