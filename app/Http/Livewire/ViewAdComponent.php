<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ad;
use App\Models\User;
use Livewire\WithFileUploads;
class ViewAdComponent extends Component
{
    use WithFileUploads;

    public $brand;
    public $model;
    public $exterior_color;
    public $car_condition;

    public $warranty_date;
    public $kilometere_driven;
    public $regional_space;
    public $accident_history;

    public $body_style;
    public $number_of_doors;
    public $fuel_type;
    public $engine_CC;

    public $nunber_of_cylinders;
    public $Transmission;
    public $drive_type;
    public $features;

    public $body_number;
    public $year_of_ownership;
    public $price;
    public $note;
    public $new_file;
    public $file;
    public $user_id;
    public $ad_id;
    public $name;

    public $image;
    public $images;

    public function mount($ad_id)
    {
        $this->id=$ad_id;
        $ad = Ad::where('id', $ad_id)->first();
        $this->brand = $ad->brand;
        $this->model = $ad->model;
        $this->exterior_color = $ad->exterior_color;
        $this->car_condition = $ad->car_condition;

        $this->warranty_date = $ad->warranty_date;
        $this->kilometere_driven = $ad->kilometere_driven;
        $this->regional_space = $ad->regional_space;
        $this->accident_history = $ad->accident_history;

        $this->body_style = $ad->body_style;
        $this->number_of_doors = $ad->number_of_doors;
        $this->fuel_type = $ad->fuel_type;
        $this->engine_CC = $ad->engine_CC;

        $this->nunber_of_cylinders = $ad->nunber_of_cylinders;
        $this->transmission = $ad->transmission;
        $this->drive_type = $ad->drive_type;
        $this->features = $ad->features;

        $this->body_number = $ad->body_number;
        $this->year_of_ownership = $ad->year_of_ownership;
        $this->price = $ad->price;
        $this->note = $ad->note;
        $this->file = $ad->file;
        $this->user_id = $ad->user_id;
        
        $this->image = $ad->image;
        $this->images = $ad->images;

        $user = User::where('id',  $this->user_id )->first();
        $this->name =$user->name;


    }
    public function download($ad_id)
    {
        $ad =Ad::find($ad_id);
        return response()->download(storage_path('app\public\files\\'. $ad->file));
    }

    public function render()
    {
        $imagex = explode(',' ,$this->images);

        return view('livewire.view-ad-component',['imagex'=>$imagex,])->layout('layouts.base');
    }
}
