@extends('layouts.main')
{{-- @section('title', 'Page List') --}}
@section('css')
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        /* Hide default HTML checkbox */
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
@endsection
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header ">
                      @include('partials.alerts')
                    <h6 class="m-0 font-weight-bold text-primary">Pages List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Banner Image</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($templates as $key=>$template)
                                <tr>
                                 
                                    <td>{{$key+1}}</td>
                                     <td>
                                         @if($template->banner_image)
                                         <img src="{{ asset('pages_images/'.$template->banner_image) }}" alt=""
                                                width="100">
                                          @else
                                           <p>No image available</p>
                                         @endif
                                    </td>
                                    <td>{{$template->title}}</td>
                                    <td>{{$template->status}}</td>
                                 
                                    <td>
                                     @if($template->pages_id == "template1")
                                     <a href="{{ route('page1.create', ['id' => $id,'edition_temp_id'=>$template->id,'page_no'=>$template->page_no]) }}"> <button
                                                class="btn btn-primary">Content</button></a>
                                     @elseif($template->pages_id == "template2")
                                     <a href="{{ route('page2.index', ['id' => $id, 'edition_temp_id'=>$template->id,'page_no'=>$template->page_no]) }}"> <button
                                        class="btn btn-primary">Content</button></a>
                                     @elseif($template->pages_id == "template3")
                                     <a href="{{ route('page3.index', ['id' => $id, 'edition_temp_id'=>$template->id,'page_no'=>$template->page_no]) }}"> <button
                                        class="btn btn-primary">Content</button></a>
                                    @elseif($template->pages_id == "template4")
                                    <a href="{{ route('page4.index', ['id' => $id,'edition_temp_id'=>$template->id,'page_no'=>$template->page_no]) }}"> <button
                                        class="btn btn-primary">Content</button></a>
                                    @elseif($template->pages_id == "template5")
                                    <a href="{{ route('page5.add', ['id' => $id,'edition_temp_id'=>$template->id,'page_no'=>$template->page_no]) }}"> <button
                                        class="btn btn-primary">Content</button></a>
                                        @elseif($template->pages_id == "template6")
                                        <a href="{{ route('created', ['id' => $id,'edition_temp_id'=>$template->id,'page_no'=>$template->page_no]) }}"> <button
                                            class="btn btn-primary">Content</button></a>
                                        @endif
                                        <button data-id="{{$template->id }}" id="edit-template" type="button"
                                            class="btn btn-warning edit-template">Edit</button>
                                      <button type="button" data-id="{{$template->id}}" class="btn btn-danger delete-button" data-toggle="modal" data-target="#deleteModal">Delete</button>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
<!-- Modal -->
    <div class="modal fade" id="deleteModal">
     <div class="modal-dialog">
      <div class="modal-content">
       <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
       </div>
       <div class="modal-body">
        <p>Are you sure you want to delete this page ?</p>
        <form action="{{url('/delete-page')}}" method="POST">
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
     <div class="modal fade" id="templateModal" tabindex="-1" aria-labelledby="templateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="templateModalLabel">Update Page</h5>
                    <button type="button" class="close close_modal" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{url('add/template')}}" method="POST" id="templateForm" enctype="multipart/form-data">
                        @csrf
                        <!-- Hidden edition_id field -->
                        <input type="hidden" name="id" id="page_id">
                        <input type="hidden" name="edition_id" id="edition_id">
                        <!-- Title input field -->
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="pages">Choose Template</label>
                            <select class="form-control" id="pages" name="pages_id" required>
                                <option value="">Select page</option>
                                <!-- Populate options dynamically, e.g., using a loop or from a data source -->
                                <option value="template1">Template1</option>
                                <option value="template2">Template2</option>
                                <option value="template3">Template3</option>
                                <option value="template4">Template4</option>
                                <option value="template5">Template5</option>
                                <option value="template6">Template6</option>
                            </select>
                        </div>
                        <img id="oldImage" class="mb-2 ml-2" src="" width="60" alt="Old Image">
                            <div class="col-md-12 mb-4">
                                <div class="form-group mb-3">
                                    <label class="form-label">Banner Image</label><br>
                                   <input type="file" name="banner_image" accept="image/*">
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
                    <button type="submit" class="btn btn-primary">Update changes</button>
                </div>
            </form>

            </div>
        </div>
    </div>

@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
    //   $("#close_delete_modal").click(function() {
    //         $("#deleteModal").modal("hide"); // Hide the modal
    //     });
        $(".close_modal").click(function() {
            $("#templateModal").modal("hide");
        });
          $(".delete-button").click(function() {
            var templateId = $(this).data("id"); // Get the data-id attribute value
            $("#deleteModal input[name='id']").val(templateId); // Set the value of the hidden input field
        });

        // Handle the click event of the "No" button to close the modal
  
       $(".edit-template").click(function() {
            var id = $(this).data("id");
            // alert(id);
            // Make an AJAX request to get the record based on the templateId
            $.ajax({
                url: "{{url('/get-page')}}/"+id,
                method: "GET",
                context: document.body,
                dataType: "json",
                success: function(response) {
                    // console.log("response",response);
                    // Populate the modal fields with the response data
                    $("#page_id").val(response.id);
                    $("#edition_id").val(response.edition_id);
                    $("#title").val(response.title);
                    $("#pages").val(response.pages_id);
                    $("#status").val(response.status);
                    if (response.banner_image) {
                    $("#oldImage").attr("src", "{{ asset('pages_images/') }}/" + response.banner_image);
                    } else {
                    // If there's no old image, you can hide the element or set a default image
                    $("#oldImage").addClass('d-none');
                    }
               $("#templateModal").modal("show");
                },
                error: function(xhr, status, error) {
                    // Handle any errors here
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>




