
@include('admin.components.header')
        <div id="layoutSidenav">
            <!-- side nav -->
            @include('admin.components.side')
            <div id="layoutSidenav_content">
                <main>
                   <!-- dashboard -->
                   <div class="container-fluid">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">About Page Update</li>
                    </ol>
              
                    <div class="row">
                        {{-- name --}}
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0">
                                <div class="card-body py-4">
                                    <div class="d-flex align-items-start">
                                        <div class="row g-0 w-100">
                                            <div class="col-6">
                                                <div class="p-1 m-1">
                                                    <h4>Update Name</h4>
                                                    @foreach ( $about as $item )

                                                    <div class="container-fluid-sm">
                                                    <div class="mb-3">
                                                        <form action="{{route('about.update', ['id'=>$item->id])}}" method="post" class="row gy-2 gx-3 align-items-center">
                                                            @csrf
                                                            @method('post')
                                                        <label for="exampleFormControlInput1" class="form-label">Name:</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="{{$item->name}}" value="{{$item->name}}">
                                                        </div>
                                                    </div>
    
                                                </div>
                                            </div>
                                            <div class="col-6 align-self-end text-end">
                                                <img src="{{ asset('image/user.png')}}" class="img-fluid illustration-img"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
    
                        {{-- role --}}
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0">
                                <div class="card-body py-4">
                                    <div class="d-flex align-items-start">
                                        <div class="row g-0 w-100">
                                            <div class="col-6">
                                                <div class="p-1 m-1">
                                                    <h4>Update Role</h4>
                                                    <div class="container-fluid-sm">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Role:</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1"  name="role" placeholder="{{$item->role}}" value="{{$item->role}}">
                                                        </div>
                                                    </div>
    
                                                </div>
                                            </div>
                                            <div class="col-6 align-self-end text-end">
                                                <img src="{{ asset('image/role.png')}}" class="img-fluid illustration-img"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                       {{-- form group --}}
                       <form action="{{ route('about.update', ['id' => $item->id]) }}" method="post">
                        @csrf
                        @method('post')
                    
                        <h3>Birthday</h3>
                        <div class="row">
                            <!-- Birthday Group -->
                            <div class="col-md-4">
                                
                                <div class=" input-group mb-3">
                                    <span class="input-group-text">Month</span>
                                    <select class="form-control" name="month" id="autoSizingSelect">
                                        <option selected>Choose...</option>
                                        <option value="{{$item->month}}" selected>{{$item->month}}</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class=" input-group mb-3">
                                    <span class="input-group-text">Day</span>
                                    <input type="text" class="form-control" name="day" placeholder="{{$item->day}}" value="{{$item->day}}" aria-label="Server">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class=" input-group mb-3">
                                    <span class="input-group-text">Year</span>
                                    <input type="text" class="form-control" name="year" placeholder="{{$item->year}}" value="{{$item->year}}" aria-label="Server">
                                </div>
                            </div>
                               
                           
                    
                            <!-- Website Group -->
                            <div class="col-md-4">
                                <h3>Website</h3>
                                <div class=" input-group mb-3">
                                    <span class="input-group-text">www.</span>
                                    <input type="text" class="form-control" name="site" placeholder="{{$item->site}}" value="{{$item->site}}" id="autoSizingInputGroup" aria-label="Username">
                                    <span class="input-group-text">.com</span>
                                </div>
                            </div>
                    
                            <!-- Degree Group -->
                            <div class="col-md-4">
                                <h3>Degree</h3>
                                <div class=" input-group mb-3">
                                    <span class="input-group-text"><i class="uil uil-globe"></i></i></span>
                                    <input type="text" class="form-control" name="course" placeholder="{{$item->course}}" value="{{$item->course}}" id="autoSizingInputGroup" aria-label="Username">
                                </div>
                            </div>

                             <!-- Location Group -->
                             <div class="col-md-4">
                                <h3>Location</h3>
                                <div class=" input-group mb-3">
                                    <span class="input-group-text"><i class="uil uil-location-pin-alt"></i></span>
                                    <input type="text" class="form-control" name="location" placeholder="{{$item->location}}" value="{{$item->location}}" id="autoSizingInputGroup" aria-label="Username">
                                </div>
                            </div>
                            
                        </div>
                    
                        <div class="row">
                           
                            <!-- Age Group -->
                            <div class="col-auto">
                                <h3>Age</h3>
                                <div class=" input-group mb-3">
                                    <span class="input-group-text"><i class="uil uil-calendar-alt"></i></i></span>
                                    <input type="text" class="form-control" name="age" placeholder="{{$item->age}}" value="{{$item->age}}" id="autoSizingInputGroup" aria-label="Username">
                                </div>
                            </div>
                            <!-- Email Group -->
                            <div class="col-auto">
                                <h3>Email</h3>
                                <div class=" input-group mb-3">
                                    <span class="input-group-text"><i class="uil uil-envelope-edit"></i></i></i></span>
                                    <input type="text" class="form-control" name="email" placeholder="{{$item->email}}" value="{{$item->email}}" id="autoSizingInputGroup" aria-label="Username">
                                    <span class="input-group-text">@gmail.com</i></i></i></span>
                                </div>
                            </div>

                             <!-- Phone Group -->
                             <div class="col-auto">
                                <h3>Phone</h3>
                                <div class=" input-group mb-3">
                                    <span class="input-group-text"><i class="uil uil-phone">+639</i></i></i></i></span>
                                    <input type="text" class="form-control" name="phone" placeholder="{{$item->phone}}" value="{{$item->phone}}" id="autoSizingInputGroup" aria-label="Username">
                                    
                                </div>
                            </div>

                             <!-- Freelance Group -->
                             <div class="col-auto">
                                <h3>Freelance</h3>
                                <div class=" input-group mb-3">
                                    <span class="input-group-text"><i class="uil uil-ellipsis-h"></i></span>
                                    <select class="form-select" name="freelance" value="{{$item->freelance}}" id="autoSizingSelect">
                                        <option selected>Choose...</option>
                                        <option value="{{$item->freelance}}">{{$item->freelance}}</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>
                                    
                                </div>
                            </div>
                        </div>
                    
                      
                    
                        <!-- Description Group -->
                        <div class="card border-0 mt-5">
                            <!-- Description Textarea -->
                           
                                <div class="card-header">
                                    <h5 class="card-title">
                                        Update Description
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" placeholder="" value="{{$item->description}}">{{$item->description}}</textarea>
                                        <label for="floatingTextarea2">Description</label>
                                      </div>
                                
                            <button type="submit" class="btn btn-primary mt-2">Update</button>
                        </div>
                    </form>
                    </div>
                    </div>
                  
                   @endforeach   
               
               
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