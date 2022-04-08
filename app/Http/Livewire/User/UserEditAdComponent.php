<?php

namespace App\Http\Livewire\User;

use App\Models\Ad;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class UserEditAdComponent extends Component
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
    public $new_image;
    public $image;
    public $new_images;
    public $images;
    public $ad_id;
    
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
        $this->image = $ad->image;
        $this->images = $ad->images;


    }

    
    public function updated($fields)
    {   
        $this->validateOnly($fields,[
            'brand'=>'required',
            'model'=>'required',
            'exterior_color'=>'required ',
            'car_condition'=>'required',

            'warranty_date'=>'required',
            'kilometere_driven'=>'required | numeric',
            'regional_space'=>'required',

            'accident_history'=>'required',
            'body_style'=>'required',
            'number_of_doors'=>'required',

            'fuel_type'=>'required',
            'engine_CC'=>'required',
            'nunber_of_cylinders'=>'required',
            'transmission'=>'required',
            'drive_type'=>'required',
            'features'=>'required',
            'body_number'=>'required | numeric',
            'year_of_ownership'=>'required',
            'price'=>'required | numeric',
            'note'=>'required ',
            'new_file'=>'nullable | mimes:pdf',
            'new_image'=>'nullable |mimes:jpg,jpeg,png',

        ]);

    }

    public function storeAd()
    {   
        $this->validate([
            'brand'=>'required',
            'model'=>'required',
            'exterior_color'=>'required ',
            'car_condition'=>'required',

            'warranty_date'=>'required',
            'kilometere_driven'=>'required | numeric',
            'regional_space'=>'required',

            'accident_history'=>'required',
            'body_style'=>'required',
            'number_of_doors'=>'required',

            'fuel_type'=>'required',
            'engine_CC'=>'required',
            'nunber_of_cylinders'=>'required',
            'transmission'=>'required',

            'drive_type'=>'required',
            'features'=>'required',
            'body_number'=>'required | numeric',
            'year_of_ownership'=>'required',

            'price'=>'required | numeric',
            'note'=>'required ',
            'new_file'=>'nullable | mimes:pdf',
            'new_image'=>'nullable |mimes:jpg,jpeg,png',


        ]);
       $ad =Ad::find($this->ad_id);
       $ad->brand = $this->brand;       
       $ad->user_id = Auth::user()->id;  
       $ad->brand = $this->brand;       
       $ad->model = $this->model;       
       $ad->exterior_color = $this->exterior_color;       
       $ad->car_condition = $this->car_condition;       
       $ad->warranty_date = $this->warranty_date;       
       $ad->kilometere_driven = $this->kilometere_driven;       
       $ad->regional_space = $this->regional_space;       
       $ad->accident_history = $this->accident_history;       

       $ad->body_style = $this->body_style;       
       $ad->number_of_doors = $this->number_of_doors;       
       $ad->fuel_type = $this->fuel_type;       

       $ad->engine_CC = $this->engine_CC;       
       $ad->nunber_of_cylinders = $this->nunber_of_cylinders;       
       $ad->transmission = $this->transmission;    

       $ad->drive_type = $this->drive_type;       
       $ad->features = $this->features;       
       $ad->body_number = $this->body_number;    

       $ad->year_of_ownership = $this->year_of_ownership;       
       $ad->price = $this->price;       
       $ad->note = $this->note;  


        if($this->new_file){

            $fileName      = $this->new_file->getClientOriginalName();
            $fileExtention  = time() . '.' . $fileName;
            $this->new_file->storeAs('files',$fileExtention , 'public');
            $ad->file = $fileExtention;
            $this->emit('fileUploaded');
        }

        if($this->new_image){

            $imageName      = $this->new_image->getClientOriginalName();
            $imageExtention  = time() . '.' . $imageName;
            $this->new_image->storeAs('gallery',$imageExtention, 'public');
            $ad->image = $imageExtention;
            $this->emit('fileUploaded');
        }

        if($this->new_images)
        {
            $imagesname = '';
            foreach($this->new_images as $key=>$img)
            {
             $image      = $img->getClientOriginalName();
             $imagesExtention  = time() . '.' . $key . '.'. $image;
             $img->storeAs('gallery',$imagesExtention, 'public');
             $imagesname = $imagesname . ',' . $imagesExtention ;
            }
            $ad->images =$imagesname;
        }
 
       $ad->save();
       session()->flash('message', 'Ad is upload successfully');

    }
    public function render()
    {
        $ad = Ad::where('id', $this->id)->first();
        return view('livewire.user.user-edit-ad-component',['ad'=>$ad])->layout('layouts.base');
    }
}
