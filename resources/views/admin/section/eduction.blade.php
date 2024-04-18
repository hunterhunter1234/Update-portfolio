
@include('admin.components.header')
        <div id="layoutSidenav">
            <!-- side nav -->
            @include('admin.components.side')
            <div id="layoutSidenav_content">
                <main>
                   <!-- dashboard -->
                   <div class="container-fluid">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Education Update</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-table me-1"></i>
                               Education 
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
                                        <th>School Level</th>
                                        <th>School name</th>
                                        <th>Date Created</th>
                                        <th>Date Updated</th>
                                        <th style="text-align: center!impoertant;" class="align-items-center">Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>School Level</th>
                                        <th>School name</th>
                                        <th>Date Created</th>
                                        <th>Date Updated</th>
                                        <th style="text-align: center!impoertant;" class="align-items-center">Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($education as $item )
 
                                    <tr>
                                        <td>{{$item->level}}</td>
                                        <td>{{$item->school}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>{{$item->updated_at}}</td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <div class="row">
                                                <div class="col"></div> <!-- Empty column to push buttons to center -->
                                                <div class="col-auto">
                                                    <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#updateModal" data-id="{{$item->id}}" data-level="{{$item->level}}" data-school="{{$item->school}}" data-start="{{$item->start}}" data-end="{{$item->end}}">
                                                        <lord-icon
                                                        src="https://cdn.lordicon.com/xpgofwru.json"
                                                        trigger="hover"
                                                        style="width:30px;height:30px; margin-right: 10px;  ">
                                                    </lord-icon>
                                                    </button>
                                                </div>
                                            
                                            <div class="col-auto">
                                            <form action="{{route('education.delete', ['id'=>$item->id])}}" method="post">
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
                                            </div>
                                            <div class="col"></div> <!-- Empty column to push buttons to center -->
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
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Education</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('education.add')}}" method="post">
                                    @csrf
                                    @method('post')
                                 <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" name="level" >
                                    <label for="floatingInput">School level</label>
                                  </div>

                                  <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" name="school" >
                                    <label for="floatingInput">School name</label>
                                  </div>

                                  <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" name="start" >
                                    <label for="floatingInput">Year Started</label>
                                  </div>

                                  <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" name="end" >
                                    <label for="floatingInput">Year Ended</label>
                                  </div>
                                  
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                        </div>
                        </div>
                    </div>

                    {{-- update --}}
                    <div class=" modal fade " id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Update Education</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('education.update', ['id'=> '__ID__'])}}" method="post" id="updateForm">
                                    @csrf
                                    @method('put')
                                <div class="form-floating mb-3">
                                    <input type="hidden" name="id" id="updateId">
                                   <input type="text" class="form-control" id="level" name="level">
                                   <label for="floatingInput">School level</label>
                                 </div>

                                 <div class="form-floating mb-3">
                                   <input type="text" class="form-control" id="school" name="school">
                                   <label for="floatingInput">School name</label>
                                 </div>

                                 <div class="form-floating mb-3">
                                   <input type="text" class="form-control" id="start" name="start">
                                   <label for="floatingInput">Year Started</label>
                                 </div>

                                 <div class="form-floating mb-3">
                                   <input type="text" class="form-control" id="end" name="end">
                                   <label for="floatingInput">Year Ended</label>
                                 </div>
                                 
                           </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
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
                                var level = button.getAttribute('data-level');
                                var school = button.getAttribute('data-school');
                                var start = button.getAttribute('data-start');
                                var end = button.getAttribute('data-end');
                                        
                                // Set the value of the hidden input field to the id
                                document.getElementById('updateId').value = id;
                                // Call the setFormAction function to update the form action
                                setFormAction(id);
    
                                // Set the values of the modal inputs
                                document.getElementById('level').value = level;
                                document.getElementById('school').value = school;
                                document.getElementById('start').value = start;
                                document.getElementById('end').value = end;
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