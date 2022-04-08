<div >
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
            <section class="page-section breadcrumbs ">
                <div class="container">
                    <div class="page-header">
                        <h2 class="section-title"><span>View Ad</span></h2>
                        <ul class="breadcrumb">
                            <li><a href="{{ route('home')}}">Home</a></li>
                            <li class="active"><a href="{{ route('admin.ManageMyAds')}}">Mang All Ads</a> </li>
                            <li class="active">View Ad</li>
                        </ul>
                    </div>
                </div>
            </section>
            <div class="row product-single">
                {{---
                <div class="col-md-6">
                    <h4 class="text-danger text-center" style="">Please Upload Car's Images to make the Ad active  !</h4>
                </div>
                --}}
                
                <div class="col-md-6">

                    <div class="owl-carousel img-carousel">

                        @foreach ($imagex as $img )
                            @if(!empty($img))
                                <div class="item">
                                    <a class="btn btn-theme btn-theme-transparent btn-zoom" href="{{ asset('storage/gallery') }}/{{ $img }}" data-gal="prettyPhoto" ><i class="fa fa-plus"></i></a>
                                    <a href="{{ asset('storage/gallery') }}/{{ $img }}" data-gal="prettyPhoto"><img class="img-responsive" src="{{ asset('storage/gallery') }}/{{ $img }}" alt="" /></a>
                                </div>
                            @endif

                        @endforeach
                        
                        
                    </div>
                    <div class="row product-thumbnails">
                        @foreach ($imagex as $img )
                            @if(!empty($img))
                                <div class="col-xs-2 col-sm-2 col-md-3"><a href="#" onclick="jQuery('.img-carousel').trigger('to.owl.carousel', [0,300]);"><img src="{{ asset('storage/gallery') }}/{{ $img }}" alt=""/></a></div>
                             @endif
                         @endforeach

                    </div>
                </div>

                <div class="col-md-6">
                    <h2 class="product-title">Brand :{{ $brand }}</h2>
                    <div class="product-rating clearfix">
                      
                        <span class="reviews">Model:</span> |<span class="add-review" >{{ $model }}</span>
                    </div>
                    <div class="product-availability">Exterior color: {{  $exterior_color }}</div>
                    <hr class="page-divider small"/>

                    <div class="product-price">Price: {{ $price }}</div>
                    <hr class="page-divider"/>

                    <div class="product-text">
                        <p> Note :</p>
                        <p> {{ $note }}</p>
                        <ul>   
                          Fe
                        </ul>
                    </div>
                    <hr class="page-divider"/>

                    <hr class="page-divider small"/>

                    <hr class="page-divider small"/>

                    <table>
                        <tr>
                            <td class="title">Car condition:</td>
                            <td>{{ $car_condition }} </td>
                        </tr>
                        <tr>
                            <td class="title">Warranty date:</td>
                            <td>{{ $warranty_date }}</td>
                        </tr>
                        <tr>
                            <td class="title">Kilometere driven:</td>
                            <td> {{ $kilometere_driven }} </td>
                        </tr>

                        <tr>
                            <td class="title">Regional space:</td>
                            <td>{{ $regional_space }} </td>
                        </tr>
                        <tr>
                            <td class="title">Accident history:</td>
                            <td>{{ $accident_history }}</td>
                        </tr>
                        <tr>
                            <td class="title">Body style:</td>
                            <td> {{ $body_style }} </td>
                        </tr>

                        <tr>
                            <td class="title">Number of doors:</td>
                            <td>{{ $number_of_doors }} </td>
                        </tr>
                        <tr>
                            <td class="title">fuel type:</td>
                            <td>{{ $fuel_type }}</td>
                        </tr>
                        <tr>
                            <td class="title">Engine CC:</td>
                            <td> {{ $engine_CC }} </td>
                        </tr>

                        <tr>
                            <td class="title"> Nunber Of Cylinders:</td>
                            <td>{{ $nunber_of_cylinders }} </td>
                        </tr>
                        <tr>
                            <td class="title"> Transmission:</td>
                            <td>{{ $transmission }}</td>
                        </tr>
                        <tr>
                            <td class="title">Drive type:</td>
                            <td> {{ $drive_type }} </td>
                        </tr>

                        <tr>
                            <td class="title"> Body number:</td>
                            <td>{{ $body_number }} </td>
                        </tr>
                        <tr>
                            <td class="title"> Year of ownership:</td>
                            <td>{{ $year_of_ownership }}</td>
                        </tr>
                       
                    </table>
                    <div class="buttons">
                        <a herf="" class="btn btn-theme btn-cart btn-icon-left" onclick="confirm('Are you sure, You want to download the file') || event.stopImmediatePropagation()"  wire:click.prevent="download( {{ $ad_id }})" style="margin-left:10px "> 
                            Check up 
                        </a>
                    </div>
                    <hr class="page-divider small"/>
                    
                   

                </div>
            </div>

        </div>
    </section>
    <!-- /PAGE -->



    <!-- PAGE -->
    {{----
    <section class="page-section">
        <div class="container">
            <div class="tabs-wrapper content-tabs">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#item-description" data-toggle="tab">Item Description</a></li>
                    <li><a href="#reviews" data-toggle="tab">Reviews (2)</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="item-description">
                        <p>Integer egestas, orci id condimentum eleifend, nibh nisi pulvinar eros, vitae ornare massa neque ut orci. Nam aliquet lectus sed odio eleifend, at iaculis dolor egestas. Nunc elementum pellentesque augue sodales porta. Etiam aliquet rutrum turpis, feugiat sodales ipsum consectetur nec. </p>
                        <p>Morbi imperdiet lacus nec ante blandit, sit amet fermentum magna faucibus. Nunc nec libero id urna vulputate venenatis. Aenean vulputate odio felis, in rhoncus sapien auctor nec. Donec non posuere sem. Ut quis egestas libero, mattis gravida nibh. Phasellus a nisi ac mi luctus tincidunt et non est. Proin ac orci rhoncus arcu bibendum molestie vel et metus. Aenean iaculis purus et velit iaculis, nec convallis ipsum ornare. Integer a orci enim.</p>
                    </div>
                    <div class="tab-pane fade" id="reviews">

                        <div class="comments">
                            <div class="media comment">
                                <a href="#" class="pull-left comment-avatar">
                                    <img alt="" src="assets/img/preview/avatars/avatar-1.jpg" class="media-object">
                                </a>
                                <div class="media-body">
                                    <p class="comment-meta"><span class="comment-author"><a href="#">User Name Here</a> <span class="comment-date"> 26 days ago <i class="fa fa-flag"></i></span></span></p>
                                    <p class="comment-text">Donec ullamcorper nulla non metus auctor fringilla. Etiam porta sem malesuada magna mollis euismd. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere.</p>
                                </div>
                            </div>
                            <div class="media comment">
                                <a href="#" class="pull-left comment-avatar">
                                    <img alt="" src="assets/img/preview/avatars/avatar-3.jpg" class="media-object">
                                </a>
                                <div class="media-body">
                                    <p class="comment-meta"><span class="comment-author"><a href="#">User Name Here</a> <span class="comment-date"> 26 days ago <i class="fa fa-flag"></i></span></span></p>
                                    <p class="comment-text">Donec ullamcorper nulla non metus auctor fringilla. Etiam porta sem malesuada magna mollis euismd. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere.</p>
                                </div>
                            </div>
                        </div>
                        <div class="comments-form">
                            <h4 class="block-title">Add a Review</h4>
                            <form method="post" action="#" name="comments-form" id="comments-form">
                                <div class="form-group"><input type="text" placeholder="Your name and surname" class="form-control" title="comments-form-name" name="comments-form-name"></div>
                                <div class="form-group"><input type="text" placeholder="Your email adress" class="form-control" title="comments-form-email" name="comments-formemail"></div>
                                <div class="form-group"><textarea placeholder="Your message" class="form-control" title="comments-form-comments" name="comments-form-comments" rows="6"></textarea></div>
                                <div class="form-group"><button type="submit" class="btn btn-theme btn-theme-transparent btn-icon-left" id="submit"><i class="fa fa-comment"></i> Review</button></div>
                            </form>
                        </div>
                        <!-- // -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /PAGE -->

    ----}}
   
    </div>
    </div>
  </div>
</div>
<!-- /CONTENT AREA -->