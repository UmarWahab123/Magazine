@extends('layouts.main')
{{-- @section('title', 'List') --}}
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header ">
                    @include('partials.alerts')
                    <h6 class="m-0 font-weight-bold text-primary">Edition List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Default</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($editionlists as $key=>$editionlist)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td><img src="{{ asset('uploads/' . $editionlist->edition_image) }}" alt=""
                                                width="100"></td>
                                        <td>{{ $editionlist->edition_title }}</td>
                                        <td>{{ $editionlist->status }}</td>
                                        <td>
                                         @if($editionlist->default == 1)
                                            <span style="color: green; font-weight: bold;">True</span>
                                         @else
                                            <span style="color: red; font-weight: bold;">False</span>
                                         @endif
                                        </td>
                                        <td>
                                            @if($editionlist->default != 1)
                                            <a href="{{ route('change.default', $editionlist->id) }}" type="button"
                                            class="btn btn-info">Default</a>
                                            @endif
                                            <a href="{{ route('pagelist', ['id' => $editionlist->id]) }}" class="btn btn-primary">View Pages</a>
                                            <button type="button" edition_id="{{$editionlist->id}}" class="btn btn-primary add-template">Add Page</button>
                                              <a href="{{ route('editlist.edit', $editionlist) }}" type="button"
                                            class="btn btn-warning">Edit</a>
                                           <button type="button" data-id="{{$editionlist->id}}" class="btn btn-danger delete-button" data-toggle="modal" data-target="#deleteModal">Delete </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->
    </div>
      <div class="modal fade" id="deleteModal">
     <div class="modal-dialog">
      <div class="modal-content">
       <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete List</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
       </div>
       <div class="modal-body">
        <p>Are you sure you want to delete this list ?</p>
        <form action="{{url('/delete-list')}}" method="POST">
            @csrf
          <input type="hidden" name="id" id="delete-id">  
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary close_delete_modal" data-dismiss="modal" id="close_delete_modal">No</button>
        <button type="submit" class="btn btn-danger">Yes</button>
       </div>
        </form> 
      </div>
     </div>
</div>
    <!-- /.container-fluid -->
    <div class="modal fade" id="templateModal" tabindex="-1" aria-labelledby="templateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="templateModalLabel">Add Page</h5>
                    <button type="button" class="close close_modal" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{url('add/template')}}" method="POST" id="templateForm" enctype="multipart/form-data">
                        @csrf
                        <!-- Hidden edition_id field -->
                        <input type="hidden" name="edition_id" id="edition_id">
                        <!-- Title input field -->
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="pages">Choose Template</label>
                            <select class="form-control" id="pages" name="pages_id" required>
                                <option value="">select page</option>
                                <!-- Populate options dynamically, e.g., using a loop or from a data source -->
                                @foreach($total_templates as $template)
                                <option value="{{$template->type}}">{{$template->template_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Pages dropdown -->
                        {{-- <div class="form-group">
                            <label for="pages">Pages</label>
                            <select class="form-control" id="pages" name="pages_id">
                                <!-- Populate options dynamically, e.g., using a loop or from a data source -->
                                <option value="">Select template</option>
                                @foreach($data as $pageName => $pageData)
                                <option value="{{ $pageData['type'] }}">
                                    {{ $pageData['title'] ?? $pageData['page_title'] ?? 'Title not available' }}
                                </option>
                                @endforeach
                            </select>
                        </div> --}}
                            <div class="col-md-12 mb-4">
                                <div class="form-group mb-3">
                                    <label class="form-label">Banner Image</label><br>
                                   <input type="file" name="banner_image" accept="image/*" required>
                                </div>
                            </div>
                        <!-- Status dropdown -->
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                                <!-- Populate options dynamically, e.g., using a loop or from a data source -->
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close_modal" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>

            </div>
        </div>
    </div>


@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $(".add-template").click(function() {
            var editionId = $(this).attr('edition_id');
            $("#edition_id").val(editionId);
            $("#templateModal").modal("show");
        });
        $(".close_modal").click(function() {
            $('#templateForm')[0].reset();
            $("#templateModal").modal("hide");
        });
    });
    $(".delete-button").click(function() {
            var listId = $(this).data("id"); // Get the data-id attribute value
            $("#deleteModal input[name='id']").val(listId); // Set the value of the hidden input field
        });
</script>
