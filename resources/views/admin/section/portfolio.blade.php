
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
                                        <th>Project Name</th>
                                        <th>Image</th>
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
                                    @foreach ( $work as $item )

                                    <tr>
                                        <td class="text-align: center;">{{$item->name}}</td>
                                        <td>
                                            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#imageModal" data-image="{{$item->image}}">
                                                <lord-icon
                                                src="https://cdn.lordicon.com/fkaukecx.json"
                                                trigger="hover"
                                                style="width:30px;height:30px">
                                            </lord-icon>
                                            </button>
                                            </td>
                                        <td>{{$item->created_at}}</td>
                                        <td>{{$item->updated_at}}</td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <div class="row">
                                                <div class="col"></div> <!-- Empty column to push buttons to center -->
                                                <div class="col-auto">
                                                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#updateModal" data-id="{{$item->id}}" data-name="{{$item->name}}" data-description="{{$item->description}}" data-site="{{$item->site}}" data-img="{{$item->image}}">
                                                        <lord-icon src="https://cdn.lordicon.com/xpgofwru.json" trigger="hover" style="width:30px;height:30px; margin-right: 10px;"></lord-icon>
                                                    </button>
                                                </div>
                                                <div class="col-auto">
                                                    <form action="{{route('work.destroy', ['id'=>$item->id])}}" method="post" class="none">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn">
                                                            <lord-icon src="https://cdn.lordicon.com/skkahier.json" trigger="hover" style="width:30px;height:30px;"></lord-icon>
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="col"></div> <!-- Empty column to push buttons to center -->
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                 
                    <!-- Modal -->
                    <div class=" modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Portfolio Add</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('work.create')}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    @method('post')
                                 <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" name="name" placeholder="name@example.com">
                                    <label for="floatingInput">Project name</label>
                                  </div>

                                  <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Desccription</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                                  </div>

                                  <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" name="site" placeholder="name@example.com">
                                    <label for="floatingInput">Site</label>
                                  </div>

                                  <div class="mb-3">
                                    <label for="imageInput" class="form-label">Select Image</label>
                                    <input type="file" class="form-control" name="image" id="imageInput" accept="image/*">
                                  </div>
                                  <div id="imagePreview"></div>
                                  
                                  
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
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
                                        <img src="" id="image" class="img-thumbnail" alt="Preview">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        </div>
                    </div>

                    {{-- update --}}
                    <div class=" modal fade " id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Update Portfolio</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('work.update', ['id'=> '__ID__'])}}" enctype="multipart/form-data" method="post" id="updateForm">
                                    @csrf
                                    @method('put')
                                <div class="form-floating mb-3">
                                    <input type="hidden" name="id" id="updateId">
                                   <input type="text" class="form-control" name="name" id="name" placeholder="name@example.com">
                                   <label for="floatingInput">Project name</label>
                                 </div>

                                 <div class="mb-3">
                                   <label for="exampleFormControlTextarea1"  class="form-label">Desccription</label>
                                   <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                                 </div>

                                 <div class="form-floating mb-3">
                                   <input type="text" class="form-control" name="site" id="site" placeholder="name@example.com">
                                   <label for="floatingInput">Site</label>
                                 </div>        
                           </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                        </div>
                        </div>
                    </div>
  
                       {{-- script update modal --}}
                       <script>
                        // Call the setFormAction function when the modal is shown
                        var myModal = document.getElementById('updateModal');
                                        
                        myModal.addEventListener('show.bs.modal', function(event) {
                            var button = event.relatedTarget;
                            var id = button.getAttribute('data-id');
                            var name = button.getAttribute('data-name');
                            var description = button.getAttribute('data-description');
                            var site = button.getAttribute('data-site');
                            var img = button.getAttribute('data-img');
                           
                                    
                            // Set the value of the hidden input field to the id
                            document.getElementById('updateId').value = id;
                            // Call the setFormAction function to update the form action
                            setFormAction(id);

                            // Set the values of the modal inputs
                            document.getElementById('name').value = name;
                            document.getElementById('description').value = description  ;
                            document.getElementById('site').value = site;
                            document.getElementById('img"').value = img;
                           
                        });

                        var myImageModal = document.getElementById('imageModal');
                                        
                                        myImageModal.addEventListener('show.bs.modal', function(event) {
                                            var button = event.relatedTarget;
                                            var image = button.getAttribute('data-image');
                                        
                                            // Set the src attribute of the image element in the modal
                                            document.getElementById('image').src = '<?= asset("upload/") ?>' + '/' + image;
                                        });
                                        

                        // Function to dynamically set the form action
                        function setFormAction(id) {
                            var form = document.getElementById('updateForm');
                            var action = form.getAttribute('action');
                            // Replace '__ID__' in the action attribute with the actual id value
                            form.setAttribute('action', action.replace('__ID__', id));
                        }
                    </script>
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