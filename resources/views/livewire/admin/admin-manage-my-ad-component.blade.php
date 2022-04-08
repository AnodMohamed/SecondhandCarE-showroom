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
                        <th scope="col">Change Status</th>

                      </tr>
                    <tbody>

                     @foreach ($ads as $ad) 
                      <tr>
                        <td>{{ $ad->id }}</td>
                        <td>{{ $ad->brand }}</td>
                        <td>{{ $ad->model }}</td>
                        <td>{{ $ad->status }}</td>
                        <td>  
                          <a href="{{route('admin.ManageMyAds.ViewAd',['ad_id'=>$ad->id])}}">
                            <i class="fa fa-eye fa-2x" aria-hidden="true"></i>
                        </a>
                         

                          <a herf="" onclick="confirm('Are you sure, You want to delete  Ad') || event.stopImmediatePropagation()"  wire:click.prevent="delete({{$ad->id}})" style="margin-left:10px "> 
                            <i class="fa fa-trash fa-2x" aria-hidden="true"></i>
                          </a>

                           
                        </td>
                        <td>  
                            @if ( $ad->status != "Rejected")
                                <a herf="" onclick="confirm('Are you sure, You want to reject  Ad') || event.stopImmediatePropagation()"  wire:click.prevent="reject({{$ad->id}})" style="margin-left:10px "> 
                                    <i class="fa fa-ban fa-2x" aria-hidden="true"></i>
                                </a>
                            @endif
                            
                            @if ( $ad->status != "Approved")
                                <a herf="" onclick="confirm('Are you sure, You want to approve  Ad') || event.stopImmediatePropagation()"  wire:click.prevent="approve({{$ad->id}})" style="margin-left:10px "> 
                                    <i class="fa fa-thumbs-up fa-2x" aria-hidden="true"></i>
                                </a>
                            @endif

                            @if ( $ad->status != "Blocked")
                                <a herf="" onclick="confirm('Are you sure, You want to block Ad') || event.stopImmediatePropagation()"  wire:click.prevent="block({{$ad->id}})" style="margin-left:10px "> 
                                    <i class="fa fa-lock fa-2x" aria-hidden="true"></i>
                                </a>
                            @endif

                            
  
                             
                          </td>
                      </tr>
                     @endforeach
                    </tbody>
                </table>


        </div>
  </section>

</main>

