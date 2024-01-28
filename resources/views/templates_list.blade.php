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
                    <h6 class="m-0 font-weight-bold text-primary">Templates List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Template Title</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($total_templates as $key=>$template)
                                   <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$template->template_name}}</td>
                                        <td>
                                        <a href="{{url('/view-template/'.$template->type)}}" class="btn btn-info">View Template</a>
                                        <button data-id="{{$template->id }}" data-name="{{$template->template_name }}" id="edit-template" type="button"
                                            class="btn btn-warning edit-template" data-toggle="modal" data-target="#deleteModal">Edit</button>
                                         
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
    <!-- /.container-fluid -->
    <div class="modal fade" id="deleteModal">
     <div class="modal-dialog">
      <div class="modal-content">
       <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
       </div>
       <div class="modal-body">
        <form action="{{url('/update-template')}}" method="POST">
            @csrf
          <input type="hidden" name="id" id="template-id"> 
         <div class="form-group">
                    <label for="title">Template Title</label>
                     <input type="text" class="form-control" name="template_name" id="template-name"> 
        </div>
         
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary close_delete_modal" data-dismiss="modal" id="close_delete_modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
       </div>
        </form> 
      </div>
     </div>
</div>

@endsection
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $(".close_modal").click(function() {
            $("#templateModal").modal("hide");
        });
          $(".edit-template").click(function() {
            var templateId = $(this).data("id");
             var templateName = $(this).data("name");
              $("#deleteModal input[name='id']").val(templateId)                                                    // Get the data-id attribute value
            $("#deleteModal input[name='template_name']").val(templateName); // Set the value of the hidden input field
        });


    });
</script>
