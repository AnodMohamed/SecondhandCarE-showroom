<main>
    <div class="content-area">
        <section class="page-section breadcrumbs ">
            <div class="container">
                <div class="page-header">
                    <h2 class="section-title"><span>Edit Ad</span></h2>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home')}}">Home</a></li>
                        <li><a href="{{ route('user.ManageMyAds')}}">Manage My Ads</a></li>
                        <li class="active">Edit Ad</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <section class="page-section ">
        <div class="container">
            @if (Session::has('message'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('message')}}
                </div>
            @endif
            <form wire:submit.prevent="storeAd" name="contact-form"  class="contact-form" id="storeAd" enctype="multipart/form-data">

                <div class="outer required">
                    <div class="form-group af-inner">
                        <label  for="brand">Brand</label>
                        <select wire:model="brand" name="brand" id="brand" class="form-control" data-toggle="tooltip" title="" class="form-control placeholder" data-original-title="Brand is required" style="margin-bottom: 15px;"> 
                            <option disabled>Brand</option>
                            <option value="Toyota">Toyota</option>
                            <option value="Honda">Honda</option>
                            <option value="Chevrolet">Chevrolet</option>
                            <option value="Ford">Ford</option>
                            <option value="Mercedes-Benz">Mercedes-Benz</option>
                            <option value="Jeep">Jeep</option>
                            <option value="BMW">BMW</option>
                            <option value="Porsche">Porsche</option>
                            <option value="Subaru">Subaru</option>

                            <option value="Nissan">Nissan</option>
                            <option value="Cadillac">Cadillac</option>
                            <option value="Volkswagen">Volkswagen</option>
                            <option value="Lexus">Lexus</option>
                            <option value="Audi">Audi</option>
                            <option value="Ferrari">Ferrari</option>
                            <option value="Volvo">Volvo</option>
                            <option value="Jaguar">Jaguar</option>
                            <option value="GMC">GMC</option>
                            <option value="Buick">Buick</option>

                            <option value="Acura">Acura</option>
                            <option value="Bentley">Bentley</option>
                            <option value="Dodge">Dodge</option>
                            <option value="Hyundai">Hyundai</option>
                            <option value="Lincoln">Lincoln</option>
                            <option value="Mazda">Mazda</option>
                            <option value="Land Rover">Land Rover</option>
                            <option value="Tesla">Tesla</option>
                            <option value="Ram Trucks">Ram Trucks</option>
                            <option value="Kia">Kia</option>

                            <option value="Chrysler">Chrysler</option>
                            <option value="Pontiac">Pontiac</option>
                            <option value="Infiniti">Infiniti</option>
                            <option value="Mitsubishi">Mitsubishi</option>
                            <option value="Oldsmobile">Oldsmobile</option>
                            <option value="Maserati">Maserati</option>
                            <option value="Aston Martin">Aston Martin</option>
                            <option value="Bugatti">Bugatti</option>
                            <option value="Fiat">Fiat</option>
                            <option value="Kia">Kia</option>

                            <option value="Alfa Romeo">Alfa Romeo</option>
                            <option value="Saab">Saab</option>
                            <option value="Genesis">Genesis</option>
                            <option value="Suzuki">Suzuki</option>
                            <option value="Studebaker">Studebaker</option>
                            <option value="Renault">Renault</option>
                            <option value="Peugeot">Peugeot</option>
                            <option value="Daewoo">Daewoo</option>
                            <option value="Hudson">Hudson</option>
                            <option value="Citroen">Citroen</option>
                            <option value="MG">MG</option>
                        </select>
                        @error('brand')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
               
                <div class="outer required">
                    <div class="form-group af-inner">
                        <label for="model">Model </label>
                        <input  wire:model="model" type="text" name="model" id="model" placeholder="Model" value=""data-toggle="tooltip" title="" class="form-control placeholder" data-original-title="Model is required">
                        @error('model')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="outer required">
                    <div class="form-group af-inner">
                        <label for="exterior_color">Exterior color</label>
                        <select wire:model="exterior_color" name="exterior_color" id="exterior_color" class="form-control" data-toggle="tooltip" title="" class="form-control placeholder" data-original-title="Exterior color is required" style="margin-bottom: 15px;"> 
                            <option disabled>Exterior color</option>
                            <option value="White">White</option>
                            <option value="Black">Black</option>
                            <option value="Gray">Gray</option>
                            <option value="Silver">Silver</option>
                            <option value="Red">Red</option>
                            <option value="Blue">Blue</option>
                            <option value="Brown">Brown</option>
                            <option value="Green">Green</option>
                            <option value="Beige">Beige</option>

                            <option value="Orange">Orange</option>
                            <option value="Gold">Gold</option>
                            <option value="Yellow">Yellow</option>
                            <option value="Purple">Purple</option>

                        </select> 
                        @error('exterior_color')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="outer required">
                    <div class="form-group af-inner">
                        <label for="car_condition">Car conditions</label>
                        <select wire:model="car_condition" name="car_condition" id="car_condition" class="form-control" data-toggle="tooltip" title="" class="form-control placeholder" data-original-title="Car condition color is required" style="margin-bottom: 15px;"> 
                            <option disabled>Brand</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="I">I</option>
                            <option value="M">M</option>
                            <option value="RD">RD</option>
                            <option value="S">S</option>
                            <option value="V">V</option>
                            <option value="X1">X1</option>
                            <option value="X3">X3</option>
                            <option value="X4">X4</option>
                        </select>
                    </div>
                    @error('car_condition')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                   
                <div class="outer required">
                    <div class="form-group af-inner"  wire:ignore>
                        <label for="warranty_date">Warranty date</label>
                        <input wire:model="warranty_date" type="text" name="warranty_date" id="warranty_date" placeholder="Warranty date" value="" size="30" data-toggle="tooltip" title="" class="form-control " data-original-title="Warranty date is required">
                    </div>
                    @error('warranty_date')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="outer required">
                    <div class="form-group af-inner">
                        <label for="kilometere_driven">kilometere driven</label>
                        <input wire:model="kilometere_driven" type="text" name="kilometere_driven" id="kilometere_driven" placeholder="kilometere driven" value="" size="30" data-toggle="tooltip" title="" class="form-control placeholder" data-original-title="kilometere driven is required">
                    </div>
                    @error('kilometere_driven')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                
                <div class="outer required">
                    <div class="form-group af-inner">
                        <label for="regional_space">Regional space</label>
                        <select wire:model="regional_space" name="regional_space" id="regional_space" class="form-control" data-toggle="tooltip" title="" class="form-control placeholder" data-original-title="Regional space color is required" style="margin-bottom: 15px;"> 
                            <option disabled>Regional space</option>
                            <option value="GCC Specs">GCC Specs</option>
                            <option value="European Specs">European Specs</option>
                            <option value="Japanese Specs">Japanese Specs</option>
                            <option value="American Specs">American Specs</option>
                            <option value="Canadian Specs">Canadian Specs</option>
                            <option value="Not Sure">Not Sure</option>
                            <option value="Other Specs">Other Specs</option>

                        </select>
                    </div>
                    @error('regional_space')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                   
                <div class="outer required">
                    <div class="form-group af-inner">
                        <label for="accident_history">Accident history</label>
                        <select wire:model="accident_history" name="accident_history" id="accident_history" class="form-control" data-toggle="tooltip" title="" class="form-control placeholder" data-original-title="Accident history color is required" style="margin-bottom: 15px;"> 
                            <option disabled>Accident history</option>
                            <option value="Accident free">Accident free</option>
                            <option value="Yes">Yes</option>

                        </select>
                        @error('accident_history')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="outer required">
                    <div class="form-group af-inner">
                        <label for="body_style"> Body Style </label>
                        <select wire:model="body_style" name="body_style" id="body_style" class="form-control" data-toggle="tooltip" title="" class="form-control placeholder" data-original-title="body style color is required" style="margin-bottom: 15px;"> 
                            <option disabled>Body Style</option>
                            <option value="Compact"> Compact</option>
                            <option value="Coupe">Coupe</option>
                            <option value="Crossover"> Crossover</option>
                            <option value="Convertible">Convertible</option>                            
                            <option value="Hatchback"> Hatchback</option>
                            <option value="Pick up truck">Pick up truck</option>                            
                            <option value="Luxury"> Luxury</option>
                            <option value="Sedan">Sedan</option>                            
                            <option value="Sports car"> Sports car</option>
                            <option value="Roadster">Roadster</option>
                            <option value="SUV">SUV</option>                            
                            <option value="Truck"> Truck</option>
                            <option value="Mini Van">Mini Van</option>
                            <option value="Wagon">Wagon</option>                            
                            <option value="Van"> Van</option>
                            <option value="Sport Coupe">Sport Coupe</option>
                            <option value="Compact Luxury">Compact Luxury</option>                            
                            <option value="Other">Other</option>                            

                        </select>
                        @error('body_style')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="outer required">
                    <div class="form-group af-inner">
                        <label for="number_of_doors">Number Of Doors  </label>
                        <select wire:model="number_of_doors" name="number_of_doors" id="number_of_doors" class="form-control" data-toggle="tooltip" title="" class="form-control placeholder" data-original-title="Number Of Doors color is required" style="margin-bottom: 15px;"> 
                            <option disabled>Number Of Doors</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>

                        </select>
                        @error('number_of_doors')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="outer required">
                    <div class="form-group af-inner">
                        <label for="fuel_type"> Fuel Type</label>
                        <select wire:model="fuel_type" name="fuel_type" id="fuel_type" class="form-control" data-toggle="tooltip" title="" class="form-control placeholder" data-original-title="Fuel Type  is required" style="margin-bottom: 15px;"> 
                            <option disabled>Fuel Type</option>
                            <option value="Petrol">Petrol</option>
                            <option value="Diesel"> Diesel</option>
                            <option value="Hybrid">Hybrid</option>
                            <option value="Electric">Electric</option>

                        </select>
                        @error('fuel_type')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                
                <div class="outer required">
                    <div class="form-group af-inner">
                        <label for="engine_CC"> Engine CC </label>
                        <input wire:model="engine_CC" type="text" name="engine_CC" id="engine_CC" placeholder="Model" value="" size="30" data-toggle="tooltip" title="" class="form-control placeholder" data-original-title=" engine_CC is required">
                    </div>
                    @error('engine_CC')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="outer required">
                    <div class="form-group af-inner">
                        <label for="nunber_of_cylinders"> Nunber of cylinders  </label>
                        <select wire:model="nunber_of_cylinders" name="nunber_of_cylinders" id="fuel_type" class="form-control" data-toggle="tooltip" title="" class="form-control placeholder" data-original-title="Nunber of cylinders is required" style="margin-bottom: 15px;"> 
                            <option disabled>Nunber of cylinders</option>
                            <option value="3">3</option>
                            <option value="4"> 4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="8">8</option>
                            <option value="10">10</option>
                            <option value="12">12</option>
                            <option value="16">16</option>
                            <option value="N/A, Electric">N/A, Electric</option>
                            <option value="Not Sure">Not Sure</option>

                        </select>
                        @error('nunber_of_cylinders')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="outer required">
                    <div class="form-group af-inner">
                        <label for="Transmission"> Transmission </label>
                        <select wire:model="Transmission" name="Transmission" id="Transmission" class="form-control" data-toggle="tooltip" title="" class="form-control placeholder" data-original-title="Transmission  is required" style="margin-bottom: 15px;"> 
                            <option disabled>Transmission </option>
                            <option value="Automatic">Automatic</option>
                            <option value="Manual"> Manual</option>
                            <option value="CVT">CVT</option>

                        </select>
                    </div>
                    @error('Transmission')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                
                <div class="outer required">
                    <div class="form-group af-inner">
                        <label for="drive_type">  Drive Type  </label>
                        <select wire:model="drive_type" name="drive_type" id="drive_type" class="form-control" data-toggle="tooltip" title="" class="form-control placeholder" data-original-title=" Drive type  is required" style="margin-bottom: 15px;"> 
                            <option disabled>Drive Type </option>
                            <option value="Rear Wheel Drive">Rear Wheel Drive</option>
                            <option value="Front Wheel Drive"> Front Wheel Drive</option>
                            <option value="All Wheel Drive">All Wheel Drive</option>

                        </select>
                        @error('drivey_type')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                                
                <div class="outer required">
                    <div class="form-group af-inner">
                        <label for="features"> features </label>
                        <input wire:model="features" type="text" name="features" id="features" placeholder="features" value="" size="30" data-toggle="tooltip" title="" class="form-control placeholder" data-original-title=" features is required">
                        @error('features')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
               
                <div class="outer required">
                    <div class="form-group af-inner">
                        <label for="body_number"> Body number </label>
                        <input wire:model="body_number" type="text" name="body_number" id="body_number" placeholder="Body number" value="" size="30" data-toggle="tooltip" title="" class="form-control placeholder" data-original-title=" Body_number is required">
                        @error('body_number')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="outer required">
                    <div class="form-group af-inner"  wire:ignore>
                        <label for="year_of_ownership">Year of ownership</label>
                        <input wire:model="year_of_ownership" type="text" name="year_of_ownership" id="year_of_ownership" placeholder="Year of ownership" value="" size="30" data-toggle="tooltip" title="" class="form-control " data-original-title="Year of ownership is required">
                        @error('year_of_ownership')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
          
                
                <div class="outer required">
                    <div class="form-group af-inner"  >
                        <label for="price">Price</label>
                        <input wire:model="price" type="text" name="price" id="price" placeholder="Price" value="" size="30" data-toggle="tooltip" title="" class="form-control " data-original-title="Price is required">
                        @error('price')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-group af-inner" wire:ignore>
                    <div class="form-group af-inner"  >
                        <label for="note">Note</label>
                        <textarea wire:model="note" name="note" id="note" placeholder="Note" rows="4" cols="50" data-toggle="tooltip" title="" class="form-control placeholder" data-original-title="Message is required"></textarea>
                        @error('note')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                
                <div class="outer ">
                    <div class="form-group af-inner"  >
                        <label for="file">check up file</label>
                        <input wire:model="new_file" type="file" name="new_file" id="new_file" placeholder="check up file" value=""  data-toggle="tooltip" title="" class="form-control " >
                        @error('new_file')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="mb-6 col-8">
                    <label class=" control-label">Main Image </label>
                    <input type="file" placeholder="Product Image" class="form-control input-md input-file" wire:model="new_image"/>
                    @error('new_image')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    
                </div> 
                
               
                <div class="mb-6 col-8">

                    <label class=" control-label">Car Gallery </label>
                    <p class="text-secondary">Select all images one time </p>
                    <input type="file" placeholder="Product images" class="form-control input-md input-file" wire:model="new_images" multiple/>
                    @error('new_images')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                   
                </div> 
                

                <div class="outer required">
                    <div class="form-group af-inner">
                        <input type="submit" name="submit" class="form-button form-button-submit btn btn-theme btn-theme-dark  pull-right" id="submit_btn" value="Submit">
                    </div>
                </div>

            </form>
            
        </div>
    </section>

</main>

@push('scripts')

     <script>
         $(function () {
             $('#warranty_date').datetimepicker({
                 format : 'Y-MM-DD'
             })
             .on('dp.change', function (ev) {
                 var data = $('#warranty_date').val();
                 @this.set('warranty_date', data)
             });
         });
 
        $(function () {
            $('#year_of_ownership').datetimepicker({
                format : 'Y-MM-DD'
            })
            .on('dp.change', function (ev) {
                var data = $('#year_of_ownership').val();
                @this.set('year_of_ownership', data)
            });
        });

        $(function(){
            tinymce.init({
                selector: '#note',
                setup: function (editor) {
                    editor.on('Change', function(e){
                        tinyMCE.triggerSave();
                        var sd_data = $('#note').val();
                        @this.set('note', sd_data);
                    })
                }
            });
          
        });
    </script>
 @endpush