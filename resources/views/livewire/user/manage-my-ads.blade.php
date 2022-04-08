<main>
    <div class="content-area">
        <section class="page-section breadcrumbs ">
            <div class="container">
                <div class="page-header">
                    <h2 class="section-title"><span>Manage My Ads</span></h2>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home')}}">Home</a></li>
                        <li class="active">Manage All Ads</li>
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
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Search...." wire:model="searchTerm">
            </div>
          
                <table class="table table-striped table-bordered" style="width:100%">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Model</th>
                        <th scope="col">Status </th>
                        <th scope="col">Action</th>
                      </tr>
                    <tbody>

                     @foreach ($ads as $ad) 
                      <tr>
                        <td>{{ $ad->id }}</td>
                        <td>{{ $ad->brand }}</td>
                        <td>{{ $ad->model }}</td>
                        <td>{{ $ad->status }}</td>
                        <td>  
                          <a href="{{route('user.ManageMyAds.ViewAd',['ad_id'=>$ad->id])}}">
                            <i class="fa fa-eye fa-2x" aria-hidden="true"></i>
                        </a>

                          <a href="{{route('user.ManageMyAds.EditAd',['ad_id'=>$ad->id])}}">
                              <i class="fa fa-edit fa-2x "> </i>
                          </a>
                         

                          <a herf="" onclick="confirm('Are you sure, You want to delete  Ad') || event.stopImmediatePropagation()"  wire:click.prevent="delete({{$ad->id}})" style="margin-left:10px "> 
                            <i class="fa fa-trash fa-2x" aria-hidden="true"></i>
                          </a>

                           
                        </td>
                      </tr>
                     @endforeach
                    </tbody>
                </table>


              <div class="outer required">
                <div class="form-group af-inner">
                    <a href="{{ route('user.ManageMyAds.addAd') }}" class="form-button form-button-submit btn btn-theme btn-theme-dark  pull-right" id="submit_btn">
                      Add Ad
                    </a>
                </div>
              </div>
        </div>
  </section>

</main>

