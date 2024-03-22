
@include('admin.components.header')
        <div id="layoutSidenav">
            <!-- side nav -->
            @include('admin.components.side')
            <div id="layoutSidenav_content">
                <main>
                   <!-- dashboard -->
                   <div class="container-fluid">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Skill Update</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
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
                                        <th>Title</th>
                                        <th>Percent</th>
                                        <th>Date Created</th>
                                        <th>Date Updated</th>
                                        <th style="text-align: center!impoertant;" class="align-items-center">Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Title</th>
                                        <th>Percent</th>
                                        <th>Date Created</th>
                                        <th>Date Updated</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ( $skill as $item )
                                    <tr>
                                        

                                        <td>{{$item->title}}</td>
                                        <td>{{$item->percent}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>{{$item->updated_at}}</td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#updateModal" data-id="{{$item->id}}" data-title="{{$item->title}}" data-percent="{{$item->percent}}">
                                                <lord-icon
                                                src="https://cdn.lordicon.com/xpgofwru.json"
                                                trigger="hover"
                                                style="width:30px;height:30px; margin-right: 10px;  ">
                                            </lord-icon>
                                            </button>
                                            
                                            <form action="{{route('skill.delete', ['id'=>$item->id])}}" method="post">
                                             @csrf
                                             @method('delete')   
                                            <button type="submit" class="btn  "  >
                                                <lord-icon
                                                src="https://cdn.lordicon.com/skkahier.json"
                                                trigger="hover"
                                                style="width:30px;height:30px">
                                            </lord-icon>
                                            </button>
                                            </form>
                                    </td>
                                    @endforeach
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
                                <form action="{{route('skill.add')}}" method="post">
                                    @csrf
                                    @method('post')
                                 <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="title" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Title</label>
                                  </div>

                                  <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="percent" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Percent</label>
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

                    {{-- update --}}
                    <div class=" modal fade " id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="updateModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('skill.update', ['id'=> '__ID__'])}}" method="post" id="updateForm">
                                    @csrf
                                    @method('put')
                                 <div class="form-floating mb-3">
                                    <input type="hidden" name="id" id="updateId">
                                    <input type="text" class="form-control" id="title" name="title">
                                    <label for="floatingInput">Title</label>
                                  </div>

                                  <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="percent" id="percent" >
                                    <label for="floatingInput">Percent</label>
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
                            var title = button.getAttribute('data-title');
                            var percent = button.getAttribute('data-percent');
                                    
                            // Set the value of the hidden input field to the id
                            document.getElementById('updateId').value = id;
                            // Call the setFormAction function to update the form action
                            setFormAction(id);

                            // Set the values of the modal inputs
                            document.getElementById('title').value = title;
                            document.getElementById('percent').value = percent;
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