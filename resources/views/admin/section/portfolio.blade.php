
@include('admin.components.header')
        <div id="layoutSidenav">
            <!-- side nav -->
            @include('admin.components.side')
            <div id="layoutSidenav_content">
                <main>
                   <!-- dashboard -->
                   <div class="container-fluid">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Portfolio Update</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-table me-1"></i>
                              Portfolio
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Add
                                </button>
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Company Name</th>
                                        <th>Role</th>
                                        <th>Date Created</th>
                                        <th>Date Updated</th>
                                        <th style="text-align: center!impoertant;" class="align-items-center">Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Project Name</th>
                                        <th>Image</th>
                                        <th>Date Created</th>
                                        <th>Date Updated</th>
                                        <th style="text-align: center!impoertant;" class="align-items-center">Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td class="text-align: center;">Donna Snider</td>
                                        <td>
                                            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#imageModal">
                                                <lord-icon
                                                src="https://cdn.lordicon.com/fkaukecx.json"
                                                trigger="hover"
                                                style="width:30px;height:30px">
                                            </lord-icon>
                                            </button>
                                            </td>
                                        <td>New York</td>
                                        <td>27</td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#updateModal">
                                                <lord-icon
                                                src="https://cdn.lordicon.com/xpgofwru.json"
                                                trigger="hover"
                                                style="width:30px;height:30px; margin-right: 10px;  ">
                                            </lord-icon>
                                            </button>

                                            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#updateModal">
                                                <lord-icon
                                                src="https://cdn.lordicon.com/skkahier.json"
                                                trigger="hover"
                                                style="width:30px;height:30px">
                                            </lord-icon>
                                            </button>
                                    </td>
                                       
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                 
                    <!-- Modal -->
                    <div class=" modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                 <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Project name</label>
                                  </div>

                                  <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Desccription</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                  </div>

                                  <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Site</label>
                                  </div>

                                  <div class="mb-3">
                                    <label for="imageInput" class="form-label">Select Image</label>
                                    <input type="file" class="form-control" id="imageInput" accept="image/*">
                                  </div>
                                  <div id="imagePreview"></div>
                                  
                                  
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        </div>
                    </div>

                    {{-- image modal --}}
                    <div class=" modal fade " id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="imageModalLabel">Image Project</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center">
                                    <div id="imagePreview">
                                        <img src="{{asset('image/kurt-about.jpg')}}" class="img-thumbnail" alt="Preview">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        </div>
                    </div>

                    {{-- update --}}
                    <div class=" modal fade " id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-floating mb-3">
                                   <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                   <label for="floatingInput">Project name</label>
                                 </div>

                                 <div class="mb-3">
                                   <label for="exampleFormControlTextarea1" class="form-label">Desccription</label>
                                   <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                 </div>

                                 <div class="form-floating mb-3">
                                   <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                   <label for="floatingInput">Site</label>
                                 </div>

                               
                                 <div class="mb-3">
                                    <label for="imageInputupdate" class="form-label">Select Image</label>
                                    <input type="file" class="form-control" id="imageInputupdate" accept="image/*">
                                  </div>
                                  <div id="imagePreviewupdate"></div>
                                
                                
                                 
                                 
                           </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
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