<?php

namespace App\Http\Livewire\User;

use App\Models\Ad;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class AddAdComponent extends Component
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
    public $file;
    public $image;
    public $images;

    
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
            'Transmission'=>'required',
            'drive_type'=>'required',
            'features'=>'required',
            'body_number'=>'required | numeric',
            'year_of_ownership'=>'required',
            'price'=>'required | numeric',
            'note'=>'required ',

            'file'=>'required|mimes:pdf',
            'image'=>'required |mimes:jpg,jpeg,png',

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
            'Transmission'=>'required',

            'drive_type'=>'required',
            'features'=>'required',
            'body_number'=>'required | numeric',
            'year_of_ownership'=>'required',

            'price'=>'required | numeric',
            'note'=>'required ',

            'file'=>'required|mimes:pdf',
            'image'=>'required |mimes:jpg,jpeg,png',

        ]);
       $ad = new Ad();
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
       $ad->Transmission = $this->Transmission;    

       $ad->drive_type = $this->drive_type;       
       $ad->features = $this->features;       
       $ad->body_number = $this->body_number;    

       $ad->year_of_ownership = $this->year_of_ownership;       
       $ad->price = $this->price;       
       $ad->note = $this->note;  

       $fileName      = $this->file->getClientOriginalName();
       $fileExtention  = time() . '.' . $fileName;
       $this->file->storeAs('files',$fileExtention, 'public');
       $ad->file = $fileExtention; 

       $imageName      = $this->image->getClientOriginalName();
       $imageExtention  = time() . '.' . $imageName;
       $this->image->storeAs('gallery',$imageExtention, 'public');
       $ad->image = $imageExtention;  

       if($this->images)
       {
           $imagesname = '';
           foreach($this->images as $key=>$img)
           {
            $image      = $img->getClientOriginalName();
            $imagesExtention  = time() . '.' . $key . '.'. $image;
            $img->storeAs('gallery',$imagesExtention, 'public');
            $imagesname = $imagesname . ',' . $imagesExtention ;
           }
           $ad->images =$imagesname;
       }

 
       $ad->save();
       
       session()->flash('message', 'Ad is added successfully');
       $this->emit('fileUploaded');

    }
    public function render()
    {
        return view('livewire.user.add-ad-component')->layout('layouts.base');
    }
}
