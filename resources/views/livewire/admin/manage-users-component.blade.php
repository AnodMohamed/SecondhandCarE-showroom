<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
<style>
table.dataTable thead .sorting:after,
table.dataTable thead .sorting:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before {
bottom: .5em;
}
</style>

<main>
    <div class="content-area">
        <section class="page-section breadcrumbs ">
            <div class="container">
                <div class="page-header">
                    <h2 class="section-title"><span>Manage Users</span></h2>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home')}}">Home</a></li>
                        <li class="active">Manage Users</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="page-section ">
            <div class="container">
                @if (Session::has('message'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('message')}}
                    </div>
                 @endif
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Username</th>
                            <th>Full name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Control</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>
                                @if($user->profile_photo_path == NULL)
                                <div class="mt-2" x-show="! photoPreview">
                                    {{-------- we added -------}}
                                    <img src="{{ asset('storage/profile-photos/avatar.png') }}" style="width:80px; highet:80px">
                                </div>
                                @else
                                    <div class="mt-2" x-show="! photoPreview">
                                        <img src="{{ asset('storage') }}/{{$user->profile_photo_path}}"  style="width:80px; highet:80px" >
                                    </div>
                                @endif
                            </td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->fullname}}</td>
                            <td>{{$user->email}}</td>
                            <td>$320,800</td>
                            <td>                                           

                            </td>

                        </tr>
                        @endforeach
                     
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Username</th>
                            <th>Full name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Control</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </section>
    </div>
</main>


@push('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script>
       $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    
@endpush