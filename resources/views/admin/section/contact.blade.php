
@include('admin.components.header')
        <div id="layoutSidenav">
            <!-- side nav -->
            @include('admin.components.side')
            <div id="layoutSidenav_content">
                <main>
                   <!-- dashboard -->
                   <div class="container-fluid">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Contact Page Update</li>
                    </ol>
                   <div class="row">
                    @foreach ($contact as $item )
                        
                    
                    <form action="{{route('contact.update', ['id'=>$item->id])}}" method="POST" class="row gy-2 gx-3 align-items-center">
                        @csrf
                        @method('put')
                        {{-- website --}}
                        <div class="col-auto">
                            <h3>Contact</h3>
                            <div class=" input-group mb-3">
                                <span class="input-group-text"><i class="uil uil-phone-volume">+639</i></span>
                                <input type="text" class="form-control" placeholder="{{$item->number}}" value="{{$item->number}}" name="number" id="autoSizingInputGroup" aria-label="Username">
                                
                            </div>
                          </div>
                          
                        

                        <div class="col-auto">
                            <h3>Office</h3>
                            <div class=" input-group mb-3">
                                <span class="input-group-text"><i class="uil uil-location-pin-alt"></i></span>
                                <input type="text" class="form-control" placeholder="{{$item->location}}" value="{{$item->location}}" name="location" id="autoSizingInputGroup" aria-label="Username">
                            </div>
                        </div>
                       
                        {{-- email --}}
                        <div class="col-auto">
                            <h3>Email</h3>
                            <div class=" input-group mb-3">
                                <span class="input-group-text"><i class="uil uil-envelope-edit"></i></i></i></span>
                                <input type="text" class="form-control" placeholder="{{$item->emailr}}" value="{{$item->email}}"  name="email" id="autoSizingInputGroup" aria-label="Username">
                                <span class="input-group-text">@gmail.com</i></i></i></span>
                            </div>
                        </div>               
                        {{-- website --}}
                        <div class="col-auto">
                            <h3>Website</h3>
                            <div class=" input-group mb-3">
                                <span class="input-group-text">www.</span>
                                <input type="text" class="form-control" placeholder="{{$item->site}}" value="{{$item->site}}" name="site" id="autoSizingInputGroup" aria-label="Username">
                                <span class="input-group-text">.com</span>
                            </div>
                          </div>
                       
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Update
                        </button>
                        @endforeach
                      </form>   
                    </div>          
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Zapata &copy; KurtZapata.com</div>
                           
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        @include('admin.components.footer')      