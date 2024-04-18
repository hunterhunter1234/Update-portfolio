
@include('admin.components.header')
        <div id="layoutSidenav">
            <!-- side nav -->
            @include('admin.components.side')
            <div id="layoutSidenav_content">
                <main>
                   <!-- dashboard -->
                   <div class="container-fluid">
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Change pass</li>
                        </ol>
                   <div class="row">
                    <form action="{{route('login.savepass')}}" method="post">
                        @csrf
                        @method('post')
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">New password </label>
                        <input type="password" name="pass1" class="form-control" id="formGroupExampleInput" placeholder="Minimum 8 characters">
                      </div>
                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Confirm Password</label>
                        <input type="password" name="pass2" class="form-control" id="formGroupExampleInput2" placeholder="Confirm Password">
                      </div>
                    <button type="submit" class="btn btn-primary" >
                        Update
                     </button>
                    </form>
                    
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