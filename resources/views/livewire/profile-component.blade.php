<main>
    <div class="content-area">
        <section class="page-section breadcrumbs ">
            <div class="container">
                <div class="page-header">
                    <h2 class="section-title"><span>Profile</span></h2>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home')}}">Home</a></li>
                        <li class="active">Profile</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="page-section ">
            <div class="container">
                <div class="contact-info">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="media-list">
                                <div class="media">
                                    <i class="pull-left fa fa-user" aria-hidden="true"></i>
                                    <div class="media-body">
                                        <strong>Name:</strong><br>
                                        {{ $user->name }}
                                        <br>
                                        <strong>Full Name:</strong>
                                        <br>
                                        {{ $user->fullname }}
                                    </div>
                                  
                                </div>
        
                                <div class="media">
                                   <i class="pull-left fa fa-envelope-o" aria-hidden="true"></i>
                                    <div class="media-body">
                                        <strong>Email:</strong><br>
                                        {{ $user->email }}
                                    </div>
                                </div>
                                <div class="media">
                                    <i class="pull-left  fa fa-sort" aria-hidden="true"></i>
                                     <div class="media-body">
                                         <strong>Status :</strong><br>
                                         0123456789
                                     </div>
                                 </div>

                            </div>
                            <div class="required" style="text-align: center;">
                                <a href="{{ route('profile.show')}}"   class="btn  btn-theme btn-theme-dark " > Edit Profile</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                @if($user->profile_photo_path == NULL)
                                <div class="mt-2" x-show="! photoPreview">
                                    {{-------- we added -------}}
                                    <img src="{{ asset('storage/profile-photos/avatar.png') }}" alt="" class="rounded-full h-20 w-20 object-cover">
                                </div>
                                @else
                                    <div class="mt-2" x-show="! photoPreview">
                                        <img src="{{ asset('storage') }}/{{$user->profile_photo_path}}" alt="" class="rounded-full h-20 w-20 object-cover">
                                    </div>
                                @endif
            
                            </div>
                        </div>
                    </div>

                   

                </div>
                
            </div>
        </section>
    </div>
</main>
