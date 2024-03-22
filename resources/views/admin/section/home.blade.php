
@include('admin.components.header')
        <div id="layoutSidenav">
            <!-- side nav -->
            @include('admin.components.side')
            <div id="layoutSidenav_content">
                <main>
                   <!-- dashboard -->
                   <div class="container-fluid">
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Home Page Update</li>
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
                                                @foreach ( $home as $item )

                                                <div class="container-fluid-sm">
                                                <div class="mb-3">
                                                    <form action="{{route('admin.save', ['id'=>$item->id])}}" method="post">
                                                        @csrf 
                                                        @method('post')  
                                                    <label for="exampleFormControlInput1" class="form-label">Name:</label>
                                                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="{{$item->name}}" value="{{$item->name}}">
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
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="role" placeholder="{{$item->role}}"  value="{{$item->role}}">
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
                   </div>
                   <!-- description -->
                   <div class="card border-0">
                    <div class="card-header">
                        <h5 class="card-title">
                            Update Description
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px" name="description" value="{{$item->description}}">{{$item->description}}</textarea>
                            <label for="floatingTextarea2"></label>
                          </div>
                    </div>
                    <button type="submit" class="btn btn-primary" >
                        Update
                     </button>
                    </form>
                     @endforeach
                </div>
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