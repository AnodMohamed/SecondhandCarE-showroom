
    <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">

                <div class="tabs">
                    <ul id="tabs" class="nav nav-justified-off"><!--
                        --><li class="active"><a href="#tab-1" data-toggle="tab">Newest</a></li><!--
                        --><li class=""><a href="#tab-2" data-toggle="tab">Lowest price</a></li><!--
                        --><li class=""><a href="#tab-3" data-toggle="tab">Highest price  </a></li>
                    </ul>
                </div>

                <div class="tab-content">

                        <!-- tab 1 -->
                    <div class="tab-pane fade active in" id="tab-1">
                        <div class="row">
                             @if (!$newest->isEmpty())
                                @foreach ($newest as $new)
                                    <div class="col-md-3 col-sm-6">
                                        <div class="thumbnail no-border no-padding">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="{{asset('storage/gallery')}}/{{$new->image}}">
                                                    <img src="{{asset('storage/gallery')}}/{{$new->image}}" alt="" style="height:200px ; width:200px "/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="{{ route('ad',['ad_id'=>$new->id ]) }}"><strong> {{$new->brand}} </strong>  {{$new->model}} </a></h4>
                                            
                                                <div class="price"><ins>{{ $new->price }}</ins> </div>
                                                @if(Route::has('login'))
                                                    @auth
                                                        @if ($new->user_id != Auth::user()->id)
                                                        <div class="buttons">
                                                            <a class="btn btn-theme btn-theme-transparent" href="{{ route('user.Chat',['user_id'=>$new->user_id ]) }}">Contact</a>
                                                        </div>
                                                        @endif
                                                    @endauth
                                                @endif 
                                                   
                                                
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                             @endif
                        </div>
                    </div>

                    <!-- tab 2 -->
                    <div class="tab-pane fade  " id="tab-2">
                        <div class="row">
                            @if (!$lowest->isEmpty())
                            @foreach ($lowest as $low)
                                <div class="col-md-3 col-sm-6">
                                    <div class="thumbnail no-border no-padding">
                                        <div class="media">
                                            <a class="media-link" data-gal="prettyPhoto" href="{{asset('storage/gallery')}}/{{$low->image}}">
                                                <img src="{{asset('storage/gallery')}}/{{$low->image}}" alt="" style="height:200px ; width:200px "/>
                                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                            </a>
                                        </div>
                                        <div class="caption text-center">
                                            <h4 class="caption-title"><a href="{{ route('ad',['ad_id'=>$low->id ]) }}"><strong> {{$low->brand}} </strong>  {{$low->model}} </a></h4>
                                        
                                            <div class="price"><ins>{{ $low->price }}</ins> </div>
                                            @if(Route::has('login'))
                                                @auth
                                                    @if ($low->user_id != Auth::user()->id)
                                                    <div class="buttons">
                                                        <a class="btn btn-theme btn-theme-transparent" href="{{ route('user.Chat',['user_id'=>$low->user_id ]) }}">Contact</a>
                                                    </div>
                                                    @endif
                                                @endauth
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                         @endif
                        </div>
                    </div>

                    <!-- tab 3 -->
                    <div class="tab-pane fade" id="tab-3">
                        <div class="row">
                            @if (!$highest->isEmpty())
                            @foreach ($highest as $high)
                                <div class="col-md-3 col-sm-6">
                                    <div class="thumbnail no-border no-padding">
                                        <div class="media">
                                            <a class="media-link" data-gal="prettyPhoto" href="{{asset('storage/gallery')}}/{{$high->image}}">
                                                <img src="{{asset('storage/gallery')}}/{{$high->image}}" alt="" style="height:200px ; width:200px "/>
                                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                            </a>
                                        </div>
                                        <div class="caption text-center">
                                            <h4 class="caption-title"><a href="{{ route('ad',['ad_id'=>$high->id ]) }}"><strong> {{$high->brand}} </strong>  {{$high->model}} </a></h4>
                                        
                                            <div class="price"><ins>{{ $high->price }}</ins> </div>
                                            @if(Route::has('login'))
                                                @auth
                                                    @if ($high->user_id != Auth::user()->id)
                                                    <div class="buttons">
                                                        <a class="btn btn-theme btn-theme-transparent" href="{{ route('user.Chat',['user_id'=>$high->user_id ]) }}">Contact</a>
                                                    </div>
                                                    @endif
                                                @endauth
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                         @endif
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">
                <div class="message-box">
                    <div class="message-box-inner">
                        <h2>publish Ad Free </h2>

                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        @if (!$Ads->isEmpty())
        <section class="page-section">
            <div class="container">
                <h2 class="section-title"><span>ADs</span></h2>
                
                <div class="top-products-carousel">
                    <div class="owl-carousel" id="top-products-carousel">
                    @foreach ($Ads as $Ad)
                    <div class="thumbnail no-border no-padding">
                        <div class="media">
                            <a class="media-link" data-gal="prettyPhoto" href="{{asset('storage/gallery')}}/{{$Ad->image}}">
                                <img src="{{asset('storage/gallery')}}/{{$Ad->image}}" alt="" style="height:200px ; width:200px "/>
                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4 class="caption-title"><a href="{{ route('ad',['ad_id'=>$Ad->id ]) }}"><strong> {{$Ad->brand}} </strong>  {{$Ad->model}}</a></h4>
                            <div class="price"><ins>{{$Ad->price}}</ins> </div>
                            @if(Route::has('login'))
                                @auth
                                    @if ($Ad->user_id != Auth::user()->id)
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent" href="{{ route('user.Chat',['user_id'=>$Ad->user_id ]) }}">Contact</a>
                                        </div>
                                    @endif                                    
                                @endauth
                            @endif
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->
        @endif

     
        <!-- PAGE -->
        {{----------
        <section class="page-section">
            <div class="container">
                <h2 class="section-title"><span>Brand &amp; Clients</span></h2>
                <div class="partners-carousel">
                    <div class="owl-carousel" id="partners">
                        <div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>
                        <div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>
                        <div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>
                        <div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>
                        <div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>
                        <div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>
                        <div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>
                        <div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>
                        <div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>
                        <div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>
                        <div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>
                        <div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="product-list">
                            <a class="btn btn-theme btn-title-more" href="#">See All</a>
                            <h4 class="block-title"><span>Top Sellers</span></h4>
                            <div class="media">
                                <a class="pull-right media-link" href="#">
                                    <img class="media-object" src="assets/img/preview/shop/top-sellers-1.jpg" alt="">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Standard Product Header</a></h4>
                                    <div class="rating">
                                        <span class="star"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span>
                                    </div>
                                    <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-right media-link" href="#">
                                    <img class="media-object" src="assets/img/preview/shop/top-sellers-2.jpg" alt="">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Standard Product Header</a></h4>
                                    <div class="rating">
                                        <span class="star"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span>
                                    </div>
                                    <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-right media-link" href="#">
                                    <img class="media-object" src="assets/img/preview/shop/top-sellers-3.jpg" alt="">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Standard Product Header</a></h4>
                                    <div class="rating">
                                        <span class="star"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span>
                                    </div>
                                    <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-list">
                            <a class="btn btn-theme btn-title-more" href="#">See All</a>
                            <h4 class="block-title"><span>Top Accessories</span></h4>
                            <div class="media">
                                <a class="pull-right media-link" href="#">
                                    <img class="media-object" src="assets/img/preview/shop/top-sellers-4.jpg" alt="">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Standard Product Header</a></h4>
                                    <div class="rating">
                                        <span class="star"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span>
                                    </div>
                                    <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-right media-link" href="#">
                                    <img class="media-object" src="assets/img/preview/shop/top-sellers-5.jpg" alt="">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Standard Product Header</a></h4>
                                    <div class="rating">
                                        <span class="star"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span>
                                    </div>
                                    <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-right media-link" href="#">
                                    <img class="media-object" src="assets/img/preview/shop/top-sellers-6.jpg" alt="">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Standard Product Header</a></h4>
                                    <div class="rating">
                                        <span class="star"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span>
                                    </div>
                                    <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-list">
                            <a class="btn btn-theme btn-title-more" href="#">See All</a>
                            <h4 class="block-title"><span>Top Newest</span></h4>
                            <div class="media">
                                <a class="pull-right media-link" href="#">
                                    <img class="media-object" src="assets/img/preview/shop/top-sellers-7.jpg" alt="">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Standard Product Header</a></h4>
                                    <div class="rating">
                                        <span class="star"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span>
                                    </div>
                                    <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-right media-link" href="#">
                                    <img class="media-object" src="assets/img/preview/shop/top-sellers-8.jpg" alt="">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Standard Product Header</a></h4>
                                    <div class="rating">
                                        <span class="star"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span>
                                    </div>
                                    <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-right media-link" href="#">
                                    <img class="media-object" src="assets/img/preview/shop/top-sellers-9.jpg" alt="">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Standard Product Header</a></h4>
                                    <div class="rating">
                                        <span class="star"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span>
                                    </div>
                                    <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        ----------}}
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section no-padding-top">
            <div class="container">
                <div class="row blocks shop-info-banners">
                    <div class="col-md-4">
                        <div class="block">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="media-heading">Browse Ads For Second Hand Cars</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="media-heading">Publish Your Car AD Free</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="media-heading">Contact With ADs User Free</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->

    </div>
    <!-- /CONTENT AREA -->